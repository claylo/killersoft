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
 * Get Inbound Shipment Preview  Sample
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
 * sample for Get Inbound Shipment Preview Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FWSInbound_Model_GetInboundShipmentPreview 
 // object or array of parameters
 // invokeGetInboundShipmentPreview($service, $request);

                                                    
/**
  * Get Inbound Shipment Preview Action Sample
  * Returns the information needed to create a set of shipments
  * for the given collection of items and source address.  When
  * all the items are not all in the same category (e.g. some
  * sortable, some non-sortable) it may be necessary to create
  * multiple shipments (one for each of the shipment groups
  * returned).
  *   
  * @param Amazon_FWSInbound_Interface $service instance of Amazon_FWSInbound_Interface
  * @param mixed $request Amazon_FWSInbound_Model_GetInboundShipmentPreview or array of parameters
  */
  function invokeGetInboundShipmentPreview(Amazon_FWSInbound_Interface $service, $request) 
  {
      try {
              $response = $service->getInboundShipmentPreview($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetInboundShipmentPreviewResponse\n");
                if ($response->isSetGetInboundShipmentPreviewResult()) { 
                    echo("            GetInboundShipmentPreviewResult\n");
                    $getInboundShipmentPreviewResult = $response->getGetInboundShipmentPreviewResult();
                    $shipmentPreviewList = $getInboundShipmentPreviewResult->getShipmentPreview();
                    foreach ($shipmentPreviewList as $shipmentPreview) {
                        echo("                ShipmentPreview\n");
                        if ($shipmentPreview->isSetShipmentId()) 
                        {
                            echo("                    ShipmentId\n");
                            echo("                        " . $shipmentPreview->getShipmentId() . "\n");
                        }
                        if ($shipmentPreview->isSetDestinationFulfillmentCenter()) 
                        {
                            echo("                    DestinationFulfillmentCenter\n");
                            echo("                        " . $shipmentPreview->getDestinationFulfillmentCenter() . "\n");
                        }
                        if ($shipmentPreview->isSetShipToAddress()) { 
                            echo("                    ShipToAddress\n");
                            $shipToAddress = $shipmentPreview->getShipToAddress();
                            if ($shipToAddress->isSetName()) 
                            {
                                echo("                        Name\n");
                                echo("                            " . $shipToAddress->getName() . "\n");
                            }
                            if ($shipToAddress->isSetAddressLine1()) 
                            {
                                echo("                        AddressLine1\n");
                                echo("                            " . $shipToAddress->getAddressLine1() . "\n");
                            }
                            if ($shipToAddress->isSetAddressLine2()) 
                            {
                                echo("                        AddressLine2\n");
                                echo("                            " . $shipToAddress->getAddressLine2() . "\n");
                            }
                            if ($shipToAddress->isSetCity()) 
                            {
                                echo("                        City\n");
                                echo("                            " . $shipToAddress->getCity() . "\n");
                            }
                            if ($shipToAddress->isSetStateOrProvinceCode()) 
                            {
                                echo("                        StateOrProvinceCode\n");
                                echo("                            " . $shipToAddress->getStateOrProvinceCode() . "\n");
                            }
                            if ($shipToAddress->isSetCountryCode()) 
                            {
                                echo("                        CountryCode\n");
                                echo("                            " . $shipToAddress->getCountryCode() . "\n");
                            }
                            if ($shipToAddress->isSetPostalCode()) 
                            {
                                echo("                        PostalCode\n");
                                echo("                            " . $shipToAddress->getPostalCode() . "\n");
                            }
                        } 
                        $merchantSKUQuantityItemList = $shipmentPreview->getMerchantSKUQuantityItem();
                        foreach ($merchantSKUQuantityItemList as $merchantSKUQuantityItem) {
                            echo("                    MerchantSKUQuantityItem\n");
                            if ($merchantSKUQuantityItem->isSetMerchantSKU()) 
                            {
                                echo("                        MerchantSKU\n");
                                echo("                            " . $merchantSKUQuantityItem->getMerchantSKU() . "\n");
                            }
                            if ($merchantSKUQuantityItem->isSetQuantity()) 
                            {
                                echo("                        Quantity\n");
                                echo("                            " . $merchantSKUQuantityItem->getQuantity() . "\n");
                            }
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
                                            