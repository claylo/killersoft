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
 * Put Inbound Shipment  Sample
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
 * sample for Put Inbound Shipment Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FWSInbound_Model_PutInboundShipment 
 // object or array of parameters
 // invokePutInboundShipment($service, $request);

                                                        
/**
  * Put Inbound Shipment Action Sample
  * Creates or replaces information about a shipment. If the
  * shipment already exists, the information about the shipment
  * (and its associated items) will be replaced (for the provided
  * ShipmentId).  If the shipment does not exist, one will be
  * created.
  * 
  * Note, the merchant should call SetInboundShipmentStatus with a
  * status of 'Shipped' when the shipment is picked up, or set the status
  * to 'Cancelled' if the shipment is abandoned. The intial status
  * of a shipment will be set to 'Working'. Once a shipment's status
  * has been set to 'Shipped', the merchant may make no further changes
  * except to update the status to 'Cancelled'.  Any items not received
  * at the time a shipment is 'Cancelled' will be sidelined if they
  * arrive at the fulfillment center.
  * This operation will simply return a requestId upon success,
  * otherwise an explicit error will be returned.
  * NOTE: If you are experiencing time-outs due to too many
  * items in the shipment, calling this operation with a subset
  * of the items should work.  You may add more items to the
  * shipment by calling PutInboundShipmentItems.
  *   
  * @param Amazon_FWSInbound_Interface $service instance of Amazon_FWSInbound_Interface
  * @param mixed $request Amazon_FWSInbound_Model_PutInboundShipment or array of parameters
  */
  function invokePutInboundShipment(Amazon_FWSInbound_Interface $service, $request) 
  {
      try {
              $response = $service->putInboundShipment($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        PutInboundShipmentResponse\n");
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
                                        