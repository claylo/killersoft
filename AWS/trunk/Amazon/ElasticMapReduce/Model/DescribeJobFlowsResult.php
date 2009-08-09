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
 * Amazon_ElasticMapReduce_Model_DescribeJobFlowsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>JobFlows: Amazon_ElasticMapReduce_Model_JobFlowDetail</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_DescribeJobFlowsResult extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_DescribeJobFlowsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>JobFlows: Amazon_ElasticMapReduce_Model_JobFlowDetail</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'JobFlows' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticMapReduce_Model_JobFlowDetail')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the JobFlows.
     * 
     * @return array of JobFlowDetail JobFlows
     */
    public function getJobFlows() 
    {
        return $this->_fields['JobFlows']['FieldValue'];
    }

    /**
     * Sets the value of the JobFlows.
     * 
     * @param mixed JobFlowDetail or an array of JobFlowDetail JobFlows
     * @return this instance
     */
    public function setJobFlows($jobFlows) 
    {
        if (!$this->_isNumericArray($jobFlows)) {
            $jobFlows =  array ($jobFlows);    
        }
        $this->_fields['JobFlows']['FieldValue'] = $jobFlows;
        return $this;
    }


    /**
     * Sets single or multiple values of JobFlows list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withJobFlows($jobFlows1, $jobFlows2)</code>
     * 
     * @param JobFlowDetail  $jobFlowDetailArgs one or more JobFlows
     * @return Amazon_ElasticMapReduce_Model_DescribeJobFlowsResult  instance
     */
    public function withJobFlows($jobFlowDetailArgs)
    {
        foreach (func_get_args() as $jobFlows) {
            $this->_fields['JobFlows']['FieldValue'][] = $jobFlows;
        }
        return $this;
    }   



    /**
     * Checks if JobFlows list is non-empty
     * 
     * @return bool true if JobFlows list is non-empty
     */
    public function isSetJobFlows()
    {
        return count ($this->_fields['JobFlows']['FieldValue']) > 0;
    }




}