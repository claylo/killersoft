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
 * Amazon_ElasticMapReduce_Model_TerminateJobFlowsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>JobFlowIds: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_TerminateJobFlowsRequest extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_TerminateJobFlowsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>JobFlowIds: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'JobFlowIds' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
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
     * @return Amazon_ElasticMapReduce_Model_TerminateJobFlowsRequest  instance
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




}