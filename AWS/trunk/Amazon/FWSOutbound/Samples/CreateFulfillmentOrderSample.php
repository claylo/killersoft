<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_FWSOutbound
 *  @copyright   Copyright 2007 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2007-08-02
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon FWS Outbound PHP5 Library
 *  Generated: Wed Mar 19 13:03:03 PDT 2008
 * 
 */

/**
 * Create Fulfillment Order  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon FWSOutbound
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_FWSOutbound_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_FWSOutbound
 * responses without calling Amazon_FWSOutbound service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/FWSOutbound/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_FWSOutbound_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Create Fulfillment Order Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FWSOutbound_Model_CreateFulfillmentOrder 
 // object or array of parameters
 // invokeCreateFulfillmentOrder($service, $request);

                            
/**
  * Create Fulfillment Order Action Sample
  * Request for Amazon to send items from the merchant's inventory to a
  * destination address.
  *   
  * @param Amazon_FWSOutbound_Interface $service instance of Amazon_FWSOutbound_Interface
  * @param mixed $request Amazon_FWSOutbound_Model_CreateFulfillmentOrder or array of parameters
  */
  function invokeCreateFulfillmentOrder(Amazon_FWSOutbound_Interface $service, $request) 
  {
      try {
              $response = $service->createFulfillmentOrder($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CreateFulfillmentOrderResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

     } catch (Amazon_FWSOutbound_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
                    