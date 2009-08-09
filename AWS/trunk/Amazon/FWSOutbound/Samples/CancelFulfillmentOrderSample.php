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
 * Cancel Fulfillment Order  Sample
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
 * sample for Cancel Fulfillment Order Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FWSOutbound_Model_CancelFulfillmentOrder 
 // object or array of parameters
 // invokeCancelFulfillmentOrder($service, $request);

                                
/**
  * Cancel Fulfillment Order Action Sample
  * Request for Amazon to no longer attempt to fulfill an existing
  * fulfillment order. Amazon will attempt to stop fulfillment of all
  * items that haven't already shipped, but cannot guarantee success.
  * Note: Items that have already shipped cannot be cancelled.
  *   
  * @param Amazon_FWSOutbound_Interface $service instance of Amazon_FWSOutbound_Interface
  * @param mixed $request Amazon_FWSOutbound_Model_CancelFulfillmentOrder or array of parameters
  */
  function invokeCancelFulfillmentOrder(Amazon_FWSOutbound_Interface $service, $request) 
  {
      try {
              $response = $service->cancelFulfillmentOrder($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CancelFulfillmentOrderResponse\n");
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
                