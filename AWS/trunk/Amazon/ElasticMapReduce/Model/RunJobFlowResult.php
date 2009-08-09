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
 * Amazon_ElasticMapReduce_Model_RunJobFlowResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>JobFlowId: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_RunJobFlowResult extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_RunJobFlowResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>JobFlowId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'JobFlowId' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_ElasticMapReduce_Model_RunJobFlowResult instance
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




}