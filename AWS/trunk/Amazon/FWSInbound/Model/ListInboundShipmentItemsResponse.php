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
 * Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListInboundShipmentItemsResult: Amazon_FWSInbound_Model_ListInboundShipmentItemsResult</li>
 * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ListInboundShipmentItemsResult: Amazon_FWSInbound_Model_ListInboundShipmentItemsResult</li>
     * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ListInboundShipmentItemsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_ListInboundShipmentItemsResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fba-inbound.amazonaws.com/doc/2007-05-10/');
        $response = $xpath->query('//a:ListInboundShipmentItemsResponse');
        if ($response->length == 1) {
            return new Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse from provided XML. 
                                  Make sure that ListInboundShipmentItemsResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the ListInboundShipmentItemsResult.
     * 
     * @return ListInboundShipmentItemsResult ListInboundShipmentItemsResult
     */
    public function getListInboundShipmentItemsResult() 
    {
        return $this->_fields['ListInboundShipmentItemsResult']['FieldValue'];
    }

    /**
     * Sets the value of the ListInboundShipmentItemsResult.
     * 
     * @param ListInboundShipmentItemsResult ListInboundShipmentItemsResult
     * @return void
     */
    public function setListInboundShipmentItemsResult($value) 
    {
        $this->_fields['ListInboundShipmentItemsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ListInboundShipmentItemsResult  and returns this instance
     * 
     * @param ListInboundShipmentItemsResult $value ListInboundShipmentItemsResult
     * @return Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse instance
     */
    public function withListInboundShipmentItemsResult($value)
    {
        $this->setListInboundShipmentItemsResult($value);
        return $this;
    }


    /**
     * Checks if ListInboundShipmentItemsResult  is set
     * 
     * @return bool true if ListInboundShipmentItemsResult property is set
     */
    public function isSetListInboundShipmentItemsResult()
    {
        return !is_null($this->_fields['ListInboundShipmentItemsResult']['FieldValue']);

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
     * @return Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse instance
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
        $xml .= "<ListInboundShipmentItemsResponse xmlns=\"http://fba-inbound.amazonaws.com/doc/2007-05-10/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListInboundShipmentItemsResponse>";
        return $xml;
    }

}