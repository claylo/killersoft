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
 * Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Activity: Amazon_AutoScaling_Model_Activity</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResult extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Activity: Amazon_AutoScaling_Model_Activity</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Activity' => array('FieldValue' => null, 'FieldType' => 'Amazon_AutoScaling_Model_Activity'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Activity.
     * 
     * @return Activity Activity
     */
    public function getActivity() 
    {
        return $this->_fields['Activity']['FieldValue'];
    }

    /**
     * Sets the value of the Activity.
     * 
     * @param Activity Activity
     * @return void
     */
    public function setActivity($value) 
    {
        $this->_fields['Activity']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Activity  and returns this instance
     * 
     * @param Activity $value Activity
     * @return Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResult instance
     */
    public function withActivity($value)
    {
        $this->setActivity($value);
        return $this;
    }


    /**
     * Checks if Activity  is set
     * 
     * @return bool true if Activity property is set
     */
    public function isSetActivity()
    {
        return !is_null($this->_fields['Activity']['FieldValue']);

    }




}