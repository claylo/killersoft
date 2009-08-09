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
 * Amazon_AutoScaling_Model_Instance
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceId: string</li>
 * <li>AvailabilityZone: string</li>
 * <li>LifecycleState: string</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_Instance extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_Instance
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceId: string</li>
     * <li>AvailabilityZone: string</li>
     * <li>LifecycleState: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AvailabilityZone' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LifecycleState' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the InstanceId property.
     * 
     * @return string InstanceId
     */
    public function getInstanceId() 
    {
        return $this->_fields['InstanceId']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceId property.
     * 
     * @param string InstanceId
     * @return this instance
     */
    public function setInstanceId($value) 
    {
        $this->_fields['InstanceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstanceId and returns this instance
     * 
     * @param string $value InstanceId
     * @return Amazon_AutoScaling_Model_Instance instance
     */
    public function withInstanceId($value)
    {
        $this->setInstanceId($value);
        return $this;
    }


    /**
     * Checks if InstanceId is set
     * 
     * @return bool true if InstanceId  is set
     */
    public function isSetInstanceId()
    {
        return !is_null($this->_fields['InstanceId']['FieldValue']);
    }

    /**
     * Gets the value of the AvailabilityZone property.
     * 
     * @return string AvailabilityZone
     */
    public function getAvailabilityZone() 
    {
        return $this->_fields['AvailabilityZone']['FieldValue'];
    }

    /**
     * Sets the value of the AvailabilityZone property.
     * 
     * @param string AvailabilityZone
     * @return this instance
     */
    public function setAvailabilityZone($value) 
    {
        $this->_fields['AvailabilityZone']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AvailabilityZone and returns this instance
     * 
     * @param string $value AvailabilityZone
     * @return Amazon_AutoScaling_Model_Instance instance
     */
    public function withAvailabilityZone($value)
    {
        $this->setAvailabilityZone($value);
        return $this;
    }


    /**
     * Checks if AvailabilityZone is set
     * 
     * @return bool true if AvailabilityZone  is set
     */
    public function isSetAvailabilityZone()
    {
        return !is_null($this->_fields['AvailabilityZone']['FieldValue']);
    }

    /**
     * Gets the value of the LifecycleState property.
     * 
     * @return string LifecycleState
     */
    public function getLifecycleState() 
    {
        return $this->_fields['LifecycleState']['FieldValue'];
    }

    /**
     * Sets the value of the LifecycleState property.
     * 
     * @param string LifecycleState
     * @return this instance
     */
    public function setLifecycleState($value) 
    {
        $this->_fields['LifecycleState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the LifecycleState and returns this instance
     * 
     * @param string $value LifecycleState
     * @return Amazon_AutoScaling_Model_Instance instance
     */
    public function withLifecycleState($value)
    {
        $this->setLifecycleState($value);
        return $this;
    }


    /**
     * Checks if LifecycleState is set
     * 
     * @return bool true if LifecycleState  is set
     */
    public function isSetLifecycleState()
    {
        return !is_null($this->_fields['LifecycleState']['FieldValue']);
    }




}