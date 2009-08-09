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
 * List All Fulfillment Orders By Next Token  Sample
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
 * sample for List All Fulfillment Orders By Next Token Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextToken 
 // object or array of parameters
 // invokeListAllFulfillmentOrdersByNextToken($service, $request);

                                            
/**
  * List All Fulfillment Orders By Next Token Action Sample
  * Gets the next set of fulfillment orders that are currently being
  * being fulfilled or that were being fulfilled at some time in the
  * past.
  * The service will return between 0 and 'MaxCount' fulfillment orders.
  * Please check the value of 'HasNext' to determine whether there may be
  * additional fulfillment orders to list.
  *   
  * @param Amazon_FWSOutbound_Interface $service instance of Amazon_FWSOutbound_Interface
  * @param mixed $request Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextToken or array of parameters
  */
  function invokeListAllFulfillmentOrdersByNextToken(Amazon_FWSOutbound_Interface $service, $request) 
  {
      try {
              $response = $service->listAllFulfillmentOrdersByNextToken($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        ListAllFulfillmentOrdersByNextTokenResponse\n");
                if ($response->isSetListAllFulfillmentOrdersByNextTokenResult()) { 
                    echo("            ListAllFulfillmentOrdersByNextTokenResult\n");
                    $listAllFulfillmentOrdersByNextTokenResult = $response->getListAllFulfillmentOrdersByNextTokenResult();
                    if ($listAllFulfillmentOrdersByNextTokenResult->isSetNextToken()) 
                    {
                        echo("                NextToken\n");
                        echo("                    " . $listAllFulfillmentOrdersByNextTokenResult->getNextToken() . "\n");
                    }
                    if ($listAllFulfillmentOrdersByNextTokenResult->isSetHasNext()) 
                    {
                        echo("                HasNext\n");
                        echo("                    " . $listAllFulfillmentOrdersByNextTokenResult->getHasNext() . "\n");
                    }
                    $fulfillmentOrderList = $listAllFulfillmentOrdersByNextTokenResult->getFulfillmentOrder();
                    foreach ($fulfillmentOrderList as $fulfillmentOrder) {
                        echo("                FulfillmentOrder\n");
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
    