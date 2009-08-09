<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_ElasticMapReduce
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-03-31
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon Elastic Map Reduce PHP5 Library
 *  Generated: Tue Apr 21 15:38:55 PDT 2009
 * 
 */

/**
 *  @see Amazon_ElasticMapReduce_Model
 */
require_once ('Amazon/ElasticMapReduce/Model.php');  

    

/**
 * Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>CreatedAfter: string</li>
 * <li>CreatedBefore: string</li>
 * <li>JobFlowIds: string</li>
 * <li>JobFlowStates: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CreatedAfter: string</li>
     * <li>CreatedBefore: string</li>
     * <li>JobFlowIds: string</li>
     * <li>JobFlowStates: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'CreatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CreatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
        'JobFlowIds' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'JobFlowStates' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the CreatedAfter property.
     * 
     * @return string CreatedAfter
     */
    public function getCreatedAfter() 
    {
        return $this->_fields['CreatedAfter']['FieldValue'];
    }

    /**
     * Sets the value of the CreatedAfter property.
     * 
     * @param string CreatedAfter
     * @return this instance
     */
    public function setCreatedAfter($value) 
    {
        $this->_fields['CreatedAfter']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CreatedAfter and returns this instance
     * 
     * @param string $value CreatedAfter
     * @return Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest instance
     */
    public function withCreatedAfter($value)
    {
        $this->setCreatedAfter($value);
        return $this;
    }


    /**
     * Checks if CreatedAfter is set
     * 
     * @return bool true if CreatedAfter  is set
     */
    public function isSetCreatedAfter()
    {
        return !is_null($this->_fields['CreatedAfter']['FieldValue']);
    }

    /**
     * Gets the value of the CreatedBefore property.
     * 
     * @return string CreatedBefore
     */
    public function getCreatedBefore() 
    {
        return $this->_fields['CreatedBefore']['FieldValue'];
    }

    /**
     * Sets the value of the CreatedBefore property.
     * 
     * @param string CreatedBefore
     * @return this instance
     */
    public function setCreatedBefore($value) 
    {
        $this->_fields['CreatedBefore']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CreatedBefore and returns this instance
     * 
     * @param string $value CreatedBefore
     * @return Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest instance
     */
    public function withCreatedBefore($value)
    {
        $this->setCreatedBefore($value);
        return $this;
    }


    /**
     * Checks if CreatedBefore is set
     * 
     * @return bool true if CreatedBefore  is set
     */
    public function isSetCreatedBefore()
    {
        return !is_null($this->_fields['CreatedBefore']['FieldValue']);
    }

    /**
     * Gets the value of the JobFlowIds .
     * 
     * @return array of string JobFlowIds
     */
    public function getJobFlowIds() 
    {
        return $this->_fields['JobFlowIds']['FieldValue'];
    }

    /**
     * Sets the value of the JobFlowIds.
     * 
     * @param string or an array of string JobFlowIds
     * @return this instance
     */
    public function setJobFlowIds($jobFlowIds) 
    {
        if (!$this->_isNumericArray($jobFlowIds)) {
            $jobFlowIds =  array ($jobFlowIds);    
        }
        $this->_fields['JobFlowIds']['FieldValue'] = $jobFlowIds;
        return $this;
    }
  

    /**
     * Sets single or multiple values of JobFlowIds list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withJobFlowIds($jobFlowIds1, $jobFlowIds2)</code>
     * 
     * @param string  $stringArgs one or more JobFlowIds
     * @return Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest  instance
     */
    public function withJobFlowIds($stringArgs)
    {
        foreach (func_get_args() as $jobFlowIds) {
            $this->_fields['JobFlowIds']['FieldValue'][] = $jobFlowIds;
        }
        return $this;
    }  
      

    /**
     * Checks if JobFlowIds list is non-empty
     * 
     * @return bool true if JobFlowIds list is non-empty
     */
    public function isSetJobFlowIds()
    {
        return count ($this->_fields['JobFlowIds']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the JobFlowStates .
     * 
     * @return array of string JobFlowStates
     */
    public function getJobFlowStates() 
    {
        return $this->_fields['JobFlowStates']['FieldValue'];
    }

    /**
     * Sets the value of the JobFlowStates.
     * 
     * @param string or an array of string JobFlowStates
     * @return this instance
     */
    public function setJobFlowStates($jobFlowStates) 
    {
        if (!$this->_isNumericArray($jobFlowStates)) {
            $jobFlowStates =  array ($jobFlowStates);    
        }
        $this->_fields['JobFlowStates']['FieldValue'] = $jobFlowStates;
        return $this;
    }
  

    /**
     * Sets single or multiple values of JobFlowStates list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withJobFlowStates($jobFlowStates1, $jobFlowStates2)</code>
     * 
     * @param string  $stringArgs one or more JobFlowStates
     * @return Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest  instance
     */
    public function withJobFlowStates($stringArgs)
    {
        foreach (func_get_args() as $jobFlowStates) {
            $this->_fields['JobFlowStates']['FieldValue'][] = $jobFlowStates;
        }
        return $this;
    }  
      

    /**
     * Checks if JobFlowStates list is non-empty
     * 
     * @return bool true if JobFlowStates list is non-empty
     */
    public function isSetJobFlowStates()
    {
        return count ($this->_fields['JobFlowStates']['FieldValue']) > 0;
    }




}