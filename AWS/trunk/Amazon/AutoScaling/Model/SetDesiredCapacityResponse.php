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
 * Amazon_AutoScaling_Model_SetDesiredCapacityResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_AutoScaling_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_SetDesiredCapacityResponse extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_SetDesiredCapacityResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_AutoScaling_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_AutoScaling_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_AutoScaling_Model_SetDesiredCapacityResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_AutoScaling_Model_SetDesiredCapacityResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://autoscaling.amazonaws.com/doc/2009-05-15/');
        $response = $xpath->query('//a:SetDesiredCapacityResponse');
        if ($response->length == 1) {
            return new Amazon_AutoScaling_Model_SetDesiredCapacityResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_AutoScaling_Model_SetDesiredCapacityResponse from provided XML. 
                                  Make sure that SetDesiredCapacityResponse is a root element");
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
     * @return Amazon_AutoScaling_Model_SetDesiredCapacityResponse instance
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
        $xml .= "<SetDesiredCapacityResponse xmlns=\"http://autoscaling.amazonaws.com/doc/2009-05-15/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</SetDesiredCapacityResponse>";
        return $xml;
    }

}