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
 * Get Metric Statistics  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon CloudWatch
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_CloudWatch_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_CloudWatch
 * responses without calling Amazon_CloudWatch service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/CloudWatch/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_CloudWatch_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Get Metric Statistics Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_CloudWatch_Model_GetMetricStatisticsRequest
 // object or array of parameters
 // invokeGetMetricStatistics($service, $request);

                    
/**
  * Get Metric Statistics Action Sample
  
  * @param Amazon_CloudWatch_Interface $service instance of Amazon_CloudWatch_Interface
  * @param mixed $request Amazon_CloudWatch_Model_GetMetricStatistics or array of parameters
  */
  function invokeGetMetricStatistics(Amazon_CloudWatch_Interface $service, $request) 
  {
      try {
              $response = $service->getMetricStatistics($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetMetricStatisticsResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetGetMetricStatisticsResult()) { 
                    echo("            GetMetricStatisticsResult\n");
                    $getMetricStatisticsResult = $response->getGetMetricStatisticsResult();
                    $datapointsList = $getMetricStatisticsResult->getDatapoints();
                    foreach ($datapointsList as $datapoints) {
                        echo("                Datapoints\n");
                        if ($datapoints->isSetTimestamp()) 
                        {
                            echo("                    Timestamp\n");
                            echo("                        " . $datapoints->getTimestamp() . "\n");
                        }
                        if ($datapoints->isSetSamples()) 
                        {
                            echo("                    Samples\n");
                            echo("                        " . $datapoints->getSamples() . "\n");
                        }
                        if ($datapoints->isSetAverage()) 
                        {
                            echo("                    Average\n");
                            echo("                        " . $datapoints->getAverage() . "\n");
                        }
                        if ($datapoints->isSetSum()) 
                        {
                            echo("                    Sum\n");
                            echo("                        " . $datapoints->getSum() . "\n");
                        }
                        if ($datapoints->isSetMinimum()) 
                        {
                            echo("                    Minimum\n");
                            echo("                        " . $datapoints->getMinimum() . "\n");
                        }
                        if ($datapoints->isSetMaximum()) 
                        {
                            echo("                    Maximum\n");
                            echo("                        " . $datapoints->getMaximum() . "\n");
                        }
                        if ($datapoints->isSetUnit()) 
                        {
                            echo("                    Unit\n");
                            echo("                        " . $datapoints->getUnit() . "\n");
                        }
                        if ($datapoints->isSetCustomUnit()) 
                        {
                            echo("                    CustomUnit\n");
                            echo("                        " . $datapoints->getCustomUnit() . "\n");
                        }
                    }
                    if ($getMetricStatisticsResult->isSetLabel()) 
                    {
                        echo("                Label\n");
                        echo("                    " . $getMetricStatisticsResult->getLabel() . "\n");
                    }
                } 

     } catch (Amazon_CloudWatch_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
    