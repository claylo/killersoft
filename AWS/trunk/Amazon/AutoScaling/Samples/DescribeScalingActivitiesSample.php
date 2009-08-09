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
 * Describe Scaling Activities  Sample
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
 * sample for Describe Scaling Activities Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest
 // object or array of parameters
 // invokeDescribeScalingActivities($service, $request);

                                                        
/**
  * Describe Scaling Activities Action Sample
  
  * @param Amazon_AutoScaling_Interface $service instance of Amazon_AutoScaling_Interface
  * @param mixed $request Amazon_AutoScaling_Model_DescribeScalingActivities or array of parameters
  */
  function invokeDescribeScalingActivities(Amazon_AutoScaling_Interface $service, $request) 
  {
      try {
              $response = $service->describeScalingActivities($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeScalingActivitiesResponse\n");
                if ($response->isSetDescribeScalingActivitiesResult()) { 
                    echo("            DescribeScalingActivitiesResult\n");
                    $describeScalingActivitiesResult = $response->getDescribeScalingActivitiesResult();
                    $activitiesList = $describeScalingActivitiesResult->getActivities();
                    foreach ($activitiesList as $activities) {
                        echo("                Activities\n");
                        if ($activities->isSetActivityId()) 
                        {
                            echo("                    ActivityId\n");
                            echo("                        " . $activities->getActivityId() . "\n");
                        }
                        if ($activities->isSetDescription()) 
                        {
                            echo("                    Description\n");
                            echo("                        " . $activities->getDescription() . "\n");
                        }
                        if ($activities->isSetCause()) 
                        {
                            echo("                    Cause\n");
                            echo("                        " . $activities->getCause() . "\n");
                        }
                        if ($activities->isSetStartTime()) 
                        {
                            echo("                    StartTime\n");
                            echo("                        " . $activities->getStartTime() . "\n");
                        }
                        if ($activities->isSetEndTime()) 
                        {
                            echo("                    EndTime\n");
                            echo("                        " . $activities->getEndTime() . "\n");
                        }
                        if ($activities->isSetStatusCode()) 
                        {
                            echo("                    StatusCode\n");
                            echo("                        " . $activities->getStatusCode() . "\n");
                        }
                        if ($activities->isSetStatusMessage()) 
                        {
                            echo("                    StatusMessage\n");
                            echo("                        " . $activities->getStatusMessage() . "\n");
                        }
                        if ($activities->isSetProgress()) 
                        {
                            echo("                    Progress\n");
                            echo("                        " . $activities->getProgress() . "\n");
                        }
                    }
                    if ($describeScalingActivitiesResult->isSetNextToken()) 
                    {
                        echo("                NextToken\n");
                        echo("                    " . $describeScalingActivitiesResult->getNextToken() . "\n");
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
            