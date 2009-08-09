<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_AutoScaling
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
 *  Amazon Auto Scaling PHP5 Library
 *  Generated: Sun May 17 01:17:22 PDT 2009
 * 
 */
/**

 */

interface  Amazon_AutoScaling_Interface 
{
    

        
    /**
     * Delete Launch Configuration 
  
     * @see http://docs.amazonwebservices.com/${docPath}DeleteLaunchConfiguration.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DeleteLaunchConfigurationRequest request
     * or Amazon_AutoScaling_Model_DeleteLaunchConfigurationRequest object itself
     * @see Amazon_AutoScaling_Model_DeleteLaunchConfigurationRequest
     * @return Amazon_AutoScaling_Model_DeleteLaunchConfigurationResponse Amazon_AutoScaling_Model_DeleteLaunchConfigurationResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function deleteLaunchConfiguration($request);


        
    /**
     * Describe Triggers 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeTriggers.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeTriggersRequest request
     * or Amazon_AutoScaling_Model_DescribeTriggersRequest object itself
     * @see Amazon_AutoScaling_Model_DescribeTriggersRequest
     * @return Amazon_AutoScaling_Model_DescribeTriggersResponse Amazon_AutoScaling_Model_DescribeTriggersResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeTriggers($request);


        
    /**
     * Update Auto Scaling Group 
  
     * @see http://docs.amazonwebservices.com/${docPath}UpdateAutoScalingGroup.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest request
     * or Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest object itself
     * @see Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest
     * @return Amazon_AutoScaling_Model_UpdateAutoScalingGroupResponse Amazon_AutoScaling_Model_UpdateAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function updateAutoScalingGroup($request);


        
    /**
     * Create Auto Scaling Group 
  
     * @see http://docs.amazonwebservices.com/${docPath}CreateAutoScalingGroup.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_CreateAutoScalingGroupRequest request
     * or Amazon_AutoScaling_Model_CreateAutoScalingGroupRequest object itself
     * @see Amazon_AutoScaling_Model_CreateAutoScalingGroupRequest
     * @return Amazon_AutoScaling_Model_CreateAutoScalingGroupResponse Amazon_AutoScaling_Model_CreateAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function createAutoScalingGroup($request);


        
    /**
     * Delete Trigger 
  
     * @see http://docs.amazonwebservices.com/${docPath}DeleteTrigger.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DeleteTriggerRequest request
     * or Amazon_AutoScaling_Model_DeleteTriggerRequest object itself
     * @see Amazon_AutoScaling_Model_DeleteTriggerRequest
     * @return Amazon_AutoScaling_Model_DeleteTriggerResponse Amazon_AutoScaling_Model_DeleteTriggerResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function deleteTrigger($request);


        
    /**
     * Terminate Instance In Auto Scaling Group 
  
     * @see http://docs.amazonwebservices.com/${docPath}TerminateInstanceInAutoScalingGroup.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest request
     * or Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest object itself
     * @see Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest
     * @return Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function terminateInstanceInAutoScalingGroup($request);


        
    /**
     * Create Or Update Scaling Trigger 
  
     * @see http://docs.amazonwebservices.com/${docPath}CreateOrUpdateScalingTrigger.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerRequest request
     * or Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerRequest object itself
     * @see Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerRequest
     * @return Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerResponse Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function createOrUpdateScalingTrigger($request);


        
    /**
     * Describe Auto Scaling Groups 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeAutoScalingGroups.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest request
     * or Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest object itself
     * @see Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest
     * @return Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeAutoScalingGroups($request);


        
    /**
     * Create Launch Configuration 
  
     * @see http://docs.amazonwebservices.com/${docPath}CreateLaunchConfiguration.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest request
     * or Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest object itself
     * @see Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationResponse Amazon_AutoScaling_Model_CreateLaunchConfigurationResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function createLaunchConfiguration($request);


        
    /**
     * Describe Launch Configurations 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeLaunchConfigurations.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest request
     * or Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest object itself
     * @see Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest
     * @return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeLaunchConfigurations($request);


        
    /**
     * Describe Scaling Activities 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeScalingActivities.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest request
     * or Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest object itself
     * @see Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest
     * @return Amazon_AutoScaling_Model_DescribeScalingActivitiesResponse Amazon_AutoScaling_Model_DescribeScalingActivitiesResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeScalingActivities($request);


        
    /**
     * Set Desired Capacity 
  
     * @see http://docs.amazonwebservices.com/${docPath}SetDesiredCapacity.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_SetDesiredCapacityRequest request
     * or Amazon_AutoScaling_Model_SetDesiredCapacityRequest object itself
     * @see Amazon_AutoScaling_Model_SetDesiredCapacityRequest
     * @return Amazon_AutoScaling_Model_SetDesiredCapacityResponse Amazon_AutoScaling_Model_SetDesiredCapacityResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function setDesiredCapacity($request);


        
    /**
     * Delete Auto Scaling Group 
  
     * @see http://docs.amazonwebservices.com/${docPath}DeleteAutoScalingGroup.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DeleteAutoScalingGroupRequest request
     * or Amazon_AutoScaling_Model_DeleteAutoScalingGroupRequest object itself
     * @see Amazon_AutoScaling_Model_DeleteAutoScalingGroupRequest
     * @return Amazon_AutoScaling_Model_DeleteAutoScalingGroupResponse Amazon_AutoScaling_Model_DeleteAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function deleteAutoScalingGroup($request);

}