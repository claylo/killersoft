<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_FWSOutbound
 *  @copyright   Copyright 2007 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2007-08-02
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon FWS Outbound PHP5 Library
 *  Generated: Wed Mar 19 13:03:03 PDT 2008
 * 
 */

/**
 *  @see Amazon_FWSOutbound_Model
 */
require_once ('Amazon/FWSOutbound/Model.php');  

    

/**
 * Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetFulfillmentOrderResult: Amazon_FWSOutbound_Model_GetFulfillmentOrderResult</li>
 * <li>ResponseMetadata: Amazon_FWSOutbound_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse extends Amazon_FWSOutbound_Model
{


    /**
     * Construct new Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetFulfillmentOrderResult: Amazon_FWSOutbound_Model_GetFulfillmentOrderResult</li>
     * <li>ResponseMetadata: Amazon_FWSOutbound_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GetFulfillmentOrderResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSOutbound_Model_GetFulfillmentOrderResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSOutbound_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fba-outbound.amazonaws.com/doc/2007-08-02/');
        $response = $xpath->query('//a:GetFulfillmentOrderResponse');
        if ($response->length == 1) {
            return new Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse from provided XML. 
                                  Make sure that GetFulfillmentOrderResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetFulfillmentOrderResult.
     * 
     * @return GetFulfillmentOrderResult GetFulfillmentOrderResult
     */
    public function getGetFulfillmentOrderResult() 
    {
        return $this->_fields['GetFulfillmentOrderResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetFulfillmentOrderResult.
     * 
     * @param GetFulfillmentOrderResult GetFulfillmentOrderResult
     * @return void
     */
    public function setGetFulfillmentOrderResult($value) 
    {
        $this->_fields['GetFulfillmentOrderResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetFulfillmentOrderResult  and returns this instance
     * 
     * @param GetFulfillmentOrderResult $value GetFulfillmentOrderResult
     * @return Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse instance
     */
    public function withGetFulfillmentOrderResult($value)
    {
        $this->setGetFulfillmentOrderResult($value);
        return $this;
    }


    /**
     * Checks if GetFulfillmentOrderResult  is set
     * 
     * @return bool true if GetFulfillmentOrderResult property is set
     */
    public function isSetGetFulfillmentOrderResult()
    {
        return !is_null($this->_fields['GetFulfillmentOrderResult']['FieldValue']);

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
     * @return Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse instance
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
        $xml .= "<GetFulfillmentOrderResponse xmlns=\"http://fba-outbound.amazonaws.com/doc/2007-08-02/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetFulfillmentOrderResponse>";
        return $xml;
    }

}