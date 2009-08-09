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
 * Describe Auto Scaling Groups  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon AutoScaling
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_AutoScaling_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_AutoScaling
 * responses without calling Amazon_AutoScaling service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/AutoScaling/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_AutoScaling_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Describe Auto Scaling Groups Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest
 // object or array of parameters
 // invokeDescribeAutoScalingGroups($service, $request);

                                            
/**
  * Describe Auto Scaling Groups Action Sample
  
  * @param Amazon_AutoScaling_Interface $service instance of Amazon_AutoScaling_Interface
  * @param mixed $request Amazon_AutoScaling_Model_DescribeAutoScalingGroups or array of parameters
  */
  function invokeDescribeAutoScalingGroups(Amazon_AutoScaling_Interface $service, $request) 
  {
      try {
              $response = $service->describeAutoScalingGroups($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeAutoScalingGroupsResponse\n");
                if ($response->isSetDescribeAutoScalingGroupsResult()) { 
                    echo("            DescribeAutoScalingGroupsResult\n");
                    $describeAutoScalingGroupsResult = $response->getDescribeAutoScalingGroupsResult();
                    $autoScalingGroupsList = $describeAutoScalingGroupsResult->getAutoScalingGroups();
                    foreach ($autoScalingGroupsList as $autoScalingGroups) {
                        echo("                AutoScalingGroups\n");
                        if ($autoScalingGroups->isSetAutoScalingGroupName()) 
                        {
                            echo("                    AutoScalingGroupName\n");
                            echo("                        " . $autoScalingGroups->getAutoScalingGroupName() . "\n");
                        }
                        if ($autoScalingGroups->isSetLaunchConfigurationName()) 
                        {
                            echo("                    LaunchConfigurationName\n");
                            echo("                        " . $autoScalingGroups->getLaunchConfigurationName() . "\n");
                        }
                        if ($autoScalingGroups->isSetMinSize()) 
                        {
                            echo("                    MinSize\n");
                            echo("                        " . $autoScalingGroups->getMinSize() . "\n");
                        }
                        if ($autoScalingGroups->isSetMaxSize()) 
                        {
                            echo("                    MaxSize\n");
                            echo("                        " . $autoScalingGroups->getMaxSize() . "\n");
                        }
                        if ($autoScalingGroups->isSetDesiredCapacity()) 
                        {
                            echo("                    DesiredCapacity\n");
                            echo("                        " . $autoScalingGroups->getDesiredCapacity() . "\n");
                        }
                        if ($autoScalingGroups->isSetCooldown()) 
                        {
                            echo("                    Cooldown\n");
                            echo("                        " . $autoScalingGroups->getCooldown() . "\n");
                        }
                        $availabilityZonesList  =  $autoScalingGroups->getAvailabilityZones();
                        foreach ($availabilityZonesList as $availabilityZones) { 
                            echo("                    AvailabilityZones\n");
                            echo("                        " . $availabilityZones);
                        }	
                        $loadBalancerNamesList  =  $autoScalingGroups->getLoadBalancerNames();
                        foreach ($loadBalancerNamesList as $loadBalancerNames) { 
                            echo("                    LoadBalancerNames\n");
                            echo("                        " . $loadBalancerNames);
                        }	
                        $instancesList = $autoScalingGroups->getInstances();
                        foreach ($instancesList as $instances) {
                            echo("                    Instances\n");
                            if ($instances->isSetInstanceId()) 
                            {
                                echo("                        InstanceId\n");
                                echo("                            " . $instances->getInstanceId() . "\n");
                            }
                            if ($instances->isSetAvailabilityZone()) 
                            {
                                echo("                        AvailabilityZone\n");
                                echo("                            " . $instances->getAvailabilityZone() . "\n");
                            }
                            if ($instances->isSetLifecycleState()) 
                            {
                                echo("                        LifecycleState\n");
                                echo("                            " . $instances->getLifecycleState() . "\n");
                            }
                        }
                        if ($autoScalingGroups->isSetCreatedTime()) 
                        {
                            echo("                    CreatedTime\n");
                            echo("                        " . $autoScalingGroups->getCreatedTime() . "\n");
                        }
                    }
                } 
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

     } catch (Amazon_AutoScaling_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
                        