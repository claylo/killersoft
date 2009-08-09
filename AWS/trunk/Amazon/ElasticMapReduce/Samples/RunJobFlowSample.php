<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_ElasticMapReduce
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-03-31
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon Elastic Map Reduce PHP5 Library
 *  Generated: Tue Apr 21 15:38:55 PDT 2009
 * 
 */

/**
 * Run Job Flow  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon ElasticMapReduce
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_ElasticMapReduce_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_ElasticMapReduce
 * responses without calling Amazon_ElasticMapReduce service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/ElasticMapReduce/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_ElasticMapReduce_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Run Job Flow Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_ElasticMapReduce_Model_RunJobFlowRequest
 // object or array of parameters
 // invokeRunJobFlow($service, $request);

                            
/**
  * Run Job Flow Action Sample
  
  * @param Amazon_ElasticMapReduce_Interface $service instance of Amazon_ElasticMapReduce_Interface
  * @param mixed $request Amazon_ElasticMapReduce_Model_RunJobFlow or array of parameters
  */
  function invokeRunJobFlow(Amazon_ElasticMapReduce_Interface $service, $request) 
  {
      try {
              $response = $service->runJobFlow($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        RunJobFlowResponse\n");
                if ($response->isSetRunJobFlowResult()) { 
                    echo("            RunJobFlowResult\n");
                    $runJobFlowResult = $response->getRunJobFlowResult();
                    if ($runJobFlowResult->isSetJobFlowId()) 
                    {
                        echo("                JobFlowId\n");
                        echo("                    " . $runJobFlowResult->getJobFlowId() . "\n");
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

     } catch (Amazon_ElasticMapReduce_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
    