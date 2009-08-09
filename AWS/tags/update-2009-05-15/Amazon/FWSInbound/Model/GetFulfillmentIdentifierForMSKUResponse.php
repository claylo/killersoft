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
 * Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetFulfillmentIdentifierForMSKUResult: Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResult</li>
 * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetFulfillmentIdentifierForMSKUResult: Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResult</li>
     * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GetFulfillmentIdentifierForMSKUResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fba-inbound.amazonaws.com/doc/2007-05-10/');
        $response = $xpath->query('//a:GetFulfillmentIdentifierForMSKUResponse');
        if ($response->length == 1) {
            return new Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse from provided XML. 
                                  Make sure that GetFulfillmentIdentifierForMSKUResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetFulfillmentIdentifierForMSKUResult.
     * 
     * @return GetFulfillmentIdentifierForMSKUResult GetFulfillmentIdentifierForMSKUResult
     */
    public function getGetFulfillmentIdentifierForMSKUResult() 
    {
        return $this->_fields['GetFulfillmentIdentifierForMSKUResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetFulfillmentIdentifierForMSKUResult.
     * 
     * @param GetFulfillmentIdentifierForMSKUResult GetFulfillmentIdentifierForMSKUResult
     * @return void
     */
    public function setGetFulfillmentIdentifierForMSKUResult($value) 
    {
        $this->_fields['GetFulfillmentIdentifierForMSKUResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetFulfillmentIdentifierForMSKUResult  and returns this instance
     * 
     * @param GetFulfillmentIdentifierForMSKUResult $value GetFulfillmentIdentifierForMSKUResult
     * @return Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse instance
     */
    public function withGetFulfillmentIdentifierForMSKUResult($value)
    {
        $this->setGetFulfillmentIdentifierForMSKUResult($value);
        return $this;
    }


    /**
     * Checks if GetFulfillmentIdentifierForMSKUResult  is set
     * 
     * @return bool true if GetFulfillmentIdentifierForMSKUResult property is set
     */
    public function isSetGetFulfillmentIdentifierForMSKUResult()
    {
        return !is_null($this->_fields['GetFulfillmentIdentifierForMSKUResult']['FieldValue']);

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
     * @return Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse instance
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
        $xml .= "<GetFulfillmentIdentifierForMSKUResponse xmlns=\"http://fba-inbound.amazonaws.com/doc/2007-05-10/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetFulfillmentIdentifierForMSKUResponse>";
        return $xml;
    }

}