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

 */

interface  Amazon_CloudWatch_Interface 
{
    

        
    /**
     * List Metrics 
  
     * @see http://docs.amazonwebservices.com/${docPath}ListMetrics.html      
     * @param mixed $request array of parameters for Amazon_CloudWatch_Model_ListMetricsRequest request
     * or Amazon_CloudWatch_Model_ListMetricsRequest object itself
     * @see Amazon_CloudWatch_Model_ListMetricsRequest
     * @return Amazon_CloudWatch_Model_ListMetricsResponse Amazon_CloudWatch_Model_ListMetricsResponse
     *
     * @throws Amazon_CloudWatch_Exception
     */
    public function listMetrics($request);


        
    /**
     * Get Metric Statistics 
  
     * @see http://docs.amazonwebservices.com/${docPath}GetMetricStatistics.html      
     * @param mixed $request array of parameters for Amazon_CloudWatch_Model_GetMetricStatisticsRequest request
     * or Amazon_CloudWatch_Model_GetMetricStatisticsRequest object itself
     * @see Amazon_CloudWatch_Model_GetMetricStatisticsRequest
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsResponse Amazon_CloudWatch_Model_GetMetricStatisticsResponse
     *
     * @throws Amazon_CloudWatch_Exception
     */
    public function getMetricStatistics($request);

}