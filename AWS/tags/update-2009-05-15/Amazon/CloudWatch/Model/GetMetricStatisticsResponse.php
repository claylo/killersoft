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
 * Amazon_CloudWatch_Model_GetMetricStatisticsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_CloudWatch_Model_ResponseMetadata</li>
 * <li>GetMetricStatisticsResult: Amazon_CloudWatch_Model_GetMetricStatisticsResult</li>
 *
 * </ul>
 */ 
class Amazon_CloudWatch_Model_GetMetricStatisticsResponse extends Amazon_CloudWatch_Model
{


    /**
     * Construct new Amazon_CloudWatch_Model_GetMetricStatisticsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_CloudWatch_Model_ResponseMetadata</li>
     * <li>GetMetricStatisticsResult: Amazon_CloudWatch_Model_GetMetricStatisticsResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_CloudWatch_Model_ResponseMetadata'),
        'GetMetricStatisticsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_CloudWatch_Model_GetMetricStatisticsResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_CloudWatch_Model_GetMetricStatisticsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://monitoring.amazonaws.com/doc/2009-05-15/');
        $response = $xpath->query('//a:GetMetricStatisticsResponse');
        if ($response->length == 1) {
            return new Amazon_CloudWatch_Model_GetMetricStatisticsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_CloudWatch_Model_GetMetricStatisticsResponse from provided XML. 
                                  Make sure that GetMetricStatisticsResponse is a root element");
        }
          
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
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsResponse instance
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
     * Gets the value of the GetMetricStatisticsResult.
     * 
     * @return GetMetricStatisticsResult GetMetricStatisticsResult
     */
    public function getGetMetricStatisticsResult() 
    {
        return $this->_fields['GetMetricStatisticsResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetMetricStatisticsResult.
     * 
     * @param GetMetricStatisticsResult GetMetricStatisticsResult
     * @return void
     */
    public function setGetMetricStatisticsResult($value) 
    {
        $this->_fields['GetMetricStatisticsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetMetricStatisticsResult  and returns this instance
     * 
     * @param GetMetricStatisticsResult $value GetMetricStatisticsResult
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsResponse instance
     */
    public function withGetMetricStatisticsResult($value)
    {
        $this->setGetMetricStatisticsResult($value);
        return $this;
    }


    /**
     * Checks if GetMetricStatisticsResult  is set
     * 
     * @return bool true if GetMetricStatisticsResult property is set
     */
    public function isSetGetMetricStatisticsResult()
    {
        return !is_null($this->_fields['GetMetricStatisticsResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<GetMetricStatisticsResponse xmlns=\"http://monitoring.amazonaws.com/doc/2009-05-15/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetMetricStatisticsResponse>";
        return $xml;
    }

}