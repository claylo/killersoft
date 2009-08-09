<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_FPS
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2008-09-17
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon FPS PHP5 Library
 *  Generated: Mon Jun 15 05:21:26 PDT 2009
 * 
 */
/**
 * Use Crypt_HMAC for signing REST requests.
 */
require_once 'Crypt/HMAC.php'; 

/**
 * Used for signing name value pairs and validating them.
 */
class Amazon_FPS_SignatureUtils
{
    /**
     * Amazon Web Services Access Key ID.
     * @var string|bool 20-character, alphanumeric string, or false if this is an anonymous account
     */
    private $accessKeyId; 

    /**
     * Amazon Web Services Secret Access Key.
     * @var string 40-character string
     */
    private $secretAccessKey;

    /**
     * Array to store the name value pairs of the request
     */
    private $nameValuePairs = array();

    /**
     * Default constructor
     * 
     * @param string $accessKeyId    Amazon Web Services Access Key ID.
     * @param string $secretAccessKey   Amazon Web Services Secret Access Key.
     */
    public function __construct($accessKeyId, $secretAccessKey)
    {
        $this->secretAccessKey = $secretAccessKey;
        $this->accessKeyId = $accessKeyId;
    }

    /**
     * Adds key value pair 
     *
     * @param string $key    Key of the key-value pair in querystring
     * @param string $value  Value of the key-value pair in querystring
     */
    public function add($key, $value)
    {
        $this->nameValuePairs[$key] = $value;
    }

    /**
     * Adds all key value pairs 
     *
     * @param array $values Associative array of keys mapped to values    
     */
    public function addAll($values)
    {
        foreach ($values as $key => $value)
            $this->add($key, $value);
    }

    /**
     * Returns the signature of the name value pairs added to the class
     *
     * @return string Signature of the name value pairs. 
     */
    public function generateSignature()
    {
        uksort($this->nameValuePairs,"strcasecmp");    
        $str = "";
        foreach ($this->nameValuePairs as $key => $value)
        {
           $str = $str . $key . $value;
        }
        return Amazon_FPS_SignatureUtils::sign($str, $this->secretAccessKey);
    }

    /**
     * Signs the string passed and returns the signature
     *
     * @param string $str    Input string to sign
     * @return string Signature
     *
     * @throws Exception
     */
    public static function sign($str, $secretAccessKey)
    {
        if (!isset($secretAccessKey))
        {
            throw new Exception("Secret key should be set");
        }

        $hmac = new Crypt_HMAC($secretAccessKey,"sha1");
        $binary_hmac = pack("H40", $hmac->hash(trim($str)));
        return base64_encode($binary_hmac);
    }


    /**
     * Validates the signature generated from the name value pairs and matches it against the signature passed
     *
     * @param string $signature    Expected signature
     * @return boolean Returns true if signature matches
     */
    public function validate($signature)
    {
        return strcmp($this->generateSignature(), $signature) == 0;
    }

    /**
     * Resets the name value pairs
     *
     */
    public function reset()
    {
        $this->nameValuePairs = array();
    }
}
