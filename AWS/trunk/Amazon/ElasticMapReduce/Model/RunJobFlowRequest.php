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
 * Amazon_ElasticMapReduce_Model_RunJobFlowRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>Name: string</li>
 * <li>LogUri: string</li>
 * <li>Instances: Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig</li>
 * <li>Steps: Amazon_ElasticMapReduce_Model_StepConfig</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_RunJobFlowRequest extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_RunJobFlowRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Name: string</li>
     * <li>LogUri: string</li>
     * <li>Instances: Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig</li>
     * <li>Steps: Amazon_ElasticMapReduce_Model_StepConfig</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LogUri' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Instances' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig'),
        'Steps' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticMapReduce_Model_StepConfig')),
        );
        parent::__construct($data);
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
     * @return Amazon_ElasticMapReduce_Model_RunJobFlowRequest instance
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
     * @return Amazon_ElasticMapReduce_Model_RunJobFlowRequest instance
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
     * Gets the value of the Instances.
     * 
     * @return JobFlowInstancesConfig Instances
     */
    public function getInstances() 
    {
        return $this->_fields['Instances']['FieldValue'];
    }

    /**
     * Sets the value of the Instances.
     * 
     * @param JobFlowInstancesConfig Instances
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
     * @param JobFlowInstancesConfig $value Instances
     * @return Amazon_ElasticMapReduce_Model_RunJobFlowRequest instance
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
     * @return Amazon_ElasticMapReduce_Model_RunJobFlowRequest  instance
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