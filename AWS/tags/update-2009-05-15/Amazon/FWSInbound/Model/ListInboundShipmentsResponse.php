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
 * Amazon_FWSInbound_Model_ListInboundShipmentsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListInboundShipmentsResult: Amazon_FWSInbound_Model_ListInboundShipmentsResult</li>
 * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_ListInboundShipmentsResponse extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_ListInboundShipmentsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ListInboundShipmentsResult: Amazon_FWSInbound_Model_ListInboundShipmentsResult</li>
     * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ListInboundShipmentsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_ListInboundShipmentsResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FWSInbound_Model_ListInboundShipmentsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FWSInbound_Model_ListInboundShipmentsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fba-inbound.amazonaws.com/doc/2007-05-10/');
        $response = $xpath->query('//a:ListInboundShipmentsResponse');
        if ($response->length == 1) {
            return new Amazon_FWSInbound_Model_ListInboundShipmentsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FWSInbound_Model_ListInboundShipmentsResponse from provided XML. 
                                  Make sure that ListInboundShipmentsResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the ListInboundShipmentsResult.
     * 
     * @return ListInboundShipmentsResult ListInboundShipmentsResult
     */
    public function getListInboundShipmentsResult() 
    {
        return $this->_fields['ListInboundShipmentsResult']['FieldValue'];
    }

    /**
     * Sets the value of the ListInboundShipmentsResult.
     * 
     * @param ListInboundShipmentsResult ListInboundShipmentsResult
     * @return void
     */
    public function setListInboundShipmentsResult($value) 
    {
        $this->_fields['ListInboundShipmentsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ListInboundShipmentsResult  and returns this instance
     * 
     * @param ListInboundShipmentsResult $value ListInboundShipmentsResult
     * @return Amazon_FWSInbound_Model_ListInboundShipmentsResponse instance
     */
    public function withListInboundShipmentsResult($value)
    {
        $this->setListInboundShipmentsResult($value);
        return $this;
    }


    /**
     * Checks if ListInboundShipmentsResult  is set
     * 
     * @return bool true if ListInboundShipmentsResult property is set
     */
    public function isSetListInboundShipmentsResult()
    {
        return !is_null($this->_fields['ListInboundShipmentsResult']['FieldValue']);

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
     * @return Amazon_FWSInbound_Model_ListInboundShipmentsResponse instance
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
        $xml .= "<ListInboundShipmentsResponse xmlns=\"http://fba-inbound.amazonaws.com/doc/2007-05-10/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListInboundShipmentsResponse>";
        return $xml;
    }

}