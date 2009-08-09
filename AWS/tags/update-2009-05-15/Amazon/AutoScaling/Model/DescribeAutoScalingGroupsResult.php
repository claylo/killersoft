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
 * Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>AutoScalingGroups: Amazon_AutoScaling_Model_AutoScalingGroup</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResult extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>AutoScalingGroups: Amazon_AutoScaling_Model_AutoScalingGroup</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'AutoScalingGroups' => array('FieldValue' => array(), 'FieldType' => array('Amazon_AutoScaling_Model_AutoScalingGroup')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the AutoScalingGroups.
     * 
     * @return array of AutoScalingGroup AutoScalingGroups
     */
    public function getAutoScalingGroups() 
    {
        return $this->_fields['AutoScalingGroups']['FieldValue'];
    }

    /**
     * Sets the value of the AutoScalingGroups.
     * 
     * @param mixed AutoScalingGroup or an array of AutoScalingGroup AutoScalingGroups
     * @return this instance
     */
    public function setAutoScalingGroups($autoScalingGroups) 
    {
        if (!$this->_isNumericArray($autoScalingGroups)) {
            $autoScalingGroups =  array ($autoScalingGroups);    
        }
        $this->_fields['AutoScalingGroups']['FieldValue'] = $autoScalingGroups;
        return $this;
    }


    /**
     * Sets single or multiple values of AutoScalingGroups list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withAutoScalingGroups($autoScalingGroups1, $autoScalingGroups2)</code>
     * 
     * @param AutoScalingGroup  $autoScalingGroupArgs one or more AutoScalingGroups
     * @return Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResult  instance
     */
    public function withAutoScalingGroups($autoScalingGroupArgs)
    {
        foreach (func_get_args() as $autoScalingGroups) {
            $this->_fields['AutoScalingGroups']['FieldValue'][] = $autoScalingGroups;
        }
        return $this;
    }   



    /**
     * Checks if AutoScalingGroups list is non-empty
     * 
     * @return bool true if AutoScalingGroups list is non-empty
     */
    public function isSetAutoScalingGroups()
    {
        return count ($this->_fields['AutoScalingGroups']['FieldValue']) > 0;
    }




}