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
 * List Inbound Shipments By Next Token  Sample
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
 * sample for List Inbound Shipments By Next Token Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FWSInbound_Model_ListInboundShipmentsByNextToken 
 // object or array of parameters
 // invokeListInboundShipmentsByNextToken($service, $request);

                                                                        
/**
  * List Inbound Shipments By Next Token Action Sample
  * Gets the next set of inbound shipments created by a
  * merchant and returns the next NextToken which can be used to
  * iterate through the remaining inbound shipments.  The
  * service will return between 1 and 'MaxCount' number of
  * items.  Please check the value of 'HasNext' to determine
  * whether there were some items which were not returned.
  *   
  * @param Amazon_FWSInbound_Interface $service instance of Amazon_FWSInbound_Interface
  * @param mixed $request Amazon_FWSInbound_Model_ListInboundShipmentsByNextToken or array of parameters
  */
  function invokeListInboundShipmentsByNextToken(Amazon_FWSInbound_Interface $service, $request) 
  {
      try {
              $response = $service->listInboundShipmentsByNextToken($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        ListInboundShipmentsByNextTokenResponse\n");
                if ($response->isSetListInboundShipmentsByNextTokenResult()) { 
                    echo("            ListInboundShipmentsByNextTokenResult\n");
                    $listInboundShipmentsByNextTokenResult = $response->getListInboundShipmentsByNextTokenResult();
                    if ($listInboundShipmentsByNextTokenResult->isSetNextToken()) 
                    {
                        echo("                NextToken\n");
                        echo("                    " . $listInboundShipmentsByNextTokenResult->getNextToken() . "\n");
                    }
                    if ($listInboundShipmentsByNextTokenResult->isSetHasNext()) 
                    {
                        echo("                HasNext\n");
                        echo("                    " . $listInboundShipmentsByNextTokenResult->getHasNext() . "\n");
                    }
                    $shipmentDataList = $listInboundShipmentsByNextTokenResult->getShipmentData();
                    foreach ($shipmentDataList as $shipmentData) {
                        echo("                ShipmentData\n");
                        if ($shipmentData->isSetShipmentId()) 
                        {
                            echo("                    ShipmentId\n");
                            echo("                        " . $shipmentData->getShipmentId() . "\n");
                        }
                        if ($shipmentData->isSetShipmentName()) 
                        {
                            echo("                    ShipmentName\n");
                            echo("                        " . $shipmentData->getShipmentName() . "\n");
                        }
                        if ($shipmentData->isSetShipmentStatus()) 
                        {
                            echo("                    ShipmentStatus\n");
                            echo("                        " . $shipmentData->getShipmentStatus() . "\n");
                        }
                        if ($shipmentData->isSetDestinationFulfillmentCenter()) 
                        {
                            echo("                    DestinationFulfillmentCenter\n");
                            echo("                        " . $shipmentData->getDestinationFulfillmentCenter() . "\n");
                        }
                        if ($shipmentData->isSetShipToAddress()) { 
                            echo("                    ShipToAddress\n");
                            $shipToAddress = $shipmentData->getShipToAddress();
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
                        if ($shipmentData->isSetShipFromAddress()) { 
                            echo("                    ShipFromAddress\n");
                            $shipFromAddress = $shipmentData->getShipFromAddress();
                            if ($shipFromAddress->isSetName()) 
                            {
                                echo("                        Name\n");
                                echo("                            " . $shipFromAddress->getName() . "\n");
                            }
                            if ($shipFromAddress->isSetAddressLine1()) 
                            {
                                echo("                        AddressLine1\n");
                                echo("                            " . $shipFromAddress->getAddressLine1() . "\n");
                            }
                            if ($shipFromAddress->isSetAddressLine2()) 
                            {
                                echo("                        AddressLine2\n");
                                echo("                            " . $shipFromAddress->getAddressLine2() . "\n");
                            }
                            if ($shipFromAddress->isSetCity()) 
                            {
                                echo("                        City\n");
                                echo("                            " . $shipFromAddress->getCity() . "\n");
                            }
                            if ($shipFromAddress->isSetStateOrProvinceCode()) 
                            {
                                echo("                        StateOrProvinceCode\n");
                                echo("                            " . $shipFromAddress->getStateOrProvinceCode() . "\n");
                            }
                            if ($shipFromAddress->isSetCountryCode()) 
                            {
                                echo("                        CountryCode\n");
                                echo("                            " . $shipFromAddress->getCountryCode() . "\n");
                            }
                            if ($shipFromAddress->isSetPostalCode()) 
                            {
                                echo("                        PostalCode\n");
                                echo("                            " . $shipFromAddress->getPostalCode() . "\n");
                            }
                        } 
                        if ($shipmentData->isSetCreateDate()) 
                        {
                            echo("                    CreateDate\n");
                            echo("                        " . $shipmentData->getCreateDate() . "\n");
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
                        