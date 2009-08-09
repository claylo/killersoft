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
 *  @see Amazon_ElasticLoadBalancing_Interface
 */
require_once ('Amazon/ElasticLoadBalancing/Interface.php'); 

/**

 */
class  Amazon_ElasticLoadBalancing_Mock implements Amazon_ElasticLoadBalancing_Interface
{
    // Public API ------------------------------------------------------------//

        
    /**
     * Deregister Instances From Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}DeregisterInstancesFromLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancer request or Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancer object itself
     * @see Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function deregisterInstancesFromLoadBalancer($request) 
    {
        require_once ('Amazon/ElasticLoadBalancing/Model/DeregisterInstancesFromLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResponse::fromXML($this->_invoke('DeregisterInstancesFromLoadBalancer'));
    }


        
    /**
     * Configure Health Check 
  
     * @see http://docs.amazonwebservices.com/${docPath}ConfigureHealthCheck.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheck request or Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheck object itself
     * @see Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheck
     * @return Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function configureHealthCheck($request) 
    {
        require_once ('Amazon/ElasticLoadBalancing/Model/ConfigureHealthCheckResponse.php');
        return Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse::fromXML($this->_invoke('ConfigureHealthCheck'));
    }


        
    /**
     * Delete Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}DeleteLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancer request or Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancer object itself
     * @see Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function deleteLoadBalancer($request) 
    {
        require_once ('Amazon/ElasticLoadBalancing/Model/DeleteLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse::fromXML($this->_invoke('DeleteLoadBalancer'));
    }


        
    /**
     * Register Instances With Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}RegisterInstancesWithLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancer request or Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancer object itself
     * @see Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function registerInstancesWithLoadBalancer($request) 
    {
        require_once ('Amazon/ElasticLoadBalancing/Model/RegisterInstancesWithLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerResponse::fromXML($this->_invoke('RegisterInstancesWithLoadBalancer'));
    }


        
    /**
     * Create Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}CreateLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_CreateLoadBalancer request or Amazon_ElasticLoadBalancing_Model_CreateLoadBalancer object itself
     * @see Amazon_ElasticLoadBalancing_Model_CreateLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function createLoadBalancer($request) 
    {
        require_once ('Amazon/ElasticLoadBalancing/Model/CreateLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResponse::fromXML($this->_invoke('CreateLoadBalancer'));
    }


        
    /**
     * Enable Availability Zones For Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}EnableAvailabilityZonesForLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancer request or Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancer object itself
     * @see Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function enableAvailabilityZonesForLoadBalancer($request) 
    {
        require_once ('Amazon/ElasticLoadBalancing/Model/EnableAvailabilityZonesForLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse::fromXML($this->_invoke('EnableAvailabilityZonesForLoadBalancer'));
    }


        
    /**
     * Disable Availability Zones For Load Balancer 
  
     * @see http://docs.amazonwebservices.com/${docPath}DisableAvailabilityZonesForLoadBalancer.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancer request or Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancer object itself
     * @see Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function disableAvailabilityZonesForLoadBalancer($request) 
    {
        require_once ('Amazon/ElasticLoadBalancing/Model/DisableAvailabilityZonesForLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResponse::fromXML($this->_invoke('DisableAvailabilityZonesForLoadBalancer'));
    }


        
    /**
     * Describe Instance Health 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeInstanceHealth.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealth request or Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealth object itself
     * @see Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealth
     * @return Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResponse Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function describeInstanceHealth($request) 
    {
        require_once ('Amazon/ElasticLoadBalancing/Model/DescribeInstanceHealthResponse.php');
        return Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResponse::fromXML($this->_invoke('DescribeInstanceHealth'));
    }


        
    /**
     * Describe Load Balancers 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeLoadBalancers.html      
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancers request or Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancers object itself
     * @see Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancers
     * @return Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResponse Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function describeLoadBalancers($request) 
    {
        require_once ('Amazon/ElasticLoadBalancing/Model/DescribeLoadBalancersResponse.php');
        return Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResponse::fromXML($this->_invoke('DescribeLoadBalancers'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents('Amazon/ElasticLoadBalancing/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}