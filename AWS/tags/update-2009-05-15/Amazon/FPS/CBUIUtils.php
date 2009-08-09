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
 * CBUI Utility class to sign and validate query string  
 */
class Amazon_FPS_CBUIUtils
{
    /**
     * The default URL corresponds to production environment. Change the URL for sandbox environment.
     */ 
    private static $cbui_url = "https://authorize.payments.amazon.com";

    /**
     * Array to store the name value pairs of the request
     */
    private $nameValuePairs = array();

    /**
     * Version parameter for consistent signature for incoming and outgoing requests
     */
    private static $version="2009-01-09";

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
     * Sets the mandatory parameters for outgoing request to CBUI
     * 
     * @param string $pipleine    Name of the Co-branded pipeline
     * @param string $returnURL   URL to which CBUI should return back the user
     *
     * @throws Exception
     */
    public function setMandatoryParams($pipeline, $returnURL)
    {
        if(!isset($pipeline) || !isset($returnURL))
            throw new Exception("mandatory parameters are not set"); 

        $this->add("returnURL", $returnURL);
        $this->add("pipelineName", $pipeline);
        $this->add("callerKey", $this->accessKeyId);
        $this->add("version", Amazon_FPS_CBUIUtils::$version);
    }

    /**
     * Sets the caller reference of the request
     *
     * @param string $callerReference    Unique-id associated with the request
     */
    public function setCallerReference($callerReference)
    {
        $this->add("callerReference", $callerReference);
    }
    
    /**
     * Sets the transaction amount of the request
     *
     * @param string $amount    Transaction amount
     */
    public function setTransactionAmount($amount)
    {
        $this->add("transactionAmount", $amount);
    }

    /**
     * Sets the payment reason for the request
     *
     * @param string $paymentReason    Payment reason
     */
    public function setPaymentReason($paymentReason)
    {
        $this->add("paymentReason", $paymentReason);
    }

    /**
     * Adds any custom name value pair to the query string
     *
     * @param string $key    Key of the key-value pair in querystring
     * @param string $value  Value of the key-value pair in querystring
     */
    public function add($key, $value)
    {
        $this->nameValuePairs[$key] = $value;
    }

    /**
     * Constructs the query string for the parameters added to this class
     *
     * This function also calculates the signature of the all the name value pairs
     * added to the class. 
     *
     * @return string  URL 
     */
    public function getURL()
    {
        $signatureUtils = new Amazon_FPS_SignatureUtils($this->accessKeyId, $this->secretAccessKey);
        $signatureUtils->addAll($this->nameValuePairs);    
        $signature = $signatureUtils->generateSignature();
        $queryString = http_build_query($this->nameValuePairs, '', '&');

        if(count($queryString) > 0) $queryString = $queryString . "&";
        $queryString = $queryString . "signature=" . urlencode($signature);

        return Amazon_FPS_CBUIUtils::$cbui_url . "/cobranded-ui/actions/start?" . $queryString; 
    }

    /**
     * Validates if the query string contains valid signature
     *
     * @param string $queryString   Query string 
     * @param string $signature   Expected signature
     */
    public function validateQueryString($queryString,$signature)
    {
        $obj = new Amazon_FPS_SignatureUtils($this->accessKeyId, $this->secretAccessKey);

        parse_str($queryString, $pairs);
        foreach($pairs as $key => $value)
        {
            $key = urldecode($key);
            $value = urldecode($value);
            //signature is returned by default from CBUI but should not be included during signature validation
            if((strcmp($key, "signature") == 0) || (strcmp($key,"awsSignature")==0)) continue; 
            $obj->add($key, $value);
        }

        return $obj->validate($signature);
    }

    /**
     * Resets the name value pairs
     */
    public function reset()
    {
        $this->nameValuePairs = array();
    }
}
