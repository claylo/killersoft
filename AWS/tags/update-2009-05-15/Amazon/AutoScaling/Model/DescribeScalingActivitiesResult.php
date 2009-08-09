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
 * Amazon_AutoScaling_Model_DescribeScalingActivitiesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Activities: Amazon_AutoScaling_Model_Activity</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_DescribeScalingActivitiesResult extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_DescribeScalingActivitiesResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Activities: Amazon_AutoScaling_Model_Activity</li>
     * <li>NextToken: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Activities' => array('FieldValue' => array(), 'FieldType' => array('Amazon_AutoScaling_Model_Activity')),
        'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Activities.
     * 
     * @return array of Activity Activities
     */
    public function getActivities() 
    {
        return $this->_fields['Activities']['FieldValue'];
    }

    /**
     * Sets the value of the Activities.
     * 
     * @param mixed Activity or an array of Activity Activities
     * @return this instance
     */
    public function setActivities($activities) 
    {
        if (!$this->_isNumericArray($activities)) {
            $activities =  array ($activities);    
        }
        $this->_fields['Activities']['FieldValue'] = $activities;
        return $this;
    }


    /**
     * Sets single or multiple values of Activities list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withActivities($activities1, $activities2)</code>
     * 
     * @param Activity  $activityArgs one or more Activities
     * @return Amazon_AutoScaling_Model_DescribeScalingActivitiesResult  instance
     */
    public function withActivities($activityArgs)
    {
        foreach (func_get_args() as $activities) {
            $this->_fields['Activities']['FieldValue'][] = $activities;
        }
        return $this;
    }   



    /**
     * Checks if Activities list is non-empty
     * 
     * @return bool true if Activities list is non-empty
     */
    public function isSetActivities()
    {
        return count ($this->_fields['Activities']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the NextToken property.
     * 
     * @return string NextToken
     */
    public function getNextToken() 
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Sets the value of the NextToken property.
     * 
     * @param string NextToken
     * @return this instance
     */
    public function setNextToken($value) 
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the NextToken and returns this instance
     * 
     * @param string $value NextToken
     * @return Amazon_AutoScaling_Model_DescribeScalingActivitiesResult instance
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }


    /**
     * Checks if NextToken is set
     * 
     * @return bool true if NextToken  is set
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }




}