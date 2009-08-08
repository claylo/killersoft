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
 * @package Killersoft_Service_Amazon
 * 
 * @subpackage Killersoft_Service_Amazon_S3
 * 
 * @todo Add some degree of S3 service fault-tolerance via retries.
 * 
 */

/**
 * BatchPut class for S3.
 * 
 * Provide a source directory and a destination bucket/path, 
 * and this class will recursively upload the contents
 * of the source directory to S3 in parallel, using
 * curl_multi* functions. 
 * 
 * Example usage:
 * <code>
 * <?php
 * // assumes include_path installation
 * require_once 'Killersoft/Service/Amazon/S3/BatchPut.php';
 * $source = "/path/to/my/stuff";
 * $dest   = "my-bucket/stuff";
 * 
 * $s3 = new Killersoft_Service_Amazon_S3_BatchPut(
 *     'my_access_key',
 *     'my_secret_key'
 * );
 *
 * $results = $s3->setSourceDir($source)
 *               ->setDestinationBucket($dest)
 *               ->debug(true)
 *               ->run()
 *               ->getResponses();
 *
 * if ($s3->hadErrors()) {
 *   var_dump($s3->getErrors());
 * }
 * </code>
 * 
 * @author Clay Loveless <clay@killersoft.com>
 * @copyright Copyright (c) 2009, Clay Loveless. All rights reserved.
 * @version SVN: $Id$
 * @package Killersoft_Service_Amazon
 * @subpackage Killersoft_Service_Amazon_S3
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
        'flv'   => 'video/x-flv',
        'gz'    => 'application/x-gzip',
        'bz2'   => 'application/x-bzip',
        'tar.gz'=> 'application/x-tgz',
        'tgz'   => 'application/x-tgz',
        'tar.bz2'=> 'application/x-bzip-compressed-tar',
        'tar'   => 'application/x-tar',
        'zip'   => 'application/zip',
    );
    public $default_content_type = 'application/octet-stream';
    
    /**
     * If compression is enabled, what content types should be
     * compressed.
     */
    public $compressable = array(
        'css',
        'js'
    );
    
    /**
     * Skip uploading files found in paths containing these strings.
     */
    public $skip_paths = array(
        '.git',
        '.svn'
    );
    
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
     * Compression
     */
    public $compress = false;
    
    /**
     * Canned ACL for uploaded items
     */
    public $acl = 'public-read';
    public $aclpath = null;
    
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
     * Batch size trigger
     */
    protected $_autorun = 20;
    
    /**
     * Curl handles and file pointers
     */
    protected $_mh;
    protected $_chs = array();
    protected $_fps = array();
    
    /**
     * List of paths to temporary gzipped files that
     * will be cleaned up post-upload.
     */
    protected $_unlink = array();
    
    /**
     * ACL handles and file pointers
     */
    protected $_amh;
    protected $_achs = array();
    protected $_aclh;
    
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
     * Enable/disable compression of text types
     * 
     * @param bool $on TRUE to turn on compression,
     * FALSE to turn off compression (default).
     * 
     * @return object Killersoft_Service_Amazon_S3_BatchPut
     */
    public function compress($on = false)
    {
        if ($on === true && function_exists('gzencode')) {
            $this->compress = true;
        } else {
            $this->compress = false;
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
     * Override default skip-paths. Any paths discovered containing 
     * directories with these names will be ignored.
     * 
     * @param array $paths Array of path names to exclude.
     * 
     * @return object Killersoft_Service_Amazon_S3_BatchPut
     */
    public function setSkipPaths($paths)
    {
        if (is_array($paths)) {
            $this->skip_paths = $paths;
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
     * Set an ACL request document to PUT alongside each uploaded
     * file. Or, a canned ACL of:
     * 
     * private
     * public-read
     * public-read-write
     * authenticated-read
     * 
     * @see http://docs.amazonwebservices.com/AmazonS3/2006-03-01/index.html?S3_ACLs.html
     * @see http://docs.amazonwebservices.com/AmazonS3/2006-03-01/index.html?RESTAccessPolicy.html
     * @param string $aclpath Path to ACL XML document.
     * @return object Killersoft_Service_Amazon_S3_BatchPut
     */
    public function useACL($acl)
    {
        if (empty($acl)) {
            $this->acl = 'private';
            return $this;
        }
        
        $canned = array(
            'private',
            'public-read',
            'public-read-write',
            'authenticated-read'
        );
        
        if (in_array($acl, $canned)) {
            $this->acl = $acl;
            return $this;
        }
        
        // treat $acl like a path to a file
        if (file_exists($acl)) {
            $this->acl = null;
            $this->aclpath = $acl;
        }
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
        $handler = $this->_mh;
        $this->_loadMultiHandler();
        $this->_execute($handler);        
        $this->_extractResponses();
        return $this;
    }
    
    public function setBatchSize($num = 50)
    {
        $this->_autorun = intval($num);
        return $this;
    }
    
    /**
     * Execute the curl multi handler.
     * 
     */
    protected function _execute($handler)
    {
        // execute all the handles
        $active = null;
        do {
            $mrc = curl_multi_exec($handler, $active);
            if ($this->debug) {
                $info = curl_multi_info_read($handler); 
                fwrite($this->_dbg, 
                    var_export($info, true) . "\n");
            }
        } while ($mrc == CURLM_CALL_MULTI_PERFORM);

        while ($active && $mrc == CURLM_OK) {
            if (curl_multi_select($handler) != -1) {
                do {
                    $mrc = curl_multi_exec($handler, $active);
                    if ($this->debug) {
                        $info = curl_multi_info_read($handler); 
                        fwrite($this->_dbg, 
                            var_export($info, true) . "\n");
                    }
                } while ($mrc == CURLM_CALL_MULTI_PERFORM);
            }
        }        
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
        if (! $this->_autorun) {
            foreach ($this->_chs as $i => $ch) {
                curl_multi_remove_handle($this->_mh, $ch);
                curl_close($ch);
            }
        }
        curl_multi_close($this->_mh);
        if ($this->_amh) {
            curl_multi_close($this->_amh);
        }
        
        if (! empty($this->_unlink)) {
            foreach ($this->_unlink as $path) {
                @unlink($path);
            }
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
        
        // ACL multi-handle
        $run_amh = false;
        
        foreach ($this->_chs as $url => $ch) {
            // check for errors
            $error = curl_error($ch);
            if (empty($error)) {
                $r = curl_multi_getcontent($ch);
                $info = curl_getinfo($ch);
                $this->responses[] = array(
                    'response' => $r,
                    'info' => $info
                );
                
                if ($this->_autorun) {
                    curl_multi_remove_handle($this->_mh, $ch);
                    curl_close($ch);
                    unset($this->_chs[$url]);
                    fclose($this->_fps[$url]);
                    unset($this->_fps[$url]);
                }
                
                // ACL multi-handle
                if (is_array($this->_achs) && !empty($this->_achs)) {
                    if (! $this->_amh) {
                        $this->_amh = curl_multi_init();
                    }
                    curl_multi_add_handle(
                        $this->_amh, $this->_achs[$info['url']]
                    );
                    $run_amh = true;
                }
                
            } else {
                $info = curl_getinfo($ch);
                $this->errors[] = array(
                    'error' => $error,
                    'info'  => $info
                );
            }
        }
        
        if ($run_amh) {
            // run ACL calls
            $this->_execute($this->_amh);
            foreach ($this->_amhs as $path => $ch) {
                curl_multi_remove_handle($this->_amh, $ch);
                curl_close($ch);
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
        
        // avoid compression problems
        if (! function_exists('gzencode')) {
            $this->compress = false;
        }
        
        $sourcelen = strlen($this->source_dir);
        $sourcedir = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->source_dir));
        
        $a = 0; // autorun trigger
        foreach ($sourcedir as $item) {
            // skip dotfiles
            $filename = $item->getFilename();
            if ($filename[0] == '.') {
                continue;
            }
            
            // skip skip-paths
            $pathname = $item->getPathname();
            foreach ($this->skip_paths as $skip) {
                $skip = $skip . DIRECTORY_SEPARATOR;
                if (strpos($pathname, $skip) !== false) {
                    continue 2;
                }
            }
            
            if ($this->_autorun && $a >= $this->_autorun) {
                $this->_execute($this->_mh);        
                $this->_extractResponses();     
                $a = 0;
                // needed to avoid max files open errors
                clearstatcache();
            }
            
            $file = substr($item->getPathname(), $sourcelen);

            // use file extension for content-type
            $pos = strrpos($file, '.');
            $ext = false;
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
            $source_path = $this->source_dir 
                   . DIRECTORY_SEPARATOR 
                   . $file;
            
            
            $date   = gmdate('D, d M Y G:i:s O');
            $method = 'PUT';
            $content_md5 = '';
            $compressed = false;
            
            if ($this->compress 
                && in_array($ext, $this->compressable)) {
                
                // compress to a temp dir
                $gzfile = tempnam(sys_get_temp_dir(), 'BatchPut');
                file_put_contents($gzfile, 
                    gzencode(
                        file_get_contents(
                            $this->source_dir 
                            . DIRECTORY_SEPARATOR 
                            . $file
                        )
                    )
                );
                if (file_exists($gzfile)) {
                    $compressed = true;
                    $this->_unlink[] = $gzfile;
                    $source_path = $gzfile;
                }
            }

            if (function_exists('hash_file')) {
                $content_md5 = base64_encode(
                    hash_file('md5', $source_path, 
                        true
                    )
                );
            }

            $amz = '';
            if (! empty($this->acl)) {
                $amz = 'x-amz-acl:'.$this->acl;
            }
            
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
            $filesize = filesize($source_path);
            
            // Assemble the headers for the PUT request
            // Note lengthy Cache-Control headers
            $header = array(
                "Date: {$date}",
                "Authorization: AWS {$this->_access_key}:{$sig}",
                "Cache-Control: {$this->cache_control}",
                "Expires: " . gmdate('D, d M Y G:i:s O', 
                    time() + $this->expires),
                "Content-Type: {$content_type}"
            );
            if (! empty($this->acl)) {
                $header[] = "x-amz-acl: {$this->acl}";
            }
            if (! empty($content_md5)) {
                $header[] = "Content-MD5: {$content_md5}";
            }
            if ($compressed) {
                $header[] = 'Content-Encoding: gzip';
            }
            if (! empty($this->extra_headers)) {
                foreach ($this->extra_headers as $h) {
                    $header[] = $h;
                }
            }
            
            $key = 'https://s3.amazonaws.com' . $dest_path;
            $this->_chs[$key] = curl_init();
            $this->_fps[$key] = fopen($source_path, 'r');
            $opts = array(
                CURLOPT_URL => 'https://s3.amazonaws.com' . $dest_path,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => true,
                CURLOPT_PUT => true,
                CURLOPT_INFILE => $this->_fps[$key],
                CURLOPT_INFILESIZE => $filesize,
                CURLOPT_HTTPHEADER => $header,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
            );

            if ($this->debug) {
                $opts[CURLOPT_VERBOSE] = true;
                $opts[CURLOPT_STDERR] = $this->_dbg;
            }

            curl_setopt_array($this->_chs[$key], $opts);
            curl_multi_add_handle($this->_mh, $this->_chs[$key]);
            $a++;
            
            // create a request for 
            if (! empty($this->aclpath)) {
                
                if (! $this->_aclh) {
                    $this->_aclh = fopen($this->aclpath, 'r');
                }
                
                if ($this->_aclh) {
                
                    $dest_path .= '?acl';
                    // StringToSign
                    $str = "$method\n"
                         . "\n" // content-md5
                         . "\n" // content-type
                         . "$date\n"
                         . $dest_path;

                    $key = 'https://s3.amazonaws.com' 
                         . substr($dest_path, 0, -4);
                    

                    $sig = base64_encode(
                        hash_hmac('sha1', $str, 
                        $this->_secret_key, true)
                    );
                
                    $header = array(
                        "Date: {$date}",
                        "Authorization: AWS {$this->_access_key}:{$sig}",                    
                    );
                    
                    $this->_achs[$key] = curl_init();
                    $opts = array(
                        CURLOPT_URL => 'https://s3.amazonaws.com' . $dest_path,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_HEADER => true,
                        CURLOPT_PUT => true,
                        CURLOPT_INFILE => $this->_aclh,
                        CURLOPT_INFILESIZE => $filesize,
                        CURLOPT_HTTPHEADER => $header,
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_SSL_VERIFYHOST => false,
                    );

                    if ($this->debug) {
                        $opts[CURLOPT_VERBOSE] = true;
                        $opts[CURLOPT_STDERR] = $this->_dbg;
                    }
                    
                    curl_setopt_array($this->_achs[$key], $opts);
                    
                }
            }
            
        }
    }
}
