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
 * List Metrics  Sample
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
 * sample for List Metrics Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_CloudWatch_Model_ListMetricsRequest
 // object or array of parameters
 // invokeListMetrics($service, $request);

                
/**
  * List Metrics Action Sample
  
  * @param Amazon_CloudWatch_Interface $service instance of Amazon_CloudWatch_Interface
  * @param mixed $request Amazon_CloudWatch_Model_ListMetrics or array of parameters
  */
  function invokeListMetrics(Amazon_CloudWatch_Interface $service, $request) 
  {
      try {
              $response = $service->listMetrics($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        ListMetricsResponse\n");
                if ($response->isSetListMetricsResult()) { 
                    echo("            ListMetricsResult\n");
                    $listMetricsResult = $response->getListMetricsResult();
                    $metricsList = $listMetricsResult->getMetrics();
                    foreach ($metricsList as $metrics) {
                        echo("                Metrics\n");
                        if ($metrics->isSetMeasureName()) 
                        {
                            echo("                    MeasureName\n");
                            echo("                        " . $metrics->getMeasureName() . "\n");
                        }
                        $dimensionsList = $metrics->getDimensions();
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
                        if ($metrics->isSetNamespace()) 
                        {
                            echo("                    Namespace\n");
                            echo("                        " . $metrics->getNamespace() . "\n");
                        }
                    }
                    if ($listMetricsResult->isSetNextToken()) 
                    {
                        echo("                NextToken\n");
                        echo("                    " . $listMetricsResult->getNextToken() . "\n");
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

     } catch (Amazon_CloudWatch_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
        