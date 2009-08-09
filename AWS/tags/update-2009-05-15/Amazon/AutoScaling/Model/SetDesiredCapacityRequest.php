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
 * Amazon_AutoScaling_Model_SetDesiredCapacityRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>AutoScalingGroupName: string</li>
 * <li>DesiredCapacity: int</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_SetDesiredCapacityRequest extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_SetDesiredCapacityRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>AutoScalingGroupName: string</li>
     * <li>DesiredCapacity: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'AutoScalingGroupName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DesiredCapacity' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the AutoScalingGroupName property.
     * 
     * @return string AutoScalingGroupName
     */
    public function getAutoScalingGroupName() 
    {
        return $this->_fields['AutoScalingGroupName']['FieldValue'];
    }

    /**
     * Sets the value of the AutoScalingGroupName property.
     * 
     * @param string AutoScalingGroupName
     * @return this instance
     */
    public function setAutoScalingGroupName($value) 
    {
        $this->_fields['AutoScalingGroupName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AutoScalingGroupName and returns this instance
     * 
     * @param string $value AutoScalingGroupName
     * @return Amazon_AutoScaling_Model_SetDesiredCapacityRequest instance
     */
    public function withAutoScalingGroupName($value)
    {
        $this->setAutoScalingGroupName($value);
        return $this;
    }


    /**
     * Checks if AutoScalingGroupName is set
     * 
     * @return bool true if AutoScalingGroupName  is set
     */
    public function isSetAutoScalingGroupName()
    {
        return !is_null($this->_fields['AutoScalingGroupName']['FieldValue']);
    }

    /**
     * Gets the value of the DesiredCapacity property.
     * 
     * @return int DesiredCapacity
     */
    public function getDesiredCapacity() 
    {
        return $this->_fields['DesiredCapacity']['FieldValue'];
    }

    /**
     * Sets the value of the DesiredCapacity property.
     * 
     * @param int DesiredCapacity
     * @return this instance
     */
    public function setDesiredCapacity($value) 
    {
        $this->_fields['DesiredCapacity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the DesiredCapacity and returns this instance
     * 
     * @param int $value DesiredCapacity
     * @return Amazon_AutoScaling_Model_SetDesiredCapacityRequest instance
     */
    public function withDesiredCapacity($value)
    {
        $this->setDesiredCapacity($value);
        return $this;
    }


    /**
     * Checks if DesiredCapacity is set
     * 
     * @return bool true if DesiredCapacity  is set
     */
    public function isSetDesiredCapacity()
    {
        return !is_null($this->_fields['DesiredCapacity']['FieldValue']);
    }




}