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
 * Get Fulfillment Item By MSKU  Sample
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
 * sample for Get Fulfillment Item By MSKU Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FWSInbound_Model_GetFulfillmentItemByMSKU 
 // object or array of parameters
 // invokeGetFulfillmentItemByMSKU($service, $request);

                                            
/**
  * Get Fulfillment Item By MSKU Action Sample
  * Gets fulfillment item data for the provided Merchant SKUs.  If
  * any of the provided MSKUs are invalid (e.g. does not have an
  * assigned Fulfillment Network SKU) they will be ignored and only
  * the valid SKUs will be returned.  NOTE: Providing more than
  * 2,000 MSKUs will result in an error.
  *   
  * @param Amazon_FWSInbound_Interface $service instance of Amazon_FWSInbound_Interface
  * @param mixed $request Amazon_FWSInbound_Model_GetFulfillmentItemByMSKU or array of parameters
  */
  function invokeGetFulfillmentItemByMSKU(Amazon_FWSInbound_Interface $service, $request) 
  {
      try {
              $response = $service->getFulfillmentItemByMSKU($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetFulfillmentItemByMSKUResponse\n");
                if ($response->isSetGetFulfillmentItemByMSKUResult()) { 
                    echo("            GetFulfillmentItemByMSKUResult\n");
                    $getFulfillmentItemByMSKUResult = $response->getGetFulfillmentItemByMSKUResult();
                    $fulfillmentItemList = $getFulfillmentItemByMSKUResult->getFulfillmentItem();
                    foreach ($fulfillmentItemList as $fulfillmentItem) {
                        echo("                FulfillmentItem\n");
                        if ($fulfillmentItem->isSetASIN()) 
                        {
                            echo("                    ASIN\n");
                            echo("                        " . $fulfillmentItem->getASIN() . "\n");
                        }
                        if ($fulfillmentItem->isSetCondition()) 
                        {
                            echo("                    Condition\n");
                            echo("                        " . $fulfillmentItem->getCondition() . "\n");
                        }
                        if ($fulfillmentItem->isSetMerchantSKU()) 
                        {
                            echo("                    MerchantSKU\n");
                            echo("                        " . $fulfillmentItem->getMerchantSKU() . "\n");
                        }
                        if ($fulfillmentItem->isSetFulfillmentNetworkSKU()) 
                        {
                            echo("                    FulfillmentNetworkSKU\n");
                            echo("                        " . $fulfillmentItem->getFulfillmentNetworkSKU() . "\n");
                        }
                        if ($fulfillmentItem->isSetIsActive()) 
                        {
                            echo("                    IsActive\n");
                            echo("                        " . $fulfillmentItem->getIsActive() . "\n");
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
                                                    