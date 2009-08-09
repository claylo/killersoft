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
 * Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceId: string</li>
 * <li>ShouldDecrementDesiredCapacity: bool</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceId: string</li>
     * <li>ShouldDecrementDesiredCapacity: bool</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ShouldDecrementDesiredCapacity' => array('FieldValue' => null, 'FieldType' => 'bool'),
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
     * @return Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest instance
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
     * Gets the value of the ShouldDecrementDesiredCapacity property.
     * 
     * @return bool ShouldDecrementDesiredCapacity
     */
    public function getShouldDecrementDesiredCapacity() 
    {
        return $this->_fields['ShouldDecrementDesiredCapacity']['FieldValue'];
    }

    /**
     * Sets the value of the ShouldDecrementDesiredCapacity property.
     * 
     * @param bool ShouldDecrementDesiredCapacity
     * @return this instance
     */
    public function setShouldDecrementDesiredCapacity($value) 
    {
        $this->_fields['ShouldDecrementDesiredCapacity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ShouldDecrementDesiredCapacity and returns this instance
     * 
     * @param bool $value ShouldDecrementDesiredCapacity
     * @return Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest instance
     */
    public function withShouldDecrementDesiredCapacity($value)
    {
        $this->setShouldDecrementDesiredCapacity($value);
        return $this;
    }


    /**
     * Checks if ShouldDecrementDesiredCapacity is set
     * 
     * @return bool true if ShouldDecrementDesiredCapacity  is set
     */
    public function isSetShouldDecrementDesiredCapacity()
    {
        return !is_null($this->_fields['ShouldDecrementDesiredCapacity']['FieldValue']);
    }




}