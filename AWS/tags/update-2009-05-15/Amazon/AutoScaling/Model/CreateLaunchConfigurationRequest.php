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
 * Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>LaunchConfigurationName: string</li>
 * <li>ImageId: string</li>
 * <li>KeyName: string</li>
 * <li>SecurityGroups: string</li>
 * <li>UserData: string</li>
 * <li>InstanceType: string</li>
 * <li>KernelId: string</li>
 * <li>RamdiskId: string</li>
 * <li>BlockDeviceMappings: Amazon_AutoScaling_Model_BlockDeviceMapping</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LaunchConfigurationName: string</li>
     * <li>ImageId: string</li>
     * <li>KeyName: string</li>
     * <li>SecurityGroups: string</li>
     * <li>UserData: string</li>
     * <li>InstanceType: string</li>
     * <li>KernelId: string</li>
     * <li>RamdiskId: string</li>
     * <li>BlockDeviceMappings: Amazon_AutoScaling_Model_BlockDeviceMapping</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'LaunchConfigurationName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ImageId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'KeyName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SecurityGroups' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'UserData' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'KernelId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RamdiskId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BlockDeviceMappings' => array('FieldValue' => array(), 'FieldType' => array('Amazon_AutoScaling_Model_BlockDeviceMapping')),
        );
        parent::__construct($data);
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
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest instance
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
     * Gets the value of the ImageId property.
     * 
     * @return string ImageId
     */
    public function getImageId() 
    {
        return $this->_fields['ImageId']['FieldValue'];
    }

    /**
     * Sets the value of the ImageId property.
     * 
     * @param string ImageId
     * @return this instance
     */
    public function setImageId($value) 
    {
        $this->_fields['ImageId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ImageId and returns this instance
     * 
     * @param string $value ImageId
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest instance
     */
    public function withImageId($value)
    {
        $this->setImageId($value);
        return $this;
    }


    /**
     * Checks if ImageId is set
     * 
     * @return bool true if ImageId  is set
     */
    public function isSetImageId()
    {
        return !is_null($this->_fields['ImageId']['FieldValue']);
    }

    /**
     * Gets the value of the KeyName property.
     * 
     * @return string KeyName
     */
    public function getKeyName() 
    {
        return $this->_fields['KeyName']['FieldValue'];
    }

    /**
     * Sets the value of the KeyName property.
     * 
     * @param string KeyName
     * @return this instance
     */
    public function setKeyName($value) 
    {
        $this->_fields['KeyName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the KeyName and returns this instance
     * 
     * @param string $value KeyName
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest instance
     */
    public function withKeyName($value)
    {
        $this->setKeyName($value);
        return $this;
    }


    /**
     * Checks if KeyName is set
     * 
     * @return bool true if KeyName  is set
     */
    public function isSetKeyName()
    {
        return !is_null($this->_fields['KeyName']['FieldValue']);
    }

    /**
     * Gets the value of the SecurityGroups .
     * 
     * @return array of string SecurityGroups
     */
    public function getSecurityGroups() 
    {
        return $this->_fields['SecurityGroups']['FieldValue'];
    }

    /**
     * Sets the value of the SecurityGroups.
     * 
     * @param string or an array of string SecurityGroups
     * @return this instance
     */
    public function setSecurityGroups($securityGroups) 
    {
        if (!$this->_isNumericArray($securityGroups)) {
            $securityGroups =  array ($securityGroups);    
        }
        $this->_fields['SecurityGroups']['FieldValue'] = $securityGroups;
        return $this;
    }
  

    /**
     * Sets single or multiple values of SecurityGroups list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSecurityGroups($securityGroups1, $securityGroups2)</code>
     * 
     * @param string  $stringArgs one or more SecurityGroups
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest  instance
     */
    public function withSecurityGroups($stringArgs)
    {
        foreach (func_get_args() as $securityGroups) {
            $this->_fields['SecurityGroups']['FieldValue'][] = $securityGroups;
        }
        return $this;
    }  
      

    /**
     * Checks if SecurityGroups list is non-empty
     * 
     * @return bool true if SecurityGroups list is non-empty
     */
    public function isSetSecurityGroups()
    {
        return count ($this->_fields['SecurityGroups']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the UserData property.
     * 
     * @return string UserData
     */
    public function getUserData() 
    {
        return $this->_fields['UserData']['FieldValue'];
    }

    /**
     * Sets the value of the UserData property.
     * 
     * @param string UserData
     * @return this instance
     */
    public function setUserData($value) 
    {
        $this->_fields['UserData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the UserData and returns this instance
     * 
     * @param string $value UserData
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest instance
     */
    public function withUserData($value)
    {
        $this->setUserData($value);
        return $this;
    }


    /**
     * Checks if UserData is set
     * 
     * @return bool true if UserData  is set
     */
    public function isSetUserData()
    {
        return !is_null($this->_fields['UserData']['FieldValue']);
    }

    /**
     * Gets the value of the InstanceType property.
     * 
     * @return string InstanceType
     */
    public function getInstanceType() 
    {
        return $this->_fields['InstanceType']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceType property.
     * 
     * @param string InstanceType
     * @return this instance
     */
    public function setInstanceType($value) 
    {
        $this->_fields['InstanceType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstanceType and returns this instance
     * 
     * @param string $value InstanceType
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest instance
     */
    public function withInstanceType($value)
    {
        $this->setInstanceType($value);
        return $this;
    }


    /**
     * Checks if InstanceType is set
     * 
     * @return bool true if InstanceType  is set
     */
    public function isSetInstanceType()
    {
        return !is_null($this->_fields['InstanceType']['FieldValue']);
    }

    /**
     * Gets the value of the KernelId property.
     * 
     * @return string KernelId
     */
    public function getKernelId() 
    {
        return $this->_fields['KernelId']['FieldValue'];
    }

    /**
     * Sets the value of the KernelId property.
     * 
     * @param string KernelId
     * @return this instance
     */
    public function setKernelId($value) 
    {
        $this->_fields['KernelId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the KernelId and returns this instance
     * 
     * @param string $value KernelId
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest instance
     */
    public function withKernelId($value)
    {
        $this->setKernelId($value);
        return $this;
    }


    /**
     * Checks if KernelId is set
     * 
     * @return bool true if KernelId  is set
     */
    public function isSetKernelId()
    {
        return !is_null($this->_fields['KernelId']['FieldValue']);
    }

    /**
     * Gets the value of the RamdiskId property.
     * 
     * @return string RamdiskId
     */
    public function getRamdiskId() 
    {
        return $this->_fields['RamdiskId']['FieldValue'];
    }

    /**
     * Sets the value of the RamdiskId property.
     * 
     * @param string RamdiskId
     * @return this instance
     */
    public function setRamdiskId($value) 
    {
        $this->_fields['RamdiskId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RamdiskId and returns this instance
     * 
     * @param string $value RamdiskId
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest instance
     */
    public function withRamdiskId($value)
    {
        $this->setRamdiskId($value);
        return $this;
    }


    /**
     * Checks if RamdiskId is set
     * 
     * @return bool true if RamdiskId  is set
     */
    public function isSetRamdiskId()
    {
        return !is_null($this->_fields['RamdiskId']['FieldValue']);
    }

    /**
     * Gets the value of the BlockDeviceMappings.
     * 
     * @return array of BlockDeviceMapping BlockDeviceMappings
     */
    public function getBlockDeviceMappings() 
    {
        return $this->_fields['BlockDeviceMappings']['FieldValue'];
    }

    /**
     * Sets the value of the BlockDeviceMappings.
     * 
     * @param mixed BlockDeviceMapping or an array of BlockDeviceMapping BlockDeviceMappings
     * @return this instance
     */
    public function setBlockDeviceMappings($blockDeviceMappings) 
    {
        if (!$this->_isNumericArray($blockDeviceMappings)) {
            $blockDeviceMappings =  array ($blockDeviceMappings);    
        }
        $this->_fields['BlockDeviceMappings']['FieldValue'] = $blockDeviceMappings;
        return $this;
    }


    /**
     * Sets single or multiple values of BlockDeviceMappings list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withBlockDeviceMappings($blockDeviceMappings1, $blockDeviceMappings2)</code>
     * 
     * @param BlockDeviceMapping  $blockDeviceMappingArgs one or more BlockDeviceMappings
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest  instance
     */
    public function withBlockDeviceMappings($blockDeviceMappingArgs)
    {
        foreach (func_get_args() as $blockDeviceMappings) {
            $this->_fields['BlockDeviceMappings']['FieldValue'][] = $blockDeviceMappings;
        }
        return $this;
    }   



    /**
     * Checks if BlockDeviceMappings list is non-empty
     * 
     * @return bool true if BlockDeviceMappings list is non-empty
     */
    public function isSetBlockDeviceMappings()
    {
        return count ($this->_fields['BlockDeviceMappings']['FieldValue']) > 0;
    }




}