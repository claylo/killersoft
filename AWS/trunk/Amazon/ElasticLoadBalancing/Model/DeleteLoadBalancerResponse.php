<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_ElasticLoadBalancing
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
 *  Amazon Elastic Load Balancing PHP5 Library
 *  Generated: Sun May 17 01:27:31 PDT 2009
 * 
 */

/**
 *  @see Amazon_ElasticLoadBalancing_Model
 */
require_once ('Amazon/ElasticLoadBalancing/Model.php');  

    

/**
 * Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>DeleteLoadBalancerResult: Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResult</li>
 * <li>ResponseMetadata: Amazon_ElasticLoadBalancing_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DeleteLoadBalancerResult: Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResult</li>
     * <li>ResponseMetadata: Amazon_ElasticLoadBalancing_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DeleteLoadBalancerResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticLoadBalancing_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://elasticloadbalancing.amazonaws.com/doc/2009-05-15/');
        $response = $xpath->query('//a:DeleteLoadBalancerResponse');
        if ($response->length == 1) {
            return new Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse from provided XML. 
                                  Make sure that DeleteLoadBalancerResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the DeleteLoadBalancerResult.
     * 
     * @return DeleteLoadBalancerResult DeleteLoadBalancerResult
     */
    public function getDeleteLoadBalancerResult() 
    {
        return $this->_fields['DeleteLoadBalancerResult']['FieldValue'];
    }

    /**
     * Sets the value of the DeleteLoadBalancerResult.
     * 
     * @param DeleteLoadBalancerResult DeleteLoadBalancerResult
     * @return void
     */
    public function setDeleteLoadBalancerResult($value) 
    {
        $this->_fields['DeleteLoadBalancerResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DeleteLoadBalancerResult  and returns this instance
     * 
     * @param DeleteLoadBalancerResult $value DeleteLoadBalancerResult
     * @return Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse instance
     */
    public function withDeleteLoadBalancerResult($value)
    {
        $this->setDeleteLoadBalancerResult($value);
        return $this;
    }


    /**
     * Checks if DeleteLoadBalancerResult  is set
     * 
     * @return bool true if DeleteLoadBalancerResult property is set
     */
    public function isSetDeleteLoadBalancerResult()
    {
        return !is_null($this->_fields['DeleteLoadBalancerResult']['FieldValue']);

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
     * @return Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse instance
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
        $xml .= "<DeleteLoadBalancerResponse xmlns=\"http://elasticloadbalancing.amazonaws.com/doc/2009-05-15/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DeleteLoadBalancerResponse>";
        return $xml;
    }

}