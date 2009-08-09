<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_CloudWatch
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
 *  Amazon Cloud Watch PHP5 Library
 *  Generated: Sun May 17 01:27:23 PDT 2009
 * 
 */

/**
 *  @see Amazon_CloudWatch_Model
 */
require_once ('Amazon/CloudWatch/Model.php');  

    

/**
 * Amazon_CloudWatch_Model_ListMetricsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListMetricsResult: Amazon_CloudWatch_Model_ListMetricsResult</li>
 * <li>ResponseMetadata: Amazon_CloudWatch_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_CloudWatch_Model_ListMetricsResponse extends Amazon_CloudWatch_Model
{


    /**
     * Construct new Amazon_CloudWatch_Model_ListMetricsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ListMetricsResult: Amazon_CloudWatch_Model_ListMetricsResult</li>
     * <li>ResponseMetadata: Amazon_CloudWatch_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ListMetricsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_CloudWatch_Model_ListMetricsResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_CloudWatch_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_CloudWatch_Model_ListMetricsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_CloudWatch_Model_ListMetricsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://monitoring.amazonaws.com/doc/2009-05-15/');
        $response = $xpath->query('//a:ListMetricsResponse');
        if ($response->length == 1) {
            return new Amazon_CloudWatch_Model_ListMetricsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_CloudWatch_Model_ListMetricsResponse from provided XML. 
                                  Make sure that ListMetricsResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the ListMetricsResult.
     * 
     * @return ListMetricsResult ListMetricsResult
     */
    public function getListMetricsResult() 
    {
        return $this->_fields['ListMetricsResult']['FieldValue'];
    }

    /**
     * Sets the value of the ListMetricsResult.
     * 
     * @param ListMetricsResult ListMetricsResult
     * @return void
     */
    public function setListMetricsResult($value) 
    {
        $this->_fields['ListMetricsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ListMetricsResult  and returns this instance
     * 
     * @param ListMetricsResult $value ListMetricsResult
     * @return Amazon_CloudWatch_Model_ListMetricsResponse instance
     */
    public function withListMetricsResult($value)
    {
        $this->setListMetricsResult($value);
        return $this;
    }


    /**
     * Checks if ListMetricsResult  is set
     * 
     * @return bool true if ListMetricsResult property is set
     */
    public function isSetListMetricsResult()
    {
        return !is_null($this->_fields['ListMetricsResult']['FieldValue']);

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
     * @return Amazon_CloudWatch_Model_ListMetricsResponse instance
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
        $xml .= "<ListMetricsResponse xmlns=\"http://monitoring.amazonaws.com/doc/2009-05-15/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListMetricsResponse>";
        return $xml;
    }

}