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
 * Describe Triggers  Sample
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
 * sample for Describe Triggers Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_AutoScaling_Model_DescribeTriggersRequest
 // object or array of parameters
 // invokeDescribeTriggers($service, $request);

                    
/**
  * Describe Triggers Action Sample
  
  * @param Amazon_AutoScaling_Interface $service instance of Amazon_AutoScaling_Interface
  * @param mixed $request Amazon_AutoScaling_Model_DescribeTriggers or array of parameters
  */
  function invokeDescribeTriggers(Amazon_AutoScaling_Interface $service, $request) 
  {
      try {
              $response = $service->describeTriggers($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeTriggersResponse\n");
                if ($response->isSetDescribeTriggersResult()) { 
                    echo("            DescribeTriggersResult\n");
                    $describeTriggersResult = $response->getDescribeTriggersResult();
                    $triggersList = $describeTriggersResult->getTriggers();
                    foreach ($triggersList as $triggers) {
                        echo("                Triggers\n");
                        if ($triggers->isSetTriggerName()) 
                        {
                            echo("                    TriggerName\n");
                            echo("                        " . $triggers->getTriggerName() . "\n");
                        }
                        if ($triggers->isSetAutoScalingGroupName()) 
                        {
                            echo("                    AutoScalingGroupName\n");
                            echo("                        " . $triggers->getAutoScalingGroupName() . "\n");
                        }
                        if ($triggers->isSetMeasureName()) 
                        {
                            echo("                    MeasureName\n");
                            echo("                        " . $triggers->getMeasureName() . "\n");
                        }
                        if ($triggers->isSetStatistic()) 
                        {
                            echo("                    Statistic\n");
                            echo("                        " . $triggers->getStatistic() . "\n");
                        }
                        $dimensionsList = $triggers->getDimensions();
                        foreach ($dimensionsList as $dimensions) {
                            echo("                    Dimensions\n");
                            if ($dimensions->isSetName()) 
                            {
                                echo("                        Name\n");
                                echo("                            " . $dimensions->getName() . "\n");
                            }
                            if ($dimensions->isSetValue()) 
                            {
                                echo("                        Value\n");
                                echo("                            " . $dimensions->getValue() . "\n");
                            }
                        }
                        if ($triggers->isSetPeriod()) 
                        {
                            echo("                    Period\n");
                            echo("                        " . $triggers->getPeriod() . "\n");
                        }
                        if ($triggers->isSetUnit()) 
                        {
                            echo("                    Unit\n");
                            echo("                        " . $triggers->getUnit() . "\n");
                        }
                        if ($triggers->isSetCustomUnit()) 
                        {
                            echo("                    CustomUnit\n");
                            echo("                        " . $triggers->getCustomUnit() . "\n");
                        }
                        if ($triggers->isSetNamespace()) 
                        {
                            echo("                    Namespace\n");
                            echo("                        " . $triggers->getNamespace() . "\n");
                        }
                        if ($triggers->isSetLowerThreshold()) 
                        {
                            echo("                    LowerThreshold\n");
                            echo("                        " . $triggers->getLowerThreshold() . "\n");
                        }
                        if ($triggers->isSetLowerBreachScaleIncrement()) 
                        {
                            echo("                    LowerBreachScaleIncrement\n");
                            echo("                        " . $triggers->getLowerBreachScaleIncrement() . "\n");
                        }
                        if ($triggers->isSetUpperThreshold()) 
                        {
                            echo("                    UpperThreshold\n");
                            echo("                        " . $triggers->getUpperThreshold() . "\n");
                        }
                        if ($triggers->isSetUpperBreachScaleIncrement()) 
                        {
                            echo("                    UpperBreachScaleIncrement\n");
                            echo("                        " . $triggers->getUpperBreachScaleIncrement() . "\n");
                        }
                        if ($triggers->isSetBreachDuration()) 
                        {
                            echo("                    BreachDuration\n");
                            echo("                        " . $triggers->getBreachDuration() . "\n");
                        }
                        if ($triggers->isSetStatus()) 
                        {
                            echo("                    Status\n");
                            echo("                        " . $triggers->getStatus() . "\n");
                        }
                        if ($triggers->isSetCreatedTime()) 
                        {
                            echo("                    CreatedTime\n");
                            echo("                        " . $triggers->getCreatedTime() . "\n");
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
                                                