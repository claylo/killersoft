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
 * Configure Health Check  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon ElasticLoadBalancing
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_ElasticLoadBalancing_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_ElasticLoadBalancing
 * responses without calling Amazon_ElasticLoadBalancing service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/ElasticLoadBalancing/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_ElasticLoadBalancing_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Configure Health Check Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckRequest
 // object or array of parameters
 // invokeConfigureHealthCheck($service, $request);

                    
/**
  * Configure Health Check Action Sample
  
  * @param Amazon_ElasticLoadBalancing_Interface $service instance of Amazon_ElasticLoadBalancing_Interface
  * @param mixed $request Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheck or array of parameters
  */
  function invokeConfigureHealthCheck(Amazon_ElasticLoadBalancing_Interface $service, $request) 
  {
      try {
              $response = $service->configureHealthCheck($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        ConfigureHealthCheckResponse\n");
                if ($response->isSetConfigureHealthCheckResult()) { 
                    echo("            ConfigureHealthCheckResult\n");
                    $configureHealthCheckResult = $response->getConfigureHealthCheckResult();
                    if ($configureHealthCheckResult->isSetHealthCheck()) { 
                        echo("                HealthCheck\n");
                        $healthCheck = $configureHealthCheckResult->getHealthCheck();
                        if ($healthCheck->isSetTarget()) 
                        {
                            echo("                    Target\n");
                            echo("                        " . $healthCheck->getTarget() . "\n");
                        }
                        if ($healthCheck->isSetInterval()) 
                        {
                            echo("                    Interval\n");
                            echo("                        " . $healthCheck->getInterval() . "\n");
                        }
                        if ($healthCheck->isSetTimeout()) 
                        {
                            echo("                    Timeout\n");
                            echo("                        " . $healthCheck->getTimeout() . "\n");
                        }
                        if ($healthCheck->isSetUnhealthyThreshold()) 
                        {
                            echo("                    UnhealthyThreshold\n");
                            echo("                        " . $healthCheck->getUnhealthyThreshold() . "\n");
                        }
                        if ($healthCheck->isSetHealthyThreshold()) 
                        {
                            echo("                    HealthyThreshold\n");
                            echo("                        " . $healthCheck->getHealthyThreshold() . "\n");
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

     } catch (Amazon_ElasticLoadBalancing_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
                                