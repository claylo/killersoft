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
 * Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListAllFulfillmentItemsResult: Amazon_FWSInbound_Model_ListAllFulfillmentItemsResult</li>
 * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ListAllFulfillmentItemsResult: Amazon_FWSInbound_Model_ListAllFulfillmentItemsResult</li>
     * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ListAllFulfillmentItemsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_ListAllFulfillmentItemsResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fba-inbound.amazonaws.com/doc/2007-05-10/');
        $response = $xpath->query('//a:ListAllFulfillmentItemsResponse');
        if ($response->length == 1) {
            return new Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse from provided XML. 
                                  Make sure that ListAllFulfillmentItemsResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the ListAllFulfillmentItemsResult.
     * 
     * @return ListAllFulfillmentItemsResult ListAllFulfillmentItemsResult
     */
    public function getListAllFulfillmentItemsResult() 
    {
        return $this->_fields['ListAllFulfillmentItemsResult']['FieldValue'];
    }

    /**
     * Sets the value of the ListAllFulfillmentItemsResult.
     * 
     * @param ListAllFulfillmentItemsResult ListAllFulfillmentItemsResult
     * @return void
     */
    public function setListAllFulfillmentItemsResult($value) 
    {
        $this->_fields['ListAllFulfillmentItemsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ListAllFulfillmentItemsResult  and returns this instance
     * 
     * @param ListAllFulfillmentItemsResult $value ListAllFulfillmentItemsResult
     * @return Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse instance
     */
    public function withListAllFulfillmentItemsResult($value)
    {
        $this->setListAllFulfillmentItemsResult($value);
        return $this;
    }


    /**
     * Checks if ListAllFulfillmentItemsResult  is set
     * 
     * @return bool true if ListAllFulfillmentItemsResult property is set
     */
    public function isSetListAllFulfillmentItemsResult()
    {
        return !is_null($this->_fields['ListAllFulfillmentItemsResult']['FieldValue']);

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
     * @return Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse instance
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
        $xml .= "<ListAllFulfillmentItemsResponse xmlns=\"http://fba-inbound.amazonaws.com/doc/2007-05-10/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListAllFulfillmentItemsResponse>";
        return $xml;
    }

}