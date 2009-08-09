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
 * Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>TerminateInstanceInAutoScalingGroupResult: Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResult</li>
 * <li>ResponseMetadata: Amazon_AutoScaling_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>TerminateInstanceInAutoScalingGroupResult: Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResult</li>
     * <li>ResponseMetadata: Amazon_AutoScaling_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'TerminateInstanceInAutoScalingGroupResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_AutoScaling_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://autoscaling.amazonaws.com/doc/2009-05-15/');
        $response = $xpath->query('//a:TerminateInstanceInAutoScalingGroupResponse');
        if ($response->length == 1) {
            return new Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse from provided XML. 
                                  Make sure that TerminateInstanceInAutoScalingGroupResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the TerminateInstanceInAutoScalingGroupResult.
     * 
     * @return TerminateInstanceInAutoScalingGroupResult TerminateInstanceInAutoScalingGroupResult
     */
    public function getTerminateInstanceInAutoScalingGroupResult() 
    {
        return $this->_fields['TerminateInstanceInAutoScalingGroupResult']['FieldValue'];
    }

    /**
     * Sets the value of the TerminateInstanceInAutoScalingGroupResult.
     * 
     * @param TerminateInstanceInAutoScalingGroupResult TerminateInstanceInAutoScalingGroupResult
     * @return void
     */
    public function setTerminateInstanceInAutoScalingGroupResult($value) 
    {
        $this->_fields['TerminateInstanceInAutoScalingGroupResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the TerminateInstanceInAutoScalingGroupResult  and returns this instance
     * 
     * @param TerminateInstanceInAutoScalingGroupResult $value TerminateInstanceInAutoScalingGroupResult
     * @return Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse instance
     */
    public function withTerminateInstanceInAutoScalingGroupResult($value)
    {
        $this->setTerminateInstanceInAutoScalingGroupResult($value);
        return $this;
    }


    /**
     * Checks if TerminateInstanceInAutoScalingGroupResult  is set
     * 
     * @return bool true if TerminateInstanceInAutoScalingGroupResult property is set
     */
    public function isSetTerminateInstanceInAutoScalingGroupResult()
    {
        return !is_null($this->_fields['TerminateInstanceInAutoScalingGroupResult']['FieldValue']);

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
     * @return Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse instance
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
        $xml .= "<TerminateInstanceInAutoScalingGroupResponse xmlns=\"http://autoscaling.amazonaws.com/doc/2009-05-15/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</TerminateInstanceInAutoScalingGroupResponse>";
        return $xml;
    }

}