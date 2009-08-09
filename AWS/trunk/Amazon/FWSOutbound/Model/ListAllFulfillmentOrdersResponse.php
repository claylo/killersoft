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
 * Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListAllFulfillmentOrdersResult: Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResult</li>
 * <li>ResponseMetadata: Amazon_FWSOutbound_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse extends Amazon_FWSOutbound_Model
{


    /**
     * Construct new Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ListAllFulfillmentOrdersResult: Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResult</li>
     * <li>ResponseMetadata: Amazon_FWSOutbound_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ListAllFulfillmentOrdersResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSOutbound_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fba-outbound.amazonaws.com/doc/2007-08-02/');
        $response = $xpath->query('//a:ListAllFulfillmentOrdersResponse');
        if ($response->length == 1) {
            return new Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse from provided XML. 
                                  Make sure that ListAllFulfillmentOrdersResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the ListAllFulfillmentOrdersResult.
     * 
     * @return ListAllFulfillmentOrdersResult ListAllFulfillmentOrdersResult
     */
    public function getListAllFulfillmentOrdersResult() 
    {
        return $this->_fields['ListAllFulfillmentOrdersResult']['FieldValue'];
    }

    /**
     * Sets the value of the ListAllFulfillmentOrdersResult.
     * 
     * @param ListAllFulfillmentOrdersResult ListAllFulfillmentOrdersResult
     * @return void
     */
    public function setListAllFulfillmentOrdersResult($value) 
    {
        $this->_fields['ListAllFulfillmentOrdersResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ListAllFulfillmentOrdersResult  and returns this instance
     * 
     * @param ListAllFulfillmentOrdersResult $value ListAllFulfillmentOrdersResult
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse instance
     */
    public function withListAllFulfillmentOrdersResult($value)
    {
        $this->setListAllFulfillmentOrdersResult($value);
        return $this;
    }


    /**
     * Checks if ListAllFulfillmentOrdersResult  is set
     * 
     * @return bool true if ListAllFulfillmentOrdersResult property is set
     */
    public function isSetListAllFulfillmentOrdersResult()
    {
        return !is_null($this->_fields['ListAllFulfillmentOrdersResult']['FieldValue']);

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
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse instance
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
        $xml .= "<ListAllFulfillmentOrdersResponse xmlns=\"http://fba-outbound.amazonaws.com/doc/2007-08-02/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListAllFulfillmentOrdersResponse>";
        return $xml;
    }

}