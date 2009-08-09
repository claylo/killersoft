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
 * Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>EnableAvailabilityZonesForLoadBalancerResult: Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResult</li>
 * <li>ResponseMetadata: Amazon_ElasticLoadBalancing_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>EnableAvailabilityZonesForLoadBalancerResult: Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResult</li>
     * <li>ResponseMetadata: Amazon_ElasticLoadBalancing_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'EnableAvailabilityZonesForLoadBalancerResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticLoadBalancing_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://elasticloadbalancing.amazonaws.com/doc/2009-05-15/');
        $response = $xpath->query('//a:EnableAvailabilityZonesForLoadBalancerResponse');
        if ($response->length == 1) {
            return new Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse from provided XML. 
                                  Make sure that EnableAvailabilityZonesForLoadBalancerResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the EnableAvailabilityZonesForLoadBalancerResult.
     * 
     * @return EnableAvailabilityZonesForLoadBalancerResult EnableAvailabilityZonesForLoadBalancerResult
     */
    public function getEnableAvailabilityZonesForLoadBalancerResult() 
    {
        return $this->_fields['EnableAvailabilityZonesForLoadBalancerResult']['FieldValue'];
    }

    /**
     * Sets the value of the EnableAvailabilityZonesForLoadBalancerResult.
     * 
     * @param EnableAvailabilityZonesForLoadBalancerResult EnableAvailabilityZonesForLoadBalancerResult
     * @return void
     */
    public function setEnableAvailabilityZonesForLoadBalancerResult($value) 
    {
        $this->_fields['EnableAvailabilityZonesForLoadBalancerResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the EnableAvailabilityZonesForLoadBalancerResult  and returns this instance
     * 
     * @param EnableAvailabilityZonesForLoadBalancerResult $value EnableAvailabilityZonesForLoadBalancerResult
     * @return Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse instance
     */
    public function withEnableAvailabilityZonesForLoadBalancerResult($value)
    {
        $this->setEnableAvailabilityZonesForLoadBalancerResult($value);
        return $this;
    }


    /**
     * Checks if EnableAvailabilityZonesForLoadBalancerResult  is set
     * 
     * @return bool true if EnableAvailabilityZonesForLoadBalancerResult property is set
     */
    public function isSetEnableAvailabilityZonesForLoadBalancerResult()
    {
        return !is_null($this->_fields['EnableAvailabilityZonesForLoadBalancerResult']['FieldValue']);

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
     * @return Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse instance
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
        $xml .= "<EnableAvailabilityZonesForLoadBalancerResponse xmlns=\"http://elasticloadbalancing.amazonaws.com/doc/2009-05-15/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</EnableAvailabilityZonesForLoadBalancerResponse>";
        return $xml;
    }

}