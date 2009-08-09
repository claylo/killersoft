<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_ElasticMapReduce
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-03-31
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon Elastic Map Reduce PHP5 Library
 *  Generated: Tue Apr 21 15:38:55 PDT 2009
 * 
 */

/**
 *  @see Amazon_ElasticMapReduce_Model
 */
require_once ('Amazon/ElasticMapReduce/Model.php');  

    

/**
 * Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>DescribeJobFlowsResult: Amazon_ElasticMapReduce_Model_DescribeJobFlowsResult</li>
 * <li>ResponseMetadata: Amazon_ElasticMapReduce_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DescribeJobFlowsResult: Amazon_ElasticMapReduce_Model_DescribeJobFlowsResult</li>
     * <li>ResponseMetadata: Amazon_ElasticMapReduce_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DescribeJobFlowsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticMapReduce_Model_DescribeJobFlowsResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticMapReduce_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://elasticmapreduce.amazonaws.com/doc/2009-03-31');
        $response = $xpath->query('//a:DescribeJobFlowsResponse');
        if ($response->length == 1) {
            return new Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse from provided XML. 
                                  Make sure that DescribeJobFlowsResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the DescribeJobFlowsResult.
     * 
     * @return DescribeJobFlowsResult DescribeJobFlowsResult
     */
    public function getDescribeJobFlowsResult() 
    {
        return $this->_fields['DescribeJobFlowsResult']['FieldValue'];
    }

    /**
     * Sets the value of the DescribeJobFlowsResult.
     * 
     * @param DescribeJobFlowsResult DescribeJobFlowsResult
     * @return void
     */
    public function setDescribeJobFlowsResult($value) 
    {
        $this->_fields['DescribeJobFlowsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DescribeJobFlowsResult  and returns this instance
     * 
     * @param DescribeJobFlowsResult $value DescribeJobFlowsResult
     * @return Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse instance
     */
    public function withDescribeJobFlowsResult($value)
    {
        $this->setDescribeJobFlowsResult($value);
        return $this;
    }


    /**
     * Checks if DescribeJobFlowsResult  is set
     * 
     * @return bool true if DescribeJobFlowsResult property is set
     */
    public function isSetDescribeJobFlowsResult()
    {
        return !is_null($this->_fields['DescribeJobFlowsResult']['FieldValue']);

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
     * @return Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse instance
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
        $xml .= "<DescribeJobFlowsResponse xmlns=\"http://elasticmapreduce.amazonaws.com/doc/2009-03-31\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DescribeJobFlowsResponse>";
        return $xml;
    }

}