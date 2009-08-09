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
 * Get Fulfillment Order  Sample
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
 * sample for Get Fulfillment Order Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FWSOutbound_Model_GetFulfillmentOrder 
 // object or array of parameters
 // invokeGetFulfillmentOrder($service, $request);

                                    
/**
  * Get Fulfillment Order Action Sample
  * Get detailed information about a FulfillmentOrder.  This includes the
  * original fulfillment order request, the status of the order and its
  * items in Amazon's fulfillment network, and the shipments that have been
  * generated to fulfill the order.
  *   
  * @param Amazon_FWSOutbound_Interface $service instance of Amazon_FWSOutbound_Interface
  * @param mixed $request Amazon_FWSOutbound_Model_GetFulfillmentOrder or array of parameters
  */
  function invokeGetFulfillmentOrder(Amazon_FWSOutbound_Interface $service, $request) 
  {
      try {
              $response = $service->getFulfillmentOrder($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetFulfillmentOrderResponse\n");
                if ($response->isSetGetFulfillmentOrderResult()) { 
                    echo("            GetFulfillmentOrderResult\n");
                    $getFulfillmentOrderResult = $response->getGetFulfillmentOrderResult();
                    if ($getFulfillmentOrderResult->isSetFulfillmentOrder()) { 
                        echo("                FulfillmentOrder\n");
                        $fulfillmentOrder = $getFulfillmentOrderResult->getFulfillmentOrder();
                        if ($fulfillmentOrder->isSetMerchantFulfillmentOrderId()) 
                        {
                            echo("                    MerchantFulfillmentOrderId\n");
                            echo("                        " . $fulfillmentOrder->getMerchantFulfillmentOrderId() . "\n");
                        }
                        if ($fulfillmentOrder->isSetReceivedDateTime()) 
                        {
                            echo("                    ReceivedDateTime\n");
                            echo("                        " . $fulfillmentOrder->getReceivedDateTime() . "\n");
                        }
                        if ($fulfillmentOrder->isSetShippingSpeedCategory()) 
                        {
                            echo("                    ShippingSpeedCategory\n");
                            echo("                        " . $fulfillmentOrder->getShippingSpeedCategory() . "\n");
                        }
                        if ($fulfillmentOrder->isSetDisplayableOrderDateTime()) 
                        {
                            echo("                    DisplayableOrderDateTime\n");
                            echo("                        " . $fulfillmentOrder->getDisplayableOrderDateTime() . "\n");
                        }
                        if ($fulfillmentOrder->isSetDisplayableOrderComment()) 
                        {
                            echo("                    DisplayableOrderComment\n");
                            echo("                        " . $fulfillmentOrder->getDisplayableOrderComment() . "\n");
                        }
                        if ($fulfillmentOrder->isSetDisplayableOrderId()) 
                        {
                            echo("                    DisplayableOrderId\n");
                            echo("                        " . $fulfillmentOrder->getDisplayableOrderId() . "\n");
                        }
                        if ($fulfillmentOrder->isSetDestinationAddress()) { 
                            echo("                    DestinationAddress\n");
                            $destinationAddress = $fulfillmentOrder->getDestinationAddress();
                            if ($destinationAddress->isSetName()) 
                            {
                                echo("                        Name\n");
                                echo("                            " . $destinationAddress->getName() . "\n");
                            }
                            if ($destinationAddress->isSetLine1()) 
                            {
                                echo("                        Line1\n");
                                echo("                            " . $destinationAddress->getLine1() . "\n");
                            }
                            if ($destinationAddress->isSetLine2()) 
                            {
                                echo("                        Line2\n");
                                echo("                            " . $destinationAddress->getLine2() . "\n");
                            }
                            if ($destinationAddress->isSetLine3()) 
                            {
                                echo("                        Line3\n");
                                echo("                            " . $destinationAddress->getLine3() . "\n");
                            }
                            if ($destinationAddress->isSetCity()) 
                            {
                                echo("                        City\n");
                                echo("                            " . $destinationAddress->getCity() . "\n");
                            }
                            if ($destinationAddress->isSetStateOrProvinceCode()) 
                            {
                                echo("                        StateOrProvinceCode\n");
                                echo("                            " . $destinationAddress->getStateOrProvinceCode() . "\n");
                            }
                            if ($destinationAddress->isSetCountryCode()) 
                            {
                                echo("                        CountryCode\n");
                                echo("                            " . $destinationAddress->getCountryCode() . "\n");
                            }
                            if ($destinationAddress->isSetPostalCode()) 
                            {
                                echo("                        PostalCode\n");
                                echo("                            " . $destinationAddress->getPostalCode() . "\n");
                            }
                            if ($destinationAddress->isSetPhoneNumber()) 
                            {
                                echo("                        PhoneNumber\n");
                                echo("                            " . $destinationAddress->getPhoneNumber() . "\n");
                            }
                        } 
                        if ($fulfillmentOrder->isSetFulfillmentOrderStatus()) 
                        {
                            echo("                    FulfillmentOrderStatus\n");
                            echo("                        " . $fulfillmentOrder->getFulfillmentOrderStatus() . "\n");
                        }
                        if ($fulfillmentOrder->isSetStatusUpdatedDateTime()) 
                        {
                            echo("                    StatusUpdatedDateTime\n");
                            echo("                        " . $fulfillmentOrder->getStatusUpdatedDateTime() . "\n");
                        }
                    } 
                    $fulfillmentOrderItemList = $getFulfillmentOrderResult->getFulfillmentOrderItem();
                    foreach ($fulfillmentOrderItemList as $fulfillmentOrderItem) {
                        echo("                FulfillmentOrderItem\n");
                        if ($fulfillmentOrderItem->isSetMerchantSKU()) 
                        {
                            echo("                    MerchantSKU\n");
                            echo("                        " . $fulfillmentOrderItem->getMerchantSKU() . "\n");
                        }
                        if ($fulfillmentOrderItem->isSetMerchantFulfillmentOrderItemId()) 
                        {
                            echo("                    MerchantFulfillmentOrderItemId\n");
                            echo("                        " . $fulfillmentOrderItem->getMerchantFulfillmentOrderItemId() . "\n");
                        }
                        if ($fulfillmentOrderItem->isSetQuantity()) 
                        {
                            echo("                    Quantity\n");
                            echo("                        " . $fulfillmentOrderItem->getQuantity() . "\n");
                        }
                        if ($fulfillmentOrderItem->isSetCancelledQuantity()) 
                        {
                            echo("                    CancelledQuantity\n");
                            echo("                        " . $fulfillmentOrderItem->getCancelledQuantity() . "\n");
                        }
                        if ($fulfillmentOrderItem->isSetUnfulfillableQuantity()) 
                        {
                            echo("                    UnfulfillableQuantity\n");
                            echo("                        " . $fulfillmentOrderItem->getUnfulfillableQuantity() . "\n");
                        }
                        if ($fulfillmentOrderItem->isSetGiftMessage()) 
                        {
                            echo("                    GiftMessage\n");
                            echo("                        " . $fulfillmentOrderItem->getGiftMessage() . "\n");
                        }
                        if ($fulfillmentOrderItem->isSetDisplayableComment()) 
                        {
                            echo("                    DisplayableComment\n");
                            echo("                        " . $fulfillmentOrderItem->getDisplayableComment() . "\n");
                        }
                        if ($fulfillmentOrderItem->isSetEstimatedShipDateTime()) 
                        {
                            echo("                    EstimatedShipDateTime\n");
                            echo("                        " . $fulfillmentOrderItem->getEstimatedShipDateTime() . "\n");
                        }
                        if ($fulfillmentOrderItem->isSetEstimatedArrivalDateTime()) 
                        {
                            echo("                    EstimatedArrivalDateTime\n");
                            echo("                        " . $fulfillmentOrderItem->getEstimatedArrivalDateTime() . "\n");
                        }
                    }
                    $fulfillmentShipmentList = $getFulfillmentOrderResult->getFulfillmentShipment();
                    foreach ($fulfillmentShipmentList as $fulfillmentShipment) {
                        echo("                FulfillmentShipment\n");
                        if ($fulfillmentShipment->isSetAmazonShipmentId()) 
                        {
                            echo("                    AmazonShipmentId\n");
                            echo("                        " . $fulfillmentShipment->getAmazonShipmentId() . "\n");
                        }
                        if ($fulfillmentShipment->isSetFulfillmentCenterId()) 
                        {
                            echo("                    FulfillmentCenterId\n");
                            echo("                        " . $fulfillmentShipment->getFulfillmentCenterId() . "\n");
                        }
                        if ($fulfillmentShipment->isSetFulfillmentShipmentStatus()) 
                        {
                            echo("                    FulfillmentShipmentStatus\n");
                            echo("                        " . $fulfillmentShipment->getFulfillmentShipmentStatus() . "\n");
                        }
                        if ($fulfillmentShipment->isSetShippingDateTime()) 
                        {
                            echo("                    ShippingDateTime\n");
                            echo("                        " . $fulfillmentShipment->getShippingDateTime() . "\n");
                        }
                        if ($fulfillmentShipment->isSetEstimatedArrivalDateTime()) 
                        {
                            echo("                    EstimatedArrivalDateTime\n");
                            echo("                        " . $fulfillmentShipment->getEstimatedArrivalDateTime() . "\n");
                        }
                        $fulfillmentShipmentItemList = $fulfillmentShipment->getFulfillmentShipmentItem();
                        foreach ($fulfillmentShipmentItemList as $fulfillmentShipmentItem) {
                            echo("                    FulfillmentShipmentItem\n");
                            if ($fulfillmentShipmentItem->isSetMerchantSKU()) 
                            {
                                echo("                        MerchantSKU\n");
                                echo("                            " . $fulfillmentShipmentItem->getMerchantSKU() . "\n");
                            }
                            if ($fulfillmentShipmentItem->isSetMerchantFulfillmentOrderItemId()) 
                            {
                                echo("                        MerchantFulfillmentOrderItemId\n");
                                echo("                            " . $fulfillmentShipmentItem->getMerchantFulfillmentOrderItemId() . "\n");
                            }
                            if ($fulfillmentShipmentItem->isSetQuantity()) 
                            {
                                echo("                        Quantity\n");
                                echo("                            " . $fulfillmentShipmentItem->getQuantity() . "\n");
                            }
                            if ($fulfillmentShipmentItem->isSetPackageNumber()) 
                            {
                                echo("                        PackageNumber\n");
                                echo("                            " . $fulfillmentShipmentItem->getPackageNumber() . "\n");
                            }
                        }
                        $fulfillmentShipmentPackageList = $fulfillmentShipment->getFulfillmentShipmentPackage();
                        foreach ($fulfillmentShipmentPackageList as $fulfillmentShipmentPackage) {
                            echo("                    FulfillmentShipmentPackage\n");
                            if ($fulfillmentShipmentPackage->isSetPackageNumber()) 
                            {
                                echo("                        PackageNumber\n");
                                echo("                            " . $fulfillmentShipmentPackage->getPackageNumber() . "\n");
                            }
                            if ($fulfillmentShipmentPackage->isSetCarrierCode()) 
                            {
                                echo("                        CarrierCode\n");
                                echo("                            " . $fulfillmentShipmentPackage->getCarrierCode() . "\n");
                            }
                            if ($fulfillmentShipmentPackage->isSetTrackingNumber()) 
                            {
                                echo("                        TrackingNumber\n");
                                echo("                            " . $fulfillmentShipmentPackage->getTrackingNumber() . "\n");
                            }
                            if ($fulfillmentShipmentPackage->isSetEstimatedArrivalDateTime()) 
                            {
                                echo("                        EstimatedArrivalDateTime\n");
                                echo("                            " . $fulfillmentShipmentPackage->getEstimatedArrivalDateTime() . "\n");
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

     } catch (Amazon_FWSOutbound_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
            