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
 * Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>DescribeLaunchConfigurationsResult: Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResult</li>
 * <li>ResponseMetadata: Amazon_AutoScaling_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DescribeLaunchConfigurationsResult: Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResult</li>
     * <li>ResponseMetadata: Amazon_AutoScaling_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DescribeLaunchConfigurationsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_AutoScaling_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://autoscaling.amazonaws.com/doc/2009-05-15/');
        $response = $xpath->query('//a:DescribeLaunchConfigurationsResponse');
        if ($response->length == 1) {
            return new Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse from provided XML. 
                                  Make sure that DescribeLaunchConfigurationsResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the DescribeLaunchConfigurationsResult.
     * 
     * @return DescribeLaunchConfigurationsResult DescribeLaunchConfigurationsResult
     */
    public function getDescribeLaunchConfigurationsResult() 
    {
        return $this->_fields['DescribeLaunchConfigurationsResult']['FieldValue'];
    }

    /**
     * Sets the value of the DescribeLaunchConfigurationsResult.
     * 
     * @param DescribeLaunchConfigurationsResult DescribeLaunchConfigurationsResult
     * @return void
     */
    public function setDescribeLaunchConfigurationsResult($value) 
    {
        $this->_fields['DescribeLaunchConfigurationsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DescribeLaunchConfigurationsResult  and returns this instance
     * 
     * @param DescribeLaunchConfigurationsResult $value DescribeLaunchConfigurationsResult
     * @return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse instance
     */
    public function withDescribeLaunchConfigurationsResult($value)
    {
        $this->setDescribeLaunchConfigurationsResult($value);
        return $this;
    }


    /**
     * Checks if DescribeLaunchConfigurationsResult  is set
     * 
     * @return bool true if DescribeLaunchConfigurationsResult property is set
     */
    public function isSetDescribeLaunchConfigurationsResult()
    {
        return !is_null($this->_fields['DescribeLaunchConfigurationsResult']['FieldValue']);

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
     * @return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse instance
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
        $xml .= "<DescribeLaunchConfigurationsResponse xmlns=\"http://autoscaling.amazonaws.com/doc/2009-05-15/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DescribeLaunchConfigurationsResponse>";
        return $xml;
    }

}