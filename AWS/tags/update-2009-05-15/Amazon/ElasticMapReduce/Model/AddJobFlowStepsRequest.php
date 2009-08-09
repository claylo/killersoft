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
 * Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>JobFlowId: string</li>
 * <li>Steps: Amazon_ElasticMapReduce_Model_StepConfig</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>JobFlowId: string</li>
     * <li>Steps: Amazon_ElasticMapReduce_Model_StepConfig</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'JobFlowId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Steps' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticMapReduce_Model_StepConfig')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the JobFlowId property.
     * 
     * @return string JobFlowId
     */
    public function getJobFlowId() 
    {
        return $this->_fields['JobFlowId']['FieldValue'];
    }

    /**
     * Sets the value of the JobFlowId property.
     * 
     * @param string JobFlowId
     * @return this instance
     */
    public function setJobFlowId($value) 
    {
        $this->_fields['JobFlowId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the JobFlowId and returns this instance
     * 
     * @param string $value JobFlowId
     * @return Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest instance
     */
    public function withJobFlowId($value)
    {
        $this->setJobFlowId($value);
        return $this;
    }


    /**
     * Checks if JobFlowId is set
     * 
     * @return bool true if JobFlowId  is set
     */
    public function isSetJobFlowId()
    {
        return !is_null($this->_fields['JobFlowId']['FieldValue']);
    }

    /**
     * Gets the value of the Steps.
     * 
     * @return array of StepConfig Steps
     */
    public function getSteps() 
    {
        return $this->_fields['Steps']['FieldValue'];
    }

    /**
     * Sets the value of the Steps.
     * 
     * @param mixed StepConfig or an array of StepConfig Steps
     * @return this instance
     */
    public function setSteps($steps) 
    {
        if (!$this->_isNumericArray($steps)) {
            $steps =  array ($steps);    
        }
        $this->_fields['Steps']['FieldValue'] = $steps;
        return $this;
    }


    /**
     * Sets single or multiple values of Steps list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSteps($steps1, $steps2)</code>
     * 
     * @param StepConfig  $stepConfigArgs one or more Steps
     * @return Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest  instance
     */
    public function withSteps($stepConfigArgs)
    {
        foreach (func_get_args() as $steps) {
            $this->_fields['Steps']['FieldValue'][] = $steps;
        }
        return $this;
    }   



    /**
     * Checks if Steps list is non-empty
     * 
     * @return bool true if Steps list is non-empty
     */
    public function isSetSteps()
    {
        return count ($this->_fields['Steps']['FieldValue']) > 0;
    }




}