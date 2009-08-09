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
 * Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListAllFulfillmentItemsByNextTokenResult: Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResult</li>
 * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ListAllFulfillmentItemsByNextTokenResult: Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResult</li>
     * <li>ResponseMetadata: Amazon_FWSInbound_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ListAllFulfillmentItemsByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fba-inbound.amazonaws.com/doc/2007-05-10/');
        $response = $xpath->query('//a:ListAllFulfillmentItemsByNextTokenResponse');
        if ($response->length == 1) {
            return new Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse from provided XML. 
                                  Make sure that ListAllFulfillmentItemsByNextTokenResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the ListAllFulfillmentItemsByNextTokenResult.
     * 
     * @return ListAllFulfillmentItemsByNextTokenResult ListAllFulfillmentItemsByNextTokenResult
     */
    public function getListAllFulfillmentItemsByNextTokenResult() 
    {
        return $this->_fields['ListAllFulfillmentItemsByNextTokenResult']['FieldValue'];
    }

    /**
     * Sets the value of the ListAllFulfillmentItemsByNextTokenResult.
     * 
     * @param ListAllFulfillmentItemsByNextTokenResult ListAllFulfillmentItemsByNextTokenResult
     * @return void
     */
    public function setListAllFulfillmentItemsByNextTokenResult($value) 
    {
        $this->_fields['ListAllFulfillmentItemsByNextTokenResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ListAllFulfillmentItemsByNextTokenResult  and returns this instance
     * 
     * @param ListAllFulfillmentItemsByNextTokenResult $value ListAllFulfillmentItemsByNextTokenResult
     * @return Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse instance
     */
    public function withListAllFulfillmentItemsByNextTokenResult($value)
    {
        $this->setListAllFulfillmentItemsByNextTokenResult($value);
        return $this;
    }


    /**
     * Checks if ListAllFulfillmentItemsByNextTokenResult  is set
     * 
     * @return bool true if ListAllFulfillmentItemsByNextTokenResult property is set
     */
    public function isSetListAllFulfillmentItemsByNextTokenResult()
    {
        return !is_null($this->_fields['ListAllFulfillmentItemsByNextTokenResult']['FieldValue']);

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
     * @return Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse instance
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
        $xml .= "<ListAllFulfillmentItemsByNextTokenResponse xmlns=\"http://fba-inbound.amazonaws.com/doc/2007-05-10/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListAllFulfillmentItemsByNextTokenResponse>";
        return $xml;
    }

}