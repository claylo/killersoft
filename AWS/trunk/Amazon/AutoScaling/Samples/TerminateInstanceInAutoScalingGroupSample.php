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
 * Terminate Instance In Auto Scaling Group  Sample
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
 * sample for Terminate Instance In Auto Scaling Group Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest
 // object or array of parameters
 // invokeTerminateInstanceInAutoScalingGroup($service, $request);

                                    
/**
  * Terminate Instance In Auto Scaling Group Action Sample
  
  * @param Amazon_AutoScaling_Interface $service instance of Amazon_AutoScaling_Interface
  * @param mixed $request Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroup or array of parameters
  */
  function invokeTerminateInstanceInAutoScalingGroup(Amazon_AutoScaling_Interface $service, $request) 
  {
      try {
              $response = $service->terminateInstanceInAutoScalingGroup($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        TerminateInstanceInAutoScalingGroupResponse\n");
                if ($response->isSetTerminateInstanceInAutoScalingGroupResult()) { 
                    echo("            TerminateInstanceInAutoScalingGroupResult\n");
                    $terminateInstanceInAutoScalingGroupResult = $response->getTerminateInstanceInAutoScalingGroupResult();
                    if ($terminateInstanceInAutoScalingGroupResult->isSetActivity()) { 
                        echo("                Activity\n");
                        $activity = $terminateInstanceInAutoScalingGroupResult->getActivity();
                        if ($activity->isSetActivityId()) 
                        {
                            echo("                    ActivityId\n");
                            echo("                        " . $activity->getActivityId() . "\n");
                        }
                        if ($activity->isSetDescription()) 
                        {
                            echo("                    Description\n");
                            echo("                        " . $activity->getDescription() . "\n");
                        }
                        if ($activity->isSetCause()) 
                        {
                            echo("                    Cause\n");
                            echo("                        " . $activity->getCause() . "\n");
                        }
                        if ($activity->isSetStartTime()) 
                        {
                            echo("                    StartTime\n");
                            echo("                        " . $activity->getStartTime() . "\n");
                        }
                        if ($activity->isSetEndTime()) 
                        {
                            echo("                    EndTime\n");
                            echo("                        " . $activity->getEndTime() . "\n");
                        }
                        if ($activity->isSetStatusCode()) 
                        {
                            echo("                    StatusCode\n");
                            echo("                        " . $activity->getStatusCode() . "\n");
                        }
                        if ($activity->isSetStatusMessage()) 
                        {
                            echo("                    StatusMessage\n");
                            echo("                        " . $activity->getStatusMessage() . "\n");
                        }
                        if ($activity->isSetProgress()) 
                        {
                            echo("                    Progress\n");
                            echo("                        " . $activity->getProgress() . "\n");
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
                                