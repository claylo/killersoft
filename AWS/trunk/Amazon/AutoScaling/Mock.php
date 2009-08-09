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
 *  @see Amazon_AutoScaling_Interface
 */
require_once ('Amazon/AutoScaling/Interface.php'); 

/**

 */
class  Amazon_AutoScaling_Mock implements Amazon_AutoScaling_Interface
{
    // Public API ------------------------------------------------------------//

        
    /**
     * Delete Launch Configuration 
  
     * @see http://docs.amazonwebservices.com/${docPath}DeleteLaunchConfiguration.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DeleteLaunchConfiguration request or Amazon_AutoScaling_Model_DeleteLaunchConfiguration object itself
     * @see Amazon_AutoScaling_Model_DeleteLaunchConfiguration
     * @return Amazon_AutoScaling_Model_DeleteLaunchConfigurationResponse Amazon_AutoScaling_Model_DeleteLaunchConfigurationResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function deleteLaunchConfiguration($request) 
    {
        require_once ('Amazon/AutoScaling/Model/DeleteLaunchConfigurationResponse.php');
        return Amazon_AutoScaling_Model_DeleteLaunchConfigurationResponse::fromXML($this->_invoke('DeleteLaunchConfiguration'));
    }


        
    /**
     * Describe Triggers 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeTriggers.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeTriggers request or Amazon_AutoScaling_Model_DescribeTriggers object itself
     * @see Amazon_AutoScaling_Model_DescribeTriggers
     * @return Amazon_AutoScaling_Model_DescribeTriggersResponse Amazon_AutoScaling_Model_DescribeTriggersResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeTriggers($request) 
    {
        require_once ('Amazon/AutoScaling/Model/DescribeTriggersResponse.php');
        return Amazon_AutoScaling_Model_DescribeTriggersResponse::fromXML($this->_invoke('DescribeTriggers'));
    }


        
    /**
     * Update Auto Scaling Group 
  
     * @see http://docs.amazonwebservices.com/${docPath}UpdateAutoScalingGroup.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_UpdateAutoScalingGroup request or Amazon_AutoScaling_Model_UpdateAutoScalingGroup object itself
     * @see Amazon_AutoScaling_Model_UpdateAutoScalingGroup
     * @return Amazon_AutoScaling_Model_UpdateAutoScalingGroupResponse Amazon_AutoScaling_Model_UpdateAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function updateAutoScalingGroup($request) 
    {
        require_once ('Amazon/AutoScaling/Model/UpdateAutoScalingGroupResponse.php');
        return Amazon_AutoScaling_Model_UpdateAutoScalingGroupResponse::fromXML($this->_invoke('UpdateAutoScalingGroup'));
    }


        
    /**
     * Create Auto Scaling Group 
  
     * @see http://docs.amazonwebservices.com/${docPath}CreateAutoScalingGroup.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_CreateAutoScalingGroup request or Amazon_AutoScaling_Model_CreateAutoScalingGroup object itself
     * @see Amazon_AutoScaling_Model_CreateAutoScalingGroup
     * @return Amazon_AutoScaling_Model_CreateAutoScalingGroupResponse Amazon_AutoScaling_Model_CreateAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function createAutoScalingGroup($request) 
    {
        require_once ('Amazon/AutoScaling/Model/CreateAutoScalingGroupResponse.php');
        return Amazon_AutoScaling_Model_CreateAutoScalingGroupResponse::fromXML($this->_invoke('CreateAutoScalingGroup'));
    }


        
    /**
     * Delete Trigger 
  
     * @see http://docs.amazonwebservices.com/${docPath}DeleteTrigger.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DeleteTrigger request or Amazon_AutoScaling_Model_DeleteTrigger object itself
     * @see Amazon_AutoScaling_Model_DeleteTrigger
     * @return Amazon_AutoScaling_Model_DeleteTriggerResponse Amazon_AutoScaling_Model_DeleteTriggerResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function deleteTrigger($request) 
    {
        require_once ('Amazon/AutoScaling/Model/DeleteTriggerResponse.php');
        return Amazon_AutoScaling_Model_DeleteTriggerResponse::fromXML($this->_invoke('DeleteTrigger'));
    }


        
    /**
     * Terminate Instance In Auto Scaling Group 
  
     * @see http://docs.amazonwebservices.com/${docPath}TerminateInstanceInAutoScalingGroup.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroup request or Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroup object itself
     * @see Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroup
     * @return Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function terminateInstanceInAutoScalingGroup($request) 
    {
        require_once ('Amazon/AutoScaling/Model/TerminateInstanceInAutoScalingGroupResponse.php');
        return Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse::fromXML($this->_invoke('TerminateInstanceInAutoScalingGroup'));
    }


        
    /**
     * Create Or Update Scaling Trigger 
  
     * @see http://docs.amazonwebservices.com/${docPath}CreateOrUpdateScalingTrigger.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_CreateOrUpdateScalingTrigger request or Amazon_AutoScaling_Model_CreateOrUpdateScalingTrigger object itself
     * @see Amazon_AutoScaling_Model_CreateOrUpdateScalingTrigger
     * @return Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerResponse Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function createOrUpdateScalingTrigger($request) 
    {
        require_once ('Amazon/AutoScaling/Model/CreateOrUpdateScalingTriggerResponse.php');
        return Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerResponse::fromXML($this->_invoke('CreateOrUpdateScalingTrigger'));
    }


        
    /**
     * Describe Auto Scaling Groups 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeAutoScalingGroups.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeAutoScalingGroups request or Amazon_AutoScaling_Model_DescribeAutoScalingGroups object itself
     * @see Amazon_AutoScaling_Model_DescribeAutoScalingGroups
     * @return Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeAutoScalingGroups($request) 
    {
        require_once ('Amazon/AutoScaling/Model/DescribeAutoScalingGroupsResponse.php');
        return Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse::fromXML($this->_invoke('DescribeAutoScalingGroups'));
    }


        
    /**
     * Create Launch Configuration 
  
     * @see http://docs.amazonwebservices.com/${docPath}CreateLaunchConfiguration.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_CreateLaunchConfiguration request or Amazon_AutoScaling_Model_CreateLaunchConfiguration object itself
     * @see Amazon_AutoScaling_Model_CreateLaunchConfiguration
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationResponse Amazon_AutoScaling_Model_CreateLaunchConfigurationResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function createLaunchConfiguration($request) 
    {
        require_once ('Amazon/AutoScaling/Model/CreateLaunchConfigurationResponse.php');
        return Amazon_AutoScaling_Model_CreateLaunchConfigurationResponse::fromXML($this->_invoke('CreateLaunchConfiguration'));
    }


        
    /**
     * Describe Launch Configurations 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeLaunchConfigurations.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeLaunchConfigurations request or Amazon_AutoScaling_Model_DescribeLaunchConfigurations object itself
     * @see Amazon_AutoScaling_Model_DescribeLaunchConfigurations
     * @return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeLaunchConfigurations($request) 
    {
        require_once ('Amazon/AutoScaling/Model/DescribeLaunchConfigurationsResponse.php');
        return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse::fromXML($this->_invoke('DescribeLaunchConfigurations'));
    }


        
    /**
     * Describe Scaling Activities 
  
     * @see http://docs.amazonwebservices.com/${docPath}DescribeScalingActivities.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeScalingActivities request or Amazon_AutoScaling_Model_DescribeScalingActivities object itself
     * @see Amazon_AutoScaling_Model_DescribeScalingActivities
     * @return Amazon_AutoScaling_Model_DescribeScalingActivitiesResponse Amazon_AutoScaling_Model_DescribeScalingActivitiesResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeScalingActivities($request) 
    {
        require_once ('Amazon/AutoScaling/Model/DescribeScalingActivitiesResponse.php');
        return Amazon_AutoScaling_Model_DescribeScalingActivitiesResponse::fromXML($this->_invoke('DescribeScalingActivities'));
    }


        
    /**
     * Set Desired Capacity 
  
     * @see http://docs.amazonwebservices.com/${docPath}SetDesiredCapacity.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_SetDesiredCapacity request or Amazon_AutoScaling_Model_SetDesiredCapacity object itself
     * @see Amazon_AutoScaling_Model_SetDesiredCapacity
     * @return Amazon_AutoScaling_Model_SetDesiredCapacityResponse Amazon_AutoScaling_Model_SetDesiredCapacityResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function setDesiredCapacity($request) 
    {
        require_once ('Amazon/AutoScaling/Model/SetDesiredCapacityResponse.php');
        return Amazon_AutoScaling_Model_SetDesiredCapacityResponse::fromXML($this->_invoke('SetDesiredCapacity'));
    }


        
    /**
     * Delete Auto Scaling Group 
  
     * @see http://docs.amazonwebservices.com/${docPath}DeleteAutoScalingGroup.html      
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DeleteAutoScalingGroup request or Amazon_AutoScaling_Model_DeleteAutoScalingGroup object itself
     * @see Amazon_AutoScaling_Model_DeleteAutoScalingGroup
     * @return Amazon_AutoScaling_Model_DeleteAutoScalingGroupResponse Amazon_AutoScaling_Model_DeleteAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function deleteAutoScalingGroup($request) 
    {
        require_once ('Amazon/AutoScaling/Model/DeleteAutoScalingGroupResponse.php');
        return Amazon_AutoScaling_Model_DeleteAutoScalingGroupResponse::fromXML($this->_invoke('DeleteAutoScalingGroup'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents('Amazon/AutoScaling/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}