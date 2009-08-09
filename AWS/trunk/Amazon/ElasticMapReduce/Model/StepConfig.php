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
 * Amazon_ElasticMapReduce_Model_StepConfig
 * 
 * Properties:
 * <ul>
 * 
 * <li>Name: string</li>
 * <li>ActionOnFailure: string</li>
 * <li>HadoopJarStep: Amazon_ElasticMapReduce_Model_HadoopJarStepConfig</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_StepConfig extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_StepConfig
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Name: string</li>
     * <li>ActionOnFailure: string</li>
     * <li>HadoopJarStep: Amazon_ElasticMapReduce_Model_HadoopJarStepConfig</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ActionOnFailure' => array('FieldValue' => null, 'FieldType' => 'string'),
        'HadoopJarStep' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticMapReduce_Model_HadoopJarStepConfig'),
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
     * @return Amazon_ElasticMapReduce_Model_StepConfig instance
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
     * Gets the value of the ActionOnFailure property.
     * 
     * @return string ActionOnFailure
     */
    public function getActionOnFailure() 
    {
        return $this->_fields['ActionOnFailure']['FieldValue'];
    }

    /**
     * Sets the value of the ActionOnFailure property.
     * 
     * @param string ActionOnFailure
     * @return this instance
     */
    public function setActionOnFailure($value) 
    {
        $this->_fields['ActionOnFailure']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ActionOnFailure and returns this instance
     * 
     * @param string $value ActionOnFailure
     * @return Amazon_ElasticMapReduce_Model_StepConfig instance
     */
    public function withActionOnFailure($value)
    {
        $this->setActionOnFailure($value);
        return $this;
    }


    /**
     * Checks if ActionOnFailure is set
     * 
     * @return bool true if ActionOnFailure  is set
     */
    public function isSetActionOnFailure()
    {
        return !is_null($this->_fields['ActionOnFailure']['FieldValue']);
    }

    /**
     * Gets the value of the HadoopJarStep.
     * 
     * @return HadoopJarStepConfig HadoopJarStep
     */
    public function getHadoopJarStep() 
    {
        return $this->_fields['HadoopJarStep']['FieldValue'];
    }

    /**
     * Sets the value of the HadoopJarStep.
     * 
     * @param HadoopJarStepConfig HadoopJarStep
     * @return void
     */
    public function setHadoopJarStep($value) 
    {
        $this->_fields['HadoopJarStep']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the HadoopJarStep  and returns this instance
     * 
     * @param HadoopJarStepConfig $value HadoopJarStep
     * @return Amazon_ElasticMapReduce_Model_StepConfig instance
     */
    public function withHadoopJarStep($value)
    {
        $this->setHadoopJarStep($value);
        return $this;
    }


    /**
     * Checks if HadoopJarStep  is set
     * 
     * @return bool true if HadoopJarStep property is set
     */
    public function isSetHadoopJarStep()
    {
        return !is_null($this->_fields['HadoopJarStep']['FieldValue']);

    }




}