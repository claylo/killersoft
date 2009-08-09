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
 * Amazon_ElasticMapReduce_Model_JobFlowDetail
 * 
 * Properties:
 * <ul>
 * 
 * <li>JobFlowId: string</li>
 * <li>Name: string</li>
 * <li>LogUri: string</li>
 * <li>ExecutionStatusDetail: Amazon_ElasticMapReduce_Model_JobFlowExecutionStatusDetail</li>
 * <li>Instances: Amazon_ElasticMapReduce_Model_JobFlowInstancesDetail</li>
 * <li>Steps: Amazon_ElasticMapReduce_Model_StepDetail</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_JobFlowDetail extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_JobFlowDetail
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>JobFlowId: string</li>
     * <li>Name: string</li>
     * <li>LogUri: string</li>
     * <li>ExecutionStatusDetail: Amazon_ElasticMapReduce_Model_JobFlowExecutionStatusDetail</li>
     * <li>Instances: Amazon_ElasticMapReduce_Model_JobFlowInstancesDetail</li>
     * <li>Steps: Amazon_ElasticMapReduce_Model_StepDetail</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'JobFlowId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LogUri' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ExecutionStatusDetail' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticMapReduce_Model_JobFlowExecutionStatusDetail'),
        'Instances' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticMapReduce_Model_JobFlowInstancesDetail'),
        'Steps' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticMapReduce_Model_StepDetail')),
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
     * @return Amazon_ElasticMapReduce_Model_JobFlowDetail instance
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
     * Gets the value of the Name property.
     * 
     * @return string Name
     */
    public function getName() 
    {
        return $this->_fields['Name']['FieldValue'];
    }

    /**
     * Sets the value of the Name property.
     * 
     * @param string Name
     * @return this instance
     */
    public function setName($value) 
    {
        $this->_fields['Name']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Name and returns this instance
     * 
     * @param string $value Name
     * @return Amazon_ElasticMapReduce_Model_JobFlowDetail instance
     */
    public function withName($value)
    {
        $this->setName($value);
        return $this;
    }


    /**
     * Checks if Name is set
     * 
     * @return bool true if Name  is set
     */
    public function isSetName()
    {
        return !is_null($this->_fields['Name']['FieldValue']);
    }

    /**
     * Gets the value of the LogUri property.
     * 
     * @return string LogUri
     */
    public function getLogUri() 
    {
        return $this->_fields['LogUri']['FieldValue'];
    }

    /**
     * Sets the value of the LogUri property.
     * 
     * @param string LogUri
     * @return this instance
     */
    public function setLogUri($value) 
    {
        $this->_fields['LogUri']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the LogUri and returns this instance
     * 
     * @param string $value LogUri
     * @return Amazon_ElasticMapReduce_Model_JobFlowDetail instance
     */
    public function withLogUri($value)
    {
        $this->setLogUri($value);
        return $this;
    }


    /**
     * Checks if LogUri is set
     * 
     * @return bool true if LogUri  is set
     */
    public function isSetLogUri()
    {
        return !is_null($this->_fields['LogUri']['FieldValue']);
    }

    /**
     * Gets the value of the ExecutionStatusDetail.
     * 
     * @return JobFlowExecutionStatusDetail ExecutionStatusDetail
     */
    public function getExecutionStatusDetail() 
    {
        return $this->_fields['ExecutionStatusDetail']['FieldValue'];
    }

    /**
     * Sets the value of the ExecutionStatusDetail.
     * 
     * @param JobFlowExecutionStatusDetail ExecutionStatusDetail
     * @return void
     */
    public function setExecutionStatusDetail($value) 
    {
        $this->_fields['ExecutionStatusDetail']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ExecutionStatusDetail  and returns this instance
     * 
     * @param JobFlowExecutionStatusDetail $value ExecutionStatusDetail
     * @return Amazon_ElasticMapReduce_Model_JobFlowDetail instance
     */
    public function withExecutionStatusDetail($value)
    {
        $this->setExecutionStatusDetail($value);
        return $this;
    }


    /**
     * Checks if ExecutionStatusDetail  is set
     * 
     * @return bool true if ExecutionStatusDetail property is set
     */
    public function isSetExecutionStatusDetail()
    {
        return !is_null($this->_fields['ExecutionStatusDetail']['FieldValue']);

    }

    /**
     * Gets the value of the Instances.
     * 
     * @return JobFlowInstancesDetail Instances
     */
    public function getInstances() 
    {
        return $this->_fields['Instances']['FieldValue'];
    }

    /**
     * Sets the value of the Instances.
     * 
     * @param JobFlowInstancesDetail Instances
     * @return void
     */
    public function setInstances($value) 
    {
        $this->_fields['Instances']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Instances  and returns this instance
     * 
     * @param JobFlowInstancesDetail $value Instances
     * @return Amazon_ElasticMapReduce_Model_JobFlowDetail instance
     */
    public function withInstances($value)
    {
        $this->setInstances($value);
        return $this;
    }


    /**
     * Checks if Instances  is set
     * 
     * @return bool true if Instances property is set
     */
    public function isSetInstances()
    {
        return !is_null($this->_fields['Instances']['FieldValue']);

    }

    /**
     * Gets the value of the Steps.
     * 
     * @return array of StepDetail Steps
     */
    public function getSteps() 
    {
        return $this->_fields['Steps']['FieldValue'];
    }

    /**
     * Sets the value of the Steps.
     * 
     * @param mixed StepDetail or an array of StepDetail Steps
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
     * @param StepDetail  $stepDetailArgs one or more Steps
     * @return Amazon_ElasticMapReduce_Model_JobFlowDetail  instance
     */
    public function withSteps($stepDetailArgs)
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