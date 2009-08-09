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
 * Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>AutoScalingGroupName: string</li>
 * <li>LaunchConfigurationName: string</li>
 * <li>MinSize: int</li>
 * <li>MaxSize: int</li>
 * <li>Cooldown: int</li>
 * <li>AvailabilityZones: string</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>AutoScalingGroupName: string</li>
     * <li>LaunchConfigurationName: string</li>
     * <li>MinSize: int</li>
     * <li>MaxSize: int</li>
     * <li>Cooldown: int</li>
     * <li>AvailabilityZones: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'AutoScalingGroupName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LaunchConfigurationName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MinSize' => array('FieldValue' => null, 'FieldType' => 'int'),
        'MaxSize' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Cooldown' => array('FieldValue' => null, 'FieldType' => 'int'),
        'AvailabilityZones' => array('FieldValue' => array(), 'FieldType' => array('string')),
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
     * @return Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest instance
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
     * Gets the value of the LaunchConfigurationName property.
     * 
     * @return string LaunchConfigurationName
     */
    public function getLaunchConfigurationName() 
    {
        return $this->_fields['LaunchConfigurationName']['FieldValue'];
    }

    /**
     * Sets the value of the LaunchConfigurationName property.
     * 
     * @param string LaunchConfigurationName
     * @return this instance
     */
    public function setLaunchConfigurationName($value) 
    {
        $this->_fields['LaunchConfigurationName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the LaunchConfigurationName and returns this instance
     * 
     * @param string $value LaunchConfigurationName
     * @return Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest instance
     */
    public function withLaunchConfigurationName($value)
    {
        $this->setLaunchConfigurationName($value);
        return $this;
    }


    /**
     * Checks if LaunchConfigurationName is set
     * 
     * @return bool true if LaunchConfigurationName  is set
     */
    public function isSetLaunchConfigurationName()
    {
        return !is_null($this->_fields['LaunchConfigurationName']['FieldValue']);
    }

    /**
     * Gets the value of the MinSize property.
     * 
     * @return int MinSize
     */
    public function getMinSize() 
    {
        return $this->_fields['MinSize']['FieldValue'];
    }

    /**
     * Sets the value of the MinSize property.
     * 
     * @param int MinSize
     * @return this instance
     */
    public function setMinSize($value) 
    {
        $this->_fields['MinSize']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MinSize and returns this instance
     * 
     * @param int $value MinSize
     * @return Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest instance
     */
    public function withMinSize($value)
    {
        $this->setMinSize($value);
        return $this;
    }


    /**
     * Checks if MinSize is set
     * 
     * @return bool true if MinSize  is set
     */
    public function isSetMinSize()
    {
        return !is_null($this->_fields['MinSize']['FieldValue']);
    }

    /**
     * Gets the value of the MaxSize property.
     * 
     * @return int MaxSize
     */
    public function getMaxSize() 
    {
        return $this->_fields['MaxSize']['FieldValue'];
    }

    /**
     * Sets the value of the MaxSize property.
     * 
     * @param int MaxSize
     * @return this instance
     */
    public function setMaxSize($value) 
    {
        $this->_fields['MaxSize']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MaxSize and returns this instance
     * 
     * @param int $value MaxSize
     * @return Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest instance
     */
    public function withMaxSize($value)
    {
        $this->setMaxSize($value);
        return $this;
    }


    /**
     * Checks if MaxSize is set
     * 
     * @return bool true if MaxSize  is set
     */
    public function isSetMaxSize()
    {
        return !is_null($this->_fields['MaxSize']['FieldValue']);
    }

    /**
     * Gets the value of the Cooldown property.
     * 
     * @return int Cooldown
     */
    public function getCooldown() 
    {
        return $this->_fields['Cooldown']['FieldValue'];
    }

    /**
     * Sets the value of the Cooldown property.
     * 
     * @param int Cooldown
     * @return this instance
     */
    public function setCooldown($value) 
    {
        $this->_fields['Cooldown']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Cooldown and returns this instance
     * 
     * @param int $value Cooldown
     * @return Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest instance
     */
    public function withCooldown($value)
    {
        $this->setCooldown($value);
        return $this;
    }


    /**
     * Checks if Cooldown is set
     * 
     * @return bool true if Cooldown  is set
     */
    public function isSetCooldown()
    {
        return !is_null($this->_fields['Cooldown']['FieldValue']);
    }

    /**
     * Gets the value of the AvailabilityZones .
     * 
     * @return array of string AvailabilityZones
     */
    public function getAvailabilityZones() 
    {
        return $this->_fields['AvailabilityZones']['FieldValue'];
    }

    /**
     * Sets the value of the AvailabilityZones.
     * 
     * @param string or an array of string AvailabilityZones
     * @return this instance
     */
    public function setAvailabilityZones($availabilityZones) 
    {
        if (!$this->_isNumericArray($availabilityZones)) {
            $availabilityZones =  array ($availabilityZones);    
        }
        $this->_fields['AvailabilityZones']['FieldValue'] = $availabilityZones;
        return $this;
    }
  

    /**
     * Sets single or multiple values of AvailabilityZones list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withAvailabilityZones($availabilityZones1, $availabilityZones2)</code>
     * 
     * @param string  $stringArgs one or more AvailabilityZones
     * @return Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest  instance
     */
    public function withAvailabilityZones($stringArgs)
    {
        foreach (func_get_args() as $availabilityZones) {
            $this->_fields['AvailabilityZones']['FieldValue'][] = $availabilityZones;
        }
        return $this;
    }  
      

    /**
     * Checks if AvailabilityZones list is non-empty
     * 
     * @return bool true if AvailabilityZones list is non-empty
     */
    public function isSetAvailabilityZones()
    {
        return count ($this->_fields['AvailabilityZones']['FieldValue']) > 0;
    }




}