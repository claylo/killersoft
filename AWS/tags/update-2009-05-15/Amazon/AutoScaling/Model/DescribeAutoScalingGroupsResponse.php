<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_AutoScaling
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
 *  Amazon Auto Scaling PHP5 Library
 *  Generated: Sun May 17 01:17:22 PDT 2009
 * 
 */

/**
 *  @see Amazon_AutoScaling_Model
 */
require_once ('Amazon/AutoScaling/Model.php');  

    

/**
 * Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>DescribeAutoScalingGroupsResult: Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResult</li>
 * <li>ResponseMetadata: Amazon_AutoScaling_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DescribeAutoScalingGroupsResult: Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResult</li>
     * <li>ResponseMetadata: Amazon_AutoScaling_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DescribeAutoScalingGroupsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_AutoScaling_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://autoscaling.amazonaws.com/doc/2009-05-15/');
        $response = $xpath->query('//a:DescribeAutoScalingGroupsResponse');
        if ($response->length == 1) {
            return new Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse from provided XML. 
                                  Make sure that DescribeAutoScalingGroupsResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the DescribeAutoScalingGroupsResult.
     * 
     * @return DescribeAutoScalingGroupsResult DescribeAutoScalingGroupsResult
     */
    public function getDescribeAutoScalingGroupsResult() 
    {
        return $this->_fields['DescribeAutoScalingGroupsResult']['FieldValue'];
    }

    /**
     * Sets the value of the DescribeAutoScalingGroupsResult.
     * 
     * @param DescribeAutoScalingGroupsResult DescribeAutoScalingGroupsResult
     * @return void
     */
    public function setDescribeAutoScalingGroupsResult($value) 
    {
        $this->_fields['DescribeAutoScalingGroupsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DescribeAutoScalingGroupsResult  and returns this instance
     * 
     * @param DescribeAutoScalingGroupsResult $value DescribeAutoScalingGroupsResult
     * @return Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse instance
     */
    public function withDescribeAutoScalingGroupsResult($value)
    {
        $this->setDescribeAutoScalingGroupsResult($value);
        return $this;
    }


    /**
     * Checks if DescribeAutoScalingGroupsResult  is set
     * 
     * @return bool true if DescribeAutoScalingGroupsResult property is set
     */
    public function isSetDescribeAutoScalingGroupsResult()
    {
        return !is_null($this->_fields['DescribeAutoScalingGroupsResult']['FieldValue']);

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
     * @return Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse instance
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
        $xml .= "<DescribeAutoScalingGroupsResponse xmlns=\"http://autoscaling.amazonaws.com/doc/2009-05-15/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DescribeAutoScalingGroupsResponse>";
        return $xml;
    }

}