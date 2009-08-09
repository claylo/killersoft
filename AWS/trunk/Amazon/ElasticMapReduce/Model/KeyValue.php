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
 * Amazon_ElasticMapReduce_Model_KeyValue
 * 
 * Properties:
 * <ul>
 * 
 * <li>Key: string</li>
 * <li>Value: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_KeyValue extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_KeyValue
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Key: string</li>
     * <li>Value: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Key' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Value' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Key property.
     * 
     * @return string Key
     */
    public function getKey() 
    {
        return $this->_fields['Key']['FieldValue'];
    }

    /**
     * Sets the value of the Key property.
     * 
     * @param string Key
     * @return this instance
     */
    public function setKey($value) 
    {
        $this->_fields['Key']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Key and returns this instance
     * 
     * @param string $value Key
     * @return Amazon_ElasticMapReduce_Model_KeyValue instance
     */
    public function withKey($value)
    {
        $this->setKey($value);
        return $this;
    }


    /**
     * Checks if Key is set
     * 
     * @return bool true if Key  is set
     */
    public function isSetKey()
    {
        return !is_null($this->_fields['Key']['FieldValue']);
    }

    /**
     * Gets the value of the Value property.
     * 
     * @return string Value
     */
    public function getValue() 
    {
        return $this->_fields['Value']['FieldValue'];
    }

    /**
     * Sets the value of the Value property.
     * 
     * @param string Value
     * @return this instance
     */
    public function setValue($value) 
    {
        $this->_fields['Value']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Value and returns this instance
     * 
     * @param string $value Value
     * @return Amazon_ElasticMapReduce_Model_KeyValue instance
     */
    public function withValue($value)
    {
        $this->setValue($value);
        return $this;
    }


    /**
     * Checks if Value is set
     * 
     * @return bool true if Value  is set
     */
    public function isSetValue()
    {
        return !is_null($this->_fields['Value']['FieldValue']);
    }




}