<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_ElasticLoadBalancing
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
 *  Amazon Elastic Load Balancing PHP5 Library
 *  Generated: Sun May 17 01:27:31 PDT 2009
 * 
 */
/**

 */

interface  Amazon_ElasticLoadBalancing_Interface 
{
    

        
    /**
     * Deregister Instances From Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}DeregisterInstancesFromLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerRequest
     * @return Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function deregisterInstancesFromLoadBalancer($request);


        
    /**
     * Configure Health Check 
  
     * @see http://docs.amazonwebservices.com/${docPath}ConfigureHealthCheck.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckRequest request
     * or Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckRequest
     * @return Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function configureHealthCheck($request);


        
    /**
     * Delete Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}DeleteLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerRequest
     * @return Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function deleteLoadBalancer($request);


        
    /**
     * Register Instances With Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}RegisterInstancesWithLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest
     * @return Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function registerInstancesWithLoadBalancer($request);


        
    /**
     * Create Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}CreateLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest
     * @return Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function createLoadBalancer($request);


        
    /**
     * Enable Availability Zones For Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}EnableAvailabilityZonesForLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerRequest
     * @return Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function enableAvailabilityZonesForLoadBalancer($request);


        
    /**
     * Disable Availability Zones For Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}DisableAvailabilityZonesForLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerRequest
     * @return Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function disableAvailabilityZonesForLoadBalancer($request);


        
    /**
     * Describe Instance Health 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeInstanceHealth.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthRequest request
     * or Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthRequest
     * @return Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResponse Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function describeInstanceHealth($request);


        
    /**
     * Describe Load Balancers 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeLoadBalancers.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersRequest request
     * or Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersRequest
     * @return Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResponse Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function describeLoadBalancers($request);

}