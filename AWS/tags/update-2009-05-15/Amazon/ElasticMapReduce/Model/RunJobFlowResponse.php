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
 * Amazon_ElasticMapReduce_Model_RunJobFlowResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>RunJobFlowResult: Amazon_ElasticMapReduce_Model_RunJobFlowResult</li>
 * <li>ResponseMetadata: Amazon_ElasticMapReduce_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_RunJobFlowResponse extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_RunJobFlowResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>RunJobFlowResult: Amazon_ElasticMapReduce_Model_RunJobFlowResult</li>
     * <li>ResponseMetadata: Amazon_ElasticMapReduce_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'RunJobFlowResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticMapReduce_Model_RunJobFlowResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticMapReduce_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_ElasticMapReduce_Model_RunJobFlowResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_ElasticMapReduce_Model_RunJobFlowResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://elasticmapreduce.amazonaws.com/doc/2009-03-31');
        $response = $xpath->query('//a:RunJobFlowResponse');
        if ($response->length == 1) {
            return new Amazon_ElasticMapReduce_Model_RunJobFlowResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_ElasticMapReduce_Model_RunJobFlowResponse from provided XML. 
                                  Make sure that RunJobFlowResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the RunJobFlowResult.
     * 
     * @return RunJobFlowResult RunJobFlowResult
     */
    public function getRunJobFlowResult() 
    {
        return $this->_fields['RunJobFlowResult']['FieldValue'];
    }

    /**
     * Sets the value of the RunJobFlowResult.
     * 
     * @param RunJobFlowResult RunJobFlowResult
     * @return void
     */
    public function setRunJobFlowResult($value) 
    {
        $this->_fields['RunJobFlowResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the RunJobFlowResult  and returns this instance
     * 
     * @param RunJobFlowResult $value RunJobFlowResult
     * @return Amazon_ElasticMapReduce_Model_RunJobFlowResponse instance
     */
    public function withRunJobFlowResult($value)
    {
        $this->setRunJobFlowResult($value);
        return $this;
    }


    /**
     * Checks if RunJobFlowResult  is set
     * 
     * @return bool true if RunJobFlowResult property is set
     */
    public function isSetRunJobFlowResult()
    {
        return !is_null($this->_fields['RunJobFlowResult']['FieldValue']);

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
     * @return Amazon_ElasticMapReduce_Model_RunJobFlowResponse instance
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
        $xml .= "<RunJobFlowResponse xmlns=\"http://elasticmapreduce.amazonaws.com/doc/2009-03-31\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</RunJobFlowResponse>";
        return $xml;
    }

}