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
 * Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>AutoScalingGroupNames: string</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>AutoScalingGroupNames: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'AutoScalingGroupNames' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the AutoScalingGroupNames .
     * 
     * @return array of string AutoScalingGroupNames
     */
    public function getAutoScalingGroupNames() 
    {
        return $this->_fields['AutoScalingGroupNames']['FieldValue'];
    }

    /**
     * Sets the value of the AutoScalingGroupNames.
     * 
     * @param string or an array of string AutoScalingGroupNames
     * @return this instance
     */
    public function setAutoScalingGroupNames($autoScalingGroupNames) 
    {
        if (!$this->_isNumericArray($autoScalingGroupNames)) {
            $autoScalingGroupNames =  array ($autoScalingGroupNames);    
        }
        $this->_fields['AutoScalingGroupNames']['FieldValue'] = $autoScalingGroupNames;
        return $this;
    }
  

    /**
     * Sets single or multiple values of AutoScalingGroupNames list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withAutoScalingGroupNames($autoScalingGroupNames1, $autoScalingGroupNames2)</code>
     * 
     * @param string  $stringArgs one or more AutoScalingGroupNames
     * @return Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest  instance
     */
    public function withAutoScalingGroupNames($stringArgs)
    {
        foreach (func_get_args() as $autoScalingGroupNames) {
            $this->_fields['AutoScalingGroupNames']['FieldValue'][] = $autoScalingGroupNames;
        }
        return $this;
    }  
      

    /**
     * Checks if AutoScalingGroupNames list is non-empty
     * 
     * @return bool true if AutoScalingGroupNames list is non-empty
     */
    public function isSetAutoScalingGroupNames()
    {
        return count ($this->_fields['AutoScalingGroupNames']['FieldValue']) > 0;
    }




}