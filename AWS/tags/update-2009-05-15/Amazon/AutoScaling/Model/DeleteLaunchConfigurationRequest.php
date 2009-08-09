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
 * Amazon_AutoScaling_Model_DeleteLaunchConfigurationRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>LaunchConfigurationName: string</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_DeleteLaunchConfigurationRequest extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_DeleteLaunchConfigurationRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LaunchConfigurationName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'LaunchConfigurationName' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_AutoScaling_Model_DeleteLaunchConfigurationRequest instance
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




}