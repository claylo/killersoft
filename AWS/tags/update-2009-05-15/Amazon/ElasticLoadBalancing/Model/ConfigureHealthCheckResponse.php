<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_ElasticLoadBalancing
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-05-15
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon Elastic Load Balancing PHP5 Library
 *  Generated: Sun May 17 01:27:31 PDT 2009
 * 
 */

/**
 *  @see Amazon_ElasticLoadBalancing_Model
 */
require_once ('Amazon/ElasticLoadBalancing/Model.php');  

    

/**
 * Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ConfigureHealthCheckResult: Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResult</li>
 * <li>ResponseMetadata: Amazon_ElasticLoadBalancing_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ConfigureHealthCheckResult: Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResult</li>
     * <li>ResponseMetadata: Amazon_ElasticLoadBalancing_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ConfigureHealthCheckResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticLoadBalancing_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://elasticloadbalancing.amazonaws.com/doc/2009-05-15/');
        $response = $xpath->query('//a:ConfigureHealthCheckResponse');
        if ($response->length == 1) {
            return new Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse from provided XML. 
                                  Make sure that ConfigureHealthCheckResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the ConfigureHealthCheckResult.
     * 
     * @return ConfigureHealthCheckResult ConfigureHealthCheckResult
     */
    public function getConfigureHealthCheckResult() 
    {
        return $this->_fields['ConfigureHealthCheckResult']['FieldValue'];
    }

    /**
     * Sets the value of the ConfigureHealthCheckResult.
     * 
     * @param ConfigureHealthCheckResult ConfigureHealthCheckResult
     * @return void
     */
    public function setConfigureHealthCheckResult($value) 
    {
        $this->_fields['ConfigureHealthCheckResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ConfigureHealthCheckResult  and returns this instance
     * 
     * @param ConfigureHealthCheckResult $value ConfigureHealthCheckResult
     * @return Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse instance
     */
    public function withConfigureHealthCheckResult($value)
    {
        $this->setConfigureHealthCheckResult($value);
        return $this;
    }


    /**
     * Checks if ConfigureHealthCheckResult  is set
     * 
     * @return bool true if ConfigureHealthCheckResult property is set
     */
    public function isSetConfigureHealthCheckResult()
    {
        return !is_null($this->_fields['ConfigureHealthCheckResult']['FieldValue']);

    }

    /**
     * Gets the value of the ResponseMetadata.
     * 
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata() 
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     * 
     * @param ResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value) 
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance
     * 
     * @param ResponseMetadata $value ResponseMetadata
     * @return Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }


    /**
     * Checks if ResponseMetadata  is set
     * 
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<ConfigureHealthCheckResponse xmlns=\"http://elasticloadbalancing.amazonaws.com/doc/2009-05-15/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ConfigureHealthCheckResponse>";
        return $xml;
    }

}