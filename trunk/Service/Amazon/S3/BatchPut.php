<?php
/**
 * 
 * BatchPut class for S3.
 * 
 * Provide a source directory and a destination bucket/path, 
 * and this class will recursively upload the contents
 * of the source directory to S3 in parallel, using
 * curl_multi* functions.
 * 
 * @author Clay Loveless <clay@killersoft.com>
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 * Copyright (c) 2009, Clay Loveless. All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 * 
 * * Redistributions of source code must retain the above copyright
 *   notice, this list of conditions and the following disclaimer.
 * 
 * * Redistributions in binary form must reproduce the above
 *   copyright notice, this list of conditions and the following
 *   disclaimer in the documentation and/or other materials provided
 *   with the distribution.
 * 
 * * Neither the name of Killersoft nor the names of its
 *   contributors may be used to endorse or promote products derived
 *   from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 * 
 * @version $Id$
 * 
 * @todo Support alternate path for auto-gzipped uploads.
 * @todo Add some degree of S3 service fault-tolerance via retries.
 * 
 */

/**
 * Example usage:
 * 
 * <?php
 * // assumes include_path installation
 * require_once 'Killersoft/Service/Amazon/S3/BatchPut.php';
 * $source = "/path/to/my/stuff";
 * $dest   = "my-bucket/stuff";
 * 
 * $s3 = new Killersoft_Service_Amazon_S3_BatchPut(
 *     $creds['access_key'],
 *     $creds['secret_key']
 * );
 *
 * $results = $s3->setSourceDir($source)
 *               ->setDestinationBucket($dest)
 *               ->debug(true)
 *               ->run()
 *               ->getResponses();
 *
 * if ($s3->hasErrors()) {
 *   var_dump($s3->getErrors());
 * }
 * 
 */
class Killersoft_Service_Amazon_S3_BatchPut {
    
    /**
     * Credentials
     */
    public $aws_creds = array(
        'inifile'       => '/etc/aws.conf',
        'access_key_var'=> 'access_key',
        'secret_key_var'=> 'secret_key'    
    );
    protected $_secret_key;
    protected $_access_key;
    
    /**
     * Content Types
     */
    public $content_types = array(
        'css'   => 'text/css',
        'js'    => 'text/javascript',
        'jpg'   => 'image/jpeg',
        'gif'   => 'image/gif',
        'png'   => 'image/png',
        'swf'   => 'application/x-shockwave-flash',
        'mov'   => 'video/quicktime',
        'flv'   => 'video/x-flv'        
    );
    public $default_content_type = 'application/octet-stream';
    
    /**
     * Debug mode
     */
    public $debug = false;
    public $debug_log = '/tmp/batchput.log';
    protected $_dbg;
    
    /**
     * Cache Control
     */
    public $cache_control = 'max-age=31536000';
    public $expires = 31536000;
    
    /**
     * Canned ACL for uploaded items
     */
    public $acl = 'public-read';
    
    /**
     * Additional headers
     */
    public $extra_headers = array();
    
    /**
     * Source directory
     */
    public $source_dir;
    
    /**
     * Destination bucket
     */
    public $destination_bucket;
    
    
    /**
     * Curl handles and file pointers
     */
    protected $_mh;
    protected $_chs = array();
    protected $_fhs = array();
    
    /**
     * Request responses
     */
    public $responses;
    public $errors;
    
    /**
     * Constructor
     * 
     * Checks dependencies and sets up credentials and 
     * resources.
     */
    public function __construct($access_key = null, $secret_key = null)
    {
        if (! function_exists('curl_multi_init')) {
            throw new Exception(
                 __CLASS__ . ' requires the cURL extension'
            );
        }

        if (! class_exists('RecursiveDirectoryIterator')) {
            throw new Exception(
                 __CLASS__ . ' requires SPL objects'
            );
        }
        
        // set credentials
        if (! empty($access_key)) {
            $this->_access_key = $access_key;
        }
        if (! empty($secret_key)) {
            $this->_secret_key = $secret_key;
        }
        
        if (empty($this->_secret_key) || empty($this->_access_key)) {
            // try ini file
            if (file_exists($this->aws_creds['inifile'])) {
                $creds = parse_ini_file($this->aws_creds['inifile']);
                $this->_access_key = 
                    $creds[$this->aws_creds['access_key_var']];
                $this->_secret_key =
                    $creds[$this->aws_creds['secret_key_var']];
            }
        }
        
        $this->_mh = curl_multi_init();
        $this->_chs = array();
        $this->_fps = array();
    }
    
    /**
     * Enable/disable debug mode
     * 
     * @param bool $on TRUE to turn on debug mode (default),
     * FALSE to turn off debug mode.
     * 
     * @return object Killersoft_Service_Amazon_S3_BatchPut
     */
    public function debug($on = true)
    {
        if ($on === true) {
            $this->debug = true;
        } else {
            $this->debug = false;
        }
        return $this;
    }
    
    /**
     * Set the location of the debug log. Will only be set 
     * if value passes is_writable() check. Otherwise,
     * default will remain intact.
     * 
     * @param string $path Path to preferred debug log 
     * location. 
     * 
     * @return object Killersoft_Service_Amazon_S3_BatchPut
     */
    public function setDebugLog($path)
    {
        if (is_writable($path)) {
            $this->debug_log = $path;
        }
        return $this;
    }
    
    /**
     * Override default file extension content type array.
     * 
     * @param array $types Associative array of file extensions
     * and content types.
     * 
     * @return object Killersoft_Service_Amazon_S3_BatchPut
     */
    public function setContentTypes($types)
    {
        if (is_array($types)) {
            $this->content_types = $types;
        }
        return $this;
    }
    
    /**
     * Set the path of the directory to read source files from.
     * 
     * @return object Killersoft_Service_Amazon_S3_BatchPut
     */
    public function setSourceDir($path)
    {
        if (is_dir($path)) {
            $this->source_dir = $path;
        }
        return $this;
    }
    
    /**
     * Set the destination bucket (and path within, if you want).
     * 
     * @return object Killersoft_Service_Amazon_S3_BatchPut
     */
    public function setDestinationBucket($bucket)
    {
        $this->destination_bucket = $bucket;
        return $this;
    }
    
    /**
     * Creates curl handles for all files and 
     * manages runtime of curl_multi_exec. When
     * complete, fetch responses from getResponses()
     * 
     * @return object Killersoft_Service_Amazon_S3_BatchPut
     */
    public function run()
    {
        $this->_loadMultiHandler();
        
        // execute all the handles
        $active = null;
        do {
            $mrc = curl_multi_exec($this->_mh, $active);
            if ($this->debug) {
                $info = curl_multi_info_read($this->_mh); 
                fwrite($this->_dbg, 
                    var_export($info, true) . "\n");
            }
        } while ($mrc == CURLM_CALL_MULTI_PERFORM);

        while ($active && $mrc == CURLM_OK) {
            if (curl_multi_select($this->_mh) != -1) {
                do {
                    $mrc = curl_multi_exec($this->_mh, $active);
                    if ($this->debug) {
                        $info = curl_multi_info_read($this->_mh); 
                        fwrite($this->_dbg, 
                            var_export($info, true) . "\n");
                    }
                } while ($mrc == CURLM_CALL_MULTI_PERFORM);
            }
        }
        
        $this->_extractResponses();
        return $this;
    }
    
    /**
     * Returns all the cURL handles used by curl_multi. Allows
     * additional manipulation, or re-running of failed uploads.
     * 
     * @return array
     */
    public function getCurlHandles()
    {
        return $this->_chs;
    }
    
    /**
     * Returns the cURL multi-handle used, for use with any ad-hoc
     * curl_multi functions.
     * 
     * @return resource
     */
    public function getCurlMultiHandle()
    {
        return $this->_mh;
    }
    
    /**
     * Returns the array of responses. Responses are split into two-part
     * arrays. For each entry in the returned array, the actual response 
     * is accessible with a 'response' key, and curl_getinfo() information 
     * is available with an 'info' key.
     * 
     * @return array
     */
    public function getResponses()
    {
        return $this->responses;
    }
    
    /**
     * Returns the array of errors. Errors are split into two-part
     * arrays. For each entry in the returned array, the actual error 
     * is accessible with an 'error' key, and curl_getinfo() information 
     * is available with an 'info' key.
     * 
     * @return array
     */    
    public function getErrors()
    {
        return $this->errors;
    }
    
    /**
     * Returns true if any errors occurred in the execution of the
     * uploads. Returns false if all went well.
     * 
     * @return bool
     */
    public function hadErrors()
    {
        if (! empty($this->errors)) {
            return true;
        }
        return false;
    }
    
    /**
     * Destructor
     * 
     * Cleans out cURL handles from multi-handler, and closes
     * multi-handler itself.
     * 
     * Closes all open file handles, including debug
     * log if applicable.
     * 
     */ 
    public function __destruct()
    {
        foreach ($this->_chs as $i => $ch) {
            curl_multi_remove_handle($this->_mh, $ch);
            curl_close($ch);
        }
        curl_multi_close($this->_mh);
        
        foreach ($this->_fhs as $i => $fh) {
            fclose($fh);
        }
        
        if ($this->debug && is_resource($this->_dbg)) {
            fclose($this->_dbg);
        }
    }
    
    /**
     * Fetch response headers, bodies and info for
     * each handle.
     */
    protected function _extractResponses()
    {
        // extract responses
        $this->responses = array();
        $this->errors = array();
        foreach ($this->_chs as $ch) {
            // check for errors
            $error = curl_error($ch);
            if (empty($error)) {
                $this->responses[] = array(
                    'response' => curl_multi_getcontent($ch),
                    'info' => curl_getinfo($ch)
                );
            } else {
                $this->errors[] = array(
                    'error' => $error,
                    'info'  => curl_getinfo($ch)
                );
            }
        }        
    }
    
    /**
     * Loop through files in source directory and create 
     * a cURL PUT handler for each one. 
     * 
     * @todo Support proper signature for more x-amz-* headers
     */
    protected function _loadMultiHandler()
    {
        if ($this->debug) {
            $this->_dbg = @fopen($this->debug_log, 'a');
        }
        
        $sourcelen = strlen($this->source_dir);
        $sourcedir = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->source_dir));
        
        $i = 0;
        foreach ($sourcedir as $item) {
            $file = substr($item->getPathname(), $sourcelen);

            // use file extension for content-type
            $pos = strrpos($file, '.');
            if ($pos !== false) {
                $ext = substr($file, $pos+1);
                if (isset($this->content_types[$ext])) {
                    $content_type = $this->content_types[$ext];
                } else {
                    $content_type = $this->default_content_type;
                }
            }
            
            // create a cURL handle for each file
            // sign each request and set ACL
            $dest_path = '/' 
                       . trim($this->destination_bucket, '/') 
                       . '/' . $file;

            $date   = gmdate('D, d M Y G:i:s O');
            $method = 'PUT';
            $content_md5 = '';
            if (function_exists('hash_file')) {
                $content_md5 = base64_encode(
                    hash_file('md5',
                        $this->source_dir
                        . DIRECTORY_SEPARATOR 
                        . $file, 
                        true
                    )
                );
            }
            $amz    = 'x-amz-acl:'.$this->acl;
            
            // StringToSign
            $str = "$method\n"
                 . "$content_md5\n"
                 . "$content_type\n"
                 . "$date\n"
                 . "$amz\n"
                 . $dest_path;
            
            $sig = base64_encode(
                hash_hmac('sha1', $str, 
                $this->_secret_key, true)
            );
            $filesize = filesize(
                $this->source_dir
                . DIRECTORY_SEPARATOR
                . $file);
            
            // Assemble the headers for the PUT request
            // Note lengthy Cache-Control headers
            $header = array(
                "Date: {$date}",
                "Authorization: AWS {$this->_access_key}:{$sig}",
                "Cache-Control: {$this->cache_control}",
                "Expires: " . gmdate('D, d M Y G:i:s O', 
                    time() + $this->expires),
                "x-amz-acl: {$this->acl}",
                "Content-Type: {$content_type}"
            );
            if (! empty($content_md5)) {
                $header[] = "Content-MD5: {$content_md5}";
            }
            if (! empty($this->extra_headers)) {
                foreach ($this->extra_headers as $h) {
                    $header[] = $h;
                }
            }
            
            $this->_chs[$i] = curl_init();
            $this->_fps[$i] = fopen($this->source_dir
                            . DIRECTORY_SEPARATOR
                            . $file, 'r');
            $opts = array(
                CURLOPT_URL => 'https://s3.amazonaws.com' . $dest_path,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => true,
                CURLOPT_PUT => true,
                CURLOPT_INFILE => $this->_fps[$i],
                CURLOPT_INFILESIZE => $filesize,
                CURLOPT_HTTPHEADER => $header,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
            );

            if ($this->debug) {
                $opts[CURLOPT_VERBOSE] = true;
                $opts[CURLOPT_STDERR] = $this->_dbg;
            }

            curl_setopt_array($this->_chs[$i], $opts);
            curl_multi_add_handle($this->_mh, $this->_chs[$i]);
            $i++;
        }
    }
}
