<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_FWSInbound
 *  @copyright   Copyright 2007 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2007-05-10
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon FWS Inbound PHP5 Library
 *  Generated: Wed Mar 19 13:05:13 PDT 2008
 * 
 */

/**
 *  @see Amazon_FWSInbound_Model
 */
require_once ('Amazon/FWSInbound/Model.php');  

    

/**
 * Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetFulfillmentItemByFNSKUResult: Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResult</li>
 * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetFulfillmentItemByFNSKUResult: Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResult</li>
     * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GetFulfillmentItemByFNSKUResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fba-inbound.amazonaws.com/doc/2007-05-10/');
        $response = $xpath->query('//a:GetFulfillmentItemByFNSKUResponse');
        if ($response->length == 1) {
            return new Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse from provided XML. 
                                  Make sure that GetFulfillmentItemByFNSKUResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetFulfillmentItemByFNSKUResult.
     * 
     * @return GetFulfillmentItemByFNSKUResult GetFulfillmentItemByFNSKUResult
     */
    public function getGetFulfillmentItemByFNSKUResult() 
    {
        return $this->_fields['GetFulfillmentItemByFNSKUResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetFulfillmentItemByFNSKUResult.
     * 
     * @param GetFulfillmentItemByFNSKUResult GetFulfillmentItemByFNSKUResult
     * @return void
     */
    public function setGetFulfillmentItemByFNSKUResult($value) 
    {
        $this->_fields['GetFulfillmentItemByFNSKUResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetFulfillmentItemByFNSKUResult  and returns this instance
     * 
     * @param GetFulfillmentItemByFNSKUResult $value GetFulfillmentItemByFNSKUResult
     * @return Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse instance
     */
    public function withGetFulfillmentItemByFNSKUResult($value)
    {
        $this->setGetFulfillmentItemByFNSKUResult($value);
        return $this;
    }


    /**
     * Checks if GetFulfillmentItemByFNSKUResult  is set
     * 
     * @return bool true if GetFulfillmentItemByFNSKUResult property is set
     */
    public function isSetGetFulfillmentItemByFNSKUResult()
    {
        return !is_null($this->_fields['GetFulfillmentItemByFNSKUResult']['FieldValue']);

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
     * @return Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse instance
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
        $xml .= "<GetFulfillmentItemByFNSKUResponse xmlns=\"http://fba-inbound.amazonaws.com/doc/2007-05-10/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetFulfillmentItemByFNSKUResponse>";
        return $xml;
    }

}