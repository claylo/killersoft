<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_FWSInbound
 *  @copyright   Copyright 2007 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2007-05-10
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon FWS Inbound PHP5 Library
 *  Generated: Wed Mar 19 13:05:13 PDT 2008
 * 
 */

/**
 * Put Inbound Shipment Items  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon FWSInbound
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_FWSInbound_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_FWSInbound
 * responses without calling Amazon_FWSInbound service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/FWSInbound/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_FWSInbound_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Put Inbound Shipment Items Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FWSInbound_Model_PutInboundShipmentItems 
 // object or array of parameters
 // invokePutInboundShipmentItems($service, $request);

                                                            
/**
  * Put Inbound Shipment Items Action Sample
  * Adds line items to the pre-existing shipment specified by the
  * ShipmentId. If the MerchantSKU is already in the shipment, then
  * that particular line item will be replaced. Call
  * PutInboundShipment to create the shipment to be worked on.
  * 
  * This call will return an exception when attempting to add line
  * items to a shipment that is in a status other than 'Working'.
  *   
  * @param Amazon_FWSInbound_Interface $service instance of Amazon_FWSInbound_Interface
  * @param mixed $request Amazon_FWSInbound_Model_PutInboundShipmentItems or array of parameters
  */
  function invokePutInboundShipmentItems(Amazon_FWSInbound_Interface $service, $request) 
  {
      try {
              $response = $service->putInboundShipmentItems($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        PutInboundShipmentItemsResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

     } catch (Amazon_FWSInbound_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
                                    