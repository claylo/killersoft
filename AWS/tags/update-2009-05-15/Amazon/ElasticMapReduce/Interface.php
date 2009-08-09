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

 */

interface  Amazon_ElasticMapReduce_Interface 
{
    

        
    /**
     * Add Job Flow Steps 
  
     * @see http://docs.amazonwebservices.com/${docPath}AddJobFlowSteps.html      
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest request
     * or Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest object itself
     * @see Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest
     * @return Amazon_ElasticMapReduce_Model_AddJobFlowStepsResponse Amazon_ElasticMapReduce_Model_AddJobFlowStepsResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function addJobFlowSteps($request);


        
    /**
     * Terminate Job Flows 
  
     * @see http://docs.amazonwebservices.com/${docPath}TerminateJobFlows.html      
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_TerminateJobFlowsRequest request
     * or Amazon_ElasticMapReduce_Model_TerminateJobFlowsRequest object itself
     * @see Amazon_ElasticMapReduce_Model_TerminateJobFlowsRequest
     * @return Amazon_ElasticMapReduce_Model_TerminateJobFlowsResponse Amazon_ElasticMapReduce_Model_TerminateJobFlowsResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function terminateJobFlows($request);


        
    /**
     * Describe Job Flows 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeJobFlows.html      
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest request
     * or Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest object itself
     * @see Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest
     * @return Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function describeJobFlows($request);


        
    /**
     * Run Job Flow 
  
     * @see http://docs.amazonwebservices.com/${docPath}RunJobFlow.html      
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_RunJobFlowRequest request
     * or Amazon_ElasticMapReduce_Model_RunJobFlowRequest object itself
     * @see Amazon_ElasticMapReduce_Model_RunJobFlowRequest
     * @return Amazon_ElasticMapReduce_Model_RunJobFlowResponse Amazon_ElasticMapReduce_Model_RunJobFlowResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function runJobFlow($request);

}