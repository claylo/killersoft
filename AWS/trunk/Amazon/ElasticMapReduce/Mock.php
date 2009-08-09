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
 *  @see Amazon_ElasticMapReduce_Interface
 */
require_once ('Amazon/ElasticMapReduce/Interface.php'); 

/**

 */
class  Amazon_ElasticMapReduce_Mock implements Amazon_ElasticMapReduce_Interface
{
    // Public API ------------------------------------------------------------//

        
    /**
     * Add Job Flow Steps 
  
     * @see http://docs.amazonwebservices.com/${docPath}AddJobFlowSteps.html      
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_AddJobFlowSteps request or Amazon_ElasticMapReduce_Model_AddJobFlowSteps object itself
     * @see Amazon_ElasticMapReduce_Model_AddJobFlowSteps
     * @return Amazon_ElasticMapReduce_Model_AddJobFlowStepsResponse Amazon_ElasticMapReduce_Model_AddJobFlowStepsResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function addJobFlowSteps($request) 
    {
        require_once ('Amazon/ElasticMapReduce/Model/AddJobFlowStepsResponse.php');
        return Amazon_ElasticMapReduce_Model_AddJobFlowStepsResponse::fromXML($this->_invoke('AddJobFlowSteps'));
    }


        
    /**
     * Terminate Job Flows 
  
     * @see http://docs.amazonwebservices.com/${docPath}TerminateJobFlows.html      
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_TerminateJobFlows request or Amazon_ElasticMapReduce_Model_TerminateJobFlows object itself
     * @see Amazon_ElasticMapReduce_Model_TerminateJobFlows
     * @return Amazon_ElasticMapReduce_Model_TerminateJobFlowsResponse Amazon_ElasticMapReduce_Model_TerminateJobFlowsResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function terminateJobFlows($request) 
    {
        require_once ('Amazon/ElasticMapReduce/Model/TerminateJobFlowsResponse.php');
        return Amazon_ElasticMapReduce_Model_TerminateJobFlowsResponse::fromXML($this->_invoke('TerminateJobFlows'));
    }


        
    /**
     * Describe Job Flows 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeJobFlows.html      
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_DescribeJobFlows request or Amazon_ElasticMapReduce_Model_DescribeJobFlows object itself
     * @see Amazon_ElasticMapReduce_Model_DescribeJobFlows
     * @return Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function describeJobFlows($request) 
    {
        require_once ('Amazon/ElasticMapReduce/Model/DescribeJobFlowsResponse.php');
        return Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse::fromXML($this->_invoke('DescribeJobFlows'));
    }


        
    /**
     * Run Job Flow 
  
     * @see http://docs.amazonwebservices.com/${docPath}RunJobFlow.html      
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_RunJobFlow request or Amazon_ElasticMapReduce_Model_RunJobFlow object itself
     * @see Amazon_ElasticMapReduce_Model_RunJobFlow
     * @return Amazon_ElasticMapReduce_Model_RunJobFlowResponse Amazon_ElasticMapReduce_Model_RunJobFlowResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function runJobFlow($request) 
    {
        require_once ('Amazon/ElasticMapReduce/Model/RunJobFlowResponse.php');
        return Amazon_ElasticMapReduce_Model_RunJobFlowResponse::fromXML($this->_invoke('RunJobFlow'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents('Amazon/ElasticMapReduce/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}