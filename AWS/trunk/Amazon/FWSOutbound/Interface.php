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
 * Amazon Web Service used to create and manage outbound shipments from
 * the Amazon Fulfillment Network.
 * 
 */

interface  Amazon_FWSOutbound_Interface 
{
    

            
    /**
     * Get Service Status 
     * Gets a brief status message from the service.
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/GetServiceStatus.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_GetServiceStatus request or Amazon_FWSOutbound_Model_GetServiceStatus object itself
     * @see Amazon_FWSOutbound_Model_GetServiceStatus
     * @return Amazon_FWSOutbound_Model_GetServiceStatusResponse Amazon_FWSOutbound_Model_GetServiceStatusResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function getServiceStatus($request);


            
    /**
     * Create Fulfillment Order 
     * Request for Amazon to send items from the merchant's inventory to a
     * destination address.
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/CreateFulfillmentOrder.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_CreateFulfillmentOrder request or Amazon_FWSOutbound_Model_CreateFulfillmentOrder object itself
     * @see Amazon_FWSOutbound_Model_CreateFulfillmentOrder
     * @return Amazon_FWSOutbound_Model_CreateFulfillmentOrderResponse Amazon_FWSOutbound_Model_CreateFulfillmentOrderResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function createFulfillmentOrder($request);


            
    /**
     * Cancel Fulfillment Order 
     * Request for Amazon to no longer attempt to fulfill an existing
     * fulfillment order. Amazon will attempt to stop fulfillment of all
     * items that haven't already shipped, but cannot guarantee success.
     * Note: Items that have already shipped cannot be cancelled.
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/CancelFulfillmentOrder.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_CancelFulfillmentOrder request or Amazon_FWSOutbound_Model_CancelFulfillmentOrder object itself
     * @see Amazon_FWSOutbound_Model_CancelFulfillmentOrder
     * @return Amazon_FWSOutbound_Model_CancelFulfillmentOrderResponse Amazon_FWSOutbound_Model_CancelFulfillmentOrderResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function cancelFulfillmentOrder($request);


            
    /**
     * Get Fulfillment Order 
     * Get detailed information about a FulfillmentOrder.  This includes the
     * original fulfillment order request, the status of the order and its
     * items in Amazon's fulfillment network, and the shipments that have been
     * generated to fulfill the order.
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/GetFulfillmentOrder.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_GetFulfillmentOrder request or Amazon_FWSOutbound_Model_GetFulfillmentOrder object itself
     * @see Amazon_FWSOutbound_Model_GetFulfillmentOrder
     * @return Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function getFulfillmentOrder($request);


            
    /**
     * List All Fulfillment Orders 
     * Gets the first set of fulfillment orders that are currently being
     * fulfilled or that were being fulfilled at some time in the past
     * (as specified by the query parameters). Also returns a NextToken
     * which can be used iterate through the remaining fulfillment orders
     * (via the ListAllFulfillmentOrdersByNextToken operation).
     * The service will return between 0 and 'MaxCount' fulfillment orders.
     * Please check the value of 'HasNext' to determine whether there may be
     * additional fulfillment orders to list.
     * If the QueryStartDateTime is set, the results will include all orders
     * currently being fulfilled, and all orders that were being fulfilled
     * since that date and time. If it is not set, it defaults to 72 hours
     * prior to "now".
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/ListAllFulfillmentOrders.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_ListAllFulfillmentOrders request or Amazon_FWSOutbound_Model_ListAllFulfillmentOrders object itself
     * @see Amazon_FWSOutbound_Model_ListAllFulfillmentOrders
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function listAllFulfillmentOrders($request);


            
    /**
     * List All Fulfillment Orders By Next Token 
     * Gets the next set of fulfillment orders that are currently being
     * being fulfilled or that were being fulfilled at some time in the
     * past.
     * The service will return between 0 and 'MaxCount' fulfillment orders.
     * Please check the value of 'HasNext' to determine whether there may be
     * additional fulfillment orders to list.
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/ListAllFulfillmentOrdersByNextToken.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextToken request or Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextToken object itself
     * @see Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextToken
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextTokenResponse Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextTokenResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function listAllFulfillmentOrdersByNextToken($request);

}