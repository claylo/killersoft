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
 * List Inbound Shipment Items By Next Token  Sample
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
 * sample for List Inbound Shipment Items By Next Token Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextToken 
 // object or array of parameters
 // invokeListInboundShipmentItemsByNextToken($service, $request);

                                                                                        
/**
  * List Inbound Shipment Items By Next Token Action Sample
  * Gets the next set of inbound shipment items and returns the
  * NextToken which can be used to iterate through the remaining
  * inbound shipment items. The service will return between 1 and
  * 'MaxCount' number of shipment items.  Please check the value
  * of 'HasNext' to determine whether there are some items which
  * were not returned. You must first call
  * ListInboundShipmentItems to get a 'NextToken'.
  *   
  * @param Amazon_FWSInbound_Interface $service instance of Amazon_FWSInbound_Interface
  * @param mixed $request Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextToken or array of parameters
  */
  function invokeListInboundShipmentItemsByNextToken(Amazon_FWSInbound_Interface $service, $request) 
  {
      try {
              $response = $service->listInboundShipmentItemsByNextToken($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        ListInboundShipmentItemsByNextTokenResponse\n");
                if ($response->isSetListInboundShipmentItemsByNextTokenResult()) { 
                    echo("            ListInboundShipmentItemsByNextTokenResult\n");
                    $listInboundShipmentItemsByNextTokenResult = $response->getListInboundShipmentItemsByNextTokenResult();
                    if ($listInboundShipmentItemsByNextTokenResult->isSetNextToken()) 
                    {
                        echo("                NextToken\n");
                        echo("                    " . $listInboundShipmentItemsByNextTokenResult->getNextToken() . "\n");
                    }
                    if ($listInboundShipmentItemsByNextTokenResult->isSetHasNext()) 
                    {
                        echo("                HasNext\n");
                        echo("                    " . $listInboundShipmentItemsByNextTokenResult->getHasNext() . "\n");
                    }
                    $shipmentItemList = $listInboundShipmentItemsByNextTokenResult->getShipmentItem();
                    foreach ($shipmentItemList as $shipmentItem) {
                        echo("                ShipmentItem\n");
                        if ($shipmentItem->isSetQuantityShipped()) 
                        {
                            echo("                    QuantityShipped\n");
                            echo("                        " . $shipmentItem->getQuantityShipped() . "\n");
                        }
                        if ($shipmentItem->isSetQuantityReceived()) 
                        {
                            echo("                    QuantityReceived\n");
                            echo("                        " . $shipmentItem->getQuantityReceived() . "\n");
                        }
                        if ($shipmentItem->isSetFulfillmentNetworkSKU()) 
                        {
                            echo("                    FulfillmentNetworkSKU\n");
                            echo("                        " . $shipmentItem->getFulfillmentNetworkSKU() . "\n");
                        }
                        if ($shipmentItem->isSetMerchantSKU()) 
                        {
                            echo("                    MerchantSKU\n");
                            echo("                        " . $shipmentItem->getMerchantSKU() . "\n");
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

     } catch (Amazon_FWSInbound_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
        