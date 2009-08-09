<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_CloudWatch
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-05-15
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon Cloud Watch PHP5 Library
 *  Generated: Sun May 17 01:27:23 PDT 2009
 * 
 */

/**
 *  @see Amazon_CloudWatch_Interface
 */
require_once ('Amazon/CloudWatch/Interface.php'); 

/**

 */
class  Amazon_CloudWatch_Mock implements Amazon_CloudWatch_Interface
{
    // Public API ------------------------------------------------------------//

        
    /**
     * List Metrics 
  
     * @see http://docs.amazonwebservices.com/${docPath}ListMetrics.html      
     * @param mixed $request array of parameters for Amazon_CloudWatch_Model_ListMetrics request or Amazon_CloudWatch_Model_ListMetrics object itself
     * @see Amazon_CloudWatch_Model_ListMetrics
     * @return Amazon_CloudWatch_Model_ListMetricsResponse Amazon_CloudWatch_Model_ListMetricsResponse
     *
     * @throws Amazon_CloudWatch_Exception
     */
    public function listMetrics($request) 
    {
        require_once ('Amazon/CloudWatch/Model/ListMetricsResponse.php');
        return Amazon_CloudWatch_Model_ListMetricsResponse::fromXML($this->_invoke('ListMetrics'));
    }


        
    /**
     * Get Metric Statistics 
  
     * @see http://docs.amazonwebservices.com/${docPath}GetMetricStatistics.html      
     * @param mixed $request array of parameters for Amazon_CloudWatch_Model_GetMetricStatistics request or Amazon_CloudWatch_Model_GetMetricStatistics object itself
     * @see Amazon_CloudWatch_Model_GetMetricStatistics
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsResponse Amazon_CloudWatch_Model_GetMetricStatisticsResponse
     *
     * @throws Amazon_CloudWatch_Exception
     */
    public function getMetricStatistics($request) 
    {
        require_once ('Amazon/CloudWatch/Model/GetMetricStatisticsResponse.php');
        return Amazon_CloudWatch_Model_GetMetricStatisticsResponse::fromXML($this->_invoke('GetMetricStatistics'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents('Amazon/CloudWatch/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}