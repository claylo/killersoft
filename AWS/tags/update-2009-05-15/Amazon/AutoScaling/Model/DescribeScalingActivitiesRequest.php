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
 * Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>ActivityIds: string</li>
 * <li>AutoScalingGroupName: string</li>
 * <li>MaxRecords: int</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ActivityIds: string</li>
     * <li>AutoScalingGroupName: string</li>
     * <li>MaxRecords: int</li>
     * <li>NextToken: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ActivityIds' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'AutoScalingGroupName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MaxRecords' => array('FieldValue' => null, 'FieldType' => 'int'),
        'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ActivityIds .
     * 
     * @return array of string ActivityIds
     */
    public function getActivityIds() 
    {
        return $this->_fields['ActivityIds']['FieldValue'];
    }

    /**
     * Sets the value of the ActivityIds.
     * 
     * @param string or an array of string ActivityIds
     * @return this instance
     */
    public function setActivityIds($activityIds) 
    {
        if (!$this->_isNumericArray($activityIds)) {
            $activityIds =  array ($activityIds);    
        }
        $this->_fields['ActivityIds']['FieldValue'] = $activityIds;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ActivityIds list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withActivityIds($activityIds1, $activityIds2)</code>
     * 
     * @param string  $stringArgs one or more ActivityIds
     * @return Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest  instance
     */
    public function withActivityIds($stringArgs)
    {
        foreach (func_get_args() as $activityIds) {
            $this->_fields['ActivityIds']['FieldValue'][] = $activityIds;
        }
        return $this;
    }  
      

    /**
     * Checks if ActivityIds list is non-empty
     * 
     * @return bool true if ActivityIds list is non-empty
     */
    public function isSetActivityIds()
    {
        return count ($this->_fields['ActivityIds']['FieldValue']) > 0;
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
     * @return Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest instance
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
     * Gets the value of the MaxRecords property.
     * 
     * @return int MaxRecords
     */
    public function getMaxRecords() 
    {
        return $this->_fields['MaxRecords']['FieldValue'];
    }

    /**
     * Sets the value of the MaxRecords property.
     * 
     * @param int MaxRecords
     * @return this instance
     */
    public function setMaxRecords($value) 
    {
        $this->_fields['MaxRecords']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MaxRecords and returns this instance
     * 
     * @param int $value MaxRecords
     * @return Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest instance
     */
    public function withMaxRecords($value)
    {
        $this->setMaxRecords($value);
        return $this;
    }


    /**
     * Checks if MaxRecords is set
     * 
     * @return bool true if MaxRecords  is set
     */
    public function isSetMaxRecords()
    {
        return !is_null($this->_fields['MaxRecords']['FieldValue']);
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
     * @return Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest instance
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