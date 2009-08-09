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
 * Amazon_ElasticMapReduce_Model_StepDetail
 * 
 * Properties:
 * <ul>
 * 
 * <li>StepConfig: Amazon_ElasticMapReduce_Model_StepConfig</li>
 * <li>ExecutionStatusDetail: Amazon_ElasticMapReduce_Model_StepExecutionStatusDetail</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_StepDetail extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_StepDetail
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>StepConfig: Amazon_ElasticMapReduce_Model_StepConfig</li>
     * <li>ExecutionStatusDetail: Amazon_ElasticMapReduce_Model_StepExecutionStatusDetail</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'StepConfig' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticMapReduce_Model_StepConfig'),
        'ExecutionStatusDetail' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticMapReduce_Model_StepExecutionStatusDetail'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the StepConfig.
     * 
     * @return StepConfig StepConfig
     */
    public function getStepConfig() 
    {
        return $this->_fields['StepConfig']['FieldValue'];
    }

    /**
     * Sets the value of the StepConfig.
     * 
     * @param StepConfig StepConfig
     * @return void
     */
    public function setStepConfig($value) 
    {
        $this->_fields['StepConfig']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the StepConfig  and returns this instance
     * 
     * @param StepConfig $value StepConfig
     * @return Amazon_ElasticMapReduce_Model_StepDetail instance
     */
    public function withStepConfig($value)
    {
        $this->setStepConfig($value);
        return $this;
    }


    /**
     * Checks if StepConfig  is set
     * 
     * @return bool true if StepConfig property is set
     */
    public function isSetStepConfig()
    {
        return !is_null($this->_fields['StepConfig']['FieldValue']);

    }

    /**
     * Gets the value of the ExecutionStatusDetail.
     * 
     * @return StepExecutionStatusDetail ExecutionStatusDetail
     */
    public function getExecutionStatusDetail() 
    {
        return $this->_fields['ExecutionStatusDetail']['FieldValue'];
    }

    /**
     * Sets the value of the ExecutionStatusDetail.
     * 
     * @param StepExecutionStatusDetail ExecutionStatusDetail
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
     * @param StepExecutionStatusDetail $value ExecutionStatusDetail
     * @return Amazon_ElasticMapReduce_Model_StepDetail instance
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




}