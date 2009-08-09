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
 * Fulfillment  Web Service (FWS) used to set up inbound shipments
 * to Amazon and to view inventory in the Amazon Fulfillment Network.
 * 
 * Release Notes: https://fba-inbound.amazonaws.com/doc/2007-05-10/ReleaseNotes.html
 * 
 */

interface  Amazon_FWSInbound_Interface 
{
    

            
    /**
     * Get Service Status 
     * Gets a brief status message from the service.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/GetServiceStatus.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_GetServiceStatus request or Amazon_FWSInbound_Model_GetServiceStatus object itself
     * @see Amazon_FWSInbound_Model_GetServiceStatus
     * @return Amazon_FWSInbound_Model_GetServiceStatusResponse Amazon_FWSInbound_Model_GetServiceStatusResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function getServiceStatus($request);


            
    /**
     * Get Fulfillment Identifier 
     * Gets the Fulfillment Network SKU (FNSKU) for each supplied
     * Merchant Item, creating it if needed. This operation is
     * idempotent in that it can be called multiple times without
     * any adverse effects. This operation is necessary to register
     * items for Amazon fulfillment in order to send them to Amazon,
     * but does NOT do the work of marking any offer for this item
     * as Amazon-fulfilled. Providing more than 250 Merchant Items
     * will result in an error.
     * 
     * NOTE: Use this operation over GetFulfillmentIdentifierForMSKU
     * if an offer does NOT already exist for the MerchantSKU.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/GetFulfillmentIdentifier.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_GetFulfillmentIdentifier request or Amazon_FWSInbound_Model_GetFulfillmentIdentifier object itself
     * @see Amazon_FWSInbound_Model_GetFulfillmentIdentifier
     * @return Amazon_FWSInbound_Model_GetFulfillmentIdentifierResponse Amazon_FWSInbound_Model_GetFulfillmentIdentifierResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function getFulfillmentIdentifier($request);


            
    /**
     * Get Fulfillment Identifier For MSKU 
     * Gets the Fulfillment Network SKU (FNSKU) for each supplied
     * Merchant Item, creating it if needed. This operation is
     * idempotent in that it can be called multiple times without
     * any adverse effects. This operation is necessary to register
     * items for Amazon fulfillment in order to send them to Amazon,
     * but does NOT do the work of marking any offer for this item
     * as Amazon-fulfilled. Providing more than 250 Merchant Items
     * will result in an error.
     * 
     * NOTE: Use this operation over GetFulfillmentIdentifier if
     * an offer already exists for the SKU.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/GetFulfillmentIdentifierForMSKU.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKU request or Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKU object itself
     * @see Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKU
     * @return Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function getFulfillmentIdentifierForMSKU($request);


            
    /**
     * List All Fulfillment Items 
     * Gets the first set of fulfillment items registered to a
     * merchant and returns a NextToken which can be used to
     * iterate through the remaining fulfillment items (via the
     * 'ListAllFulfillmentItemsByNextToken operation).  The
     * service will return between 1 and 'MaxCount' number of
     * items.  Please check the value of 'HasNext' to determine
     * whether there were some items which were not returned.  If
     * 'IncludeInactive' is set to true, it will return both
     * active and inactive mappings (this parameter defaults to
     * false).  Inactive mappings can be used to track inventory in
     * Amazon's fulfillment centers although they can't be fulfilled.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/ListAllFulfillmentItems.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_ListAllFulfillmentItems request or Amazon_FWSInbound_Model_ListAllFulfillmentItems object itself
     * @see Amazon_FWSInbound_Model_ListAllFulfillmentItems
     * @return Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function listAllFulfillmentItems($request);


            
    /**
     * List All Fulfillment Items By Next Token 
     * Gets the next set of fulfillment items registered to a
     * merchant and returns a NextToken which can be used to
     * iterate through the remaining fulfillment items.  The
     * service will return between 1 and 'MaxCount' number of
     * items.  Please check the value of 'HasNext' to determine
     * whether there were some items which were not returned.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/ListAllFulfillmentItemsByNextToken.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextToken request or Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextToken object itself
     * @see Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextToken
     * @return Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function listAllFulfillmentItemsByNextToken($request);


            
    /**
     * Get Fulfillment Item By MSKU 
     * Gets fulfillment item data for the provided Merchant SKUs.  If
     * any of the provided MSKUs are invalid (e.g. does not have an
     * assigned Fulfillment Network SKU) they will be ignored and only
     * the valid SKUs will be returned.  NOTE: Providing more than
     * 2,000 MSKUs will result in an error.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/GetFulfillmentItemByMSKU.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_GetFulfillmentItemByMSKU request or Amazon_FWSInbound_Model_GetFulfillmentItemByMSKU object itself
     * @see Amazon_FWSInbound_Model_GetFulfillmentItemByMSKU
     * @return Amazon_FWSInbound_Model_GetFulfillmentItemByMSKUResponse Amazon_FWSInbound_Model_GetFulfillmentItemByMSKUResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function getFulfillmentItemByMSKU($request);


            
    /**
     * Get Fulfillment Item By FNSKU 
     * Gets fulfillment item data for the provided Fulfillment
     * Network SKUs.  If any of the provided FNSKUs are invalid
     * they will be ignored and only the valid SKUs will be returned.
     * NOTE: Providing more than 2,000 FNSKUs will result in an error.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/GetFulfillmentItemByFNSKU.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKU request or Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKU object itself
     * @see Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKU
     * @return Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function getFulfillmentItemByFNSKU($request);


            
    /**
     * Get Inbound Shipment Preview 
     * Returns the information needed to create a set of shipments
     * for the given collection of items and source address.  When
     * all the items are not all in the same category (e.g. some
     * sortable, some non-sortable) it may be necessary to create
     * multiple shipments (one for each of the shipment groups
     * returned).
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/GetInboundShipmentPreview.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_GetInboundShipmentPreview request or Amazon_FWSInbound_Model_GetInboundShipmentPreview object itself
     * @see Amazon_FWSInbound_Model_GetInboundShipmentPreview
     * @return Amazon_FWSInbound_Model_GetInboundShipmentPreviewResponse Amazon_FWSInbound_Model_GetInboundShipmentPreviewResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function getInboundShipmentPreview($request);


            
    /**
     * Put Inbound Shipment 
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
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/PutInboundShipment.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_PutInboundShipment request or Amazon_FWSInbound_Model_PutInboundShipment object itself
     * @see Amazon_FWSInbound_Model_PutInboundShipment
     * @return Amazon_FWSInbound_Model_PutInboundShipmentResponse Amazon_FWSInbound_Model_PutInboundShipmentResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function putInboundShipment($request);


            
    /**
     * Put Inbound Shipment Items 
     * Adds line items to the pre-existing shipment specified by the
     * ShipmentId. If the MerchantSKU is already in the shipment, then
     * that particular line item will be replaced. Call
     * PutInboundShipment to create the shipment to be worked on.
     * 
     * This call will return an exception when attempting to add line
     * items to a shipment that is in a status other than 'Working'.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/PutInboundShipmentItems.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_PutInboundShipmentItems request or Amazon_FWSInbound_Model_PutInboundShipmentItems object itself
     * @see Amazon_FWSInbound_Model_PutInboundShipmentItems
     * @return Amazon_FWSInbound_Model_PutInboundShipmentItemsResponse Amazon_FWSInbound_Model_PutInboundShipmentItemsResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function putInboundShipmentItems($request);


            
    /**
     * Delete Inbound Shipment Items 
     * Removes line items from the pre-existing shipment specified by the
     * ShipmentId. If the MerchantSKU is not currently a part of the
     * shipment, then that particular line item will be ignored and all
     * others will still be processed. Call PutInboundShipment to create
     * the shipment to be worked on.
     * 
     * This call will return an exception when attempting to remove line
     * items from a shipment that is in a status other than 'Working'.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/DeleteInboundShipmentItems.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_DeleteInboundShipmentItems request or Amazon_FWSInbound_Model_DeleteInboundShipmentItems object itself
     * @see Amazon_FWSInbound_Model_DeleteInboundShipmentItems
     * @return Amazon_FWSInbound_Model_DeleteInboundShipmentItemsResponse Amazon_FWSInbound_Model_DeleteInboundShipmentItemsResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function deleteInboundShipmentItems($request);


            
    /**
     * List Inbound Shipments 
     * Get the first set of inbound shipments created by a merchant
     * according to the specified query parameters.  A NextToken is also
     * returned to further iterate through the merchant's remaining
     * shipments.  The service will return between 1 and 'MaxCount' number
     * of items.  Please check the value of 'HasNext' to determine
     * whether there were some items which were not returned.  If
     * ShipmentStatus is not set, then all shipments for a merchant will
     * be returned, otherwise only shipments in the specified status will
     * be returned.  If CreatedBefore is set, only shipments which were
     * created before the specified date will be returned (if left
     * unspecified, it defaults to "now").  If CreatedAfter is set, only
     * shipments which were created after the specified date will be
     * returned (if left unspecified, it defaults to the epoch).
     * NOTE: The CreatedBefore and CreatedAfter functionality is not
     * currently implemented and defaults to the values mentioned above.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/ListInboundShipments.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_ListInboundShipments request or Amazon_FWSInbound_Model_ListInboundShipments object itself
     * @see Amazon_FWSInbound_Model_ListInboundShipments
     * @return Amazon_FWSInbound_Model_ListInboundShipmentsResponse Amazon_FWSInbound_Model_ListInboundShipmentsResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function listInboundShipments($request);


            
    /**
     * List Inbound Shipments By Next Token 
     * Gets the next set of inbound shipments created by a
     * merchant and returns the next NextToken which can be used to
     * iterate through the remaining inbound shipments.  The
     * service will return between 1 and 'MaxCount' number of
     * items.  Please check the value of 'HasNext' to determine
     * whether there were some items which were not returned.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/ListInboundShipmentsByNextToken.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_ListInboundShipmentsByNextToken request or Amazon_FWSInbound_Model_ListInboundShipmentsByNextToken object itself
     * @see Amazon_FWSInbound_Model_ListInboundShipmentsByNextToken
     * @return Amazon_FWSInbound_Model_ListInboundShipmentsByNextTokenResponse Amazon_FWSInbound_Model_ListInboundShipmentsByNextTokenResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function listInboundShipmentsByNextToken($request);


            
    /**
     * Get Inbound Shipment Data 
     * Gets the merchant's inbound shipment header information for the
     * given ShipmentId.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/GetInboundShipmentData.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_GetInboundShipmentData request or Amazon_FWSInbound_Model_GetInboundShipmentData object itself
     * @see Amazon_FWSInbound_Model_GetInboundShipmentData
     * @return Amazon_FWSInbound_Model_GetInboundShipmentDataResponse Amazon_FWSInbound_Model_GetInboundShipmentDataResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function getInboundShipmentData($request);


            
    /**
     * Put Inbound Shipment Data 
     * Adds or replaces the merchant's inbound shipment header information for the
     * given ShipmentId.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/PutInboundShipmentData.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_PutInboundShipmentData request or Amazon_FWSInbound_Model_PutInboundShipmentData object itself
     * @see Amazon_FWSInbound_Model_PutInboundShipmentData
     * @return Amazon_FWSInbound_Model_PutInboundShipmentDataResponse Amazon_FWSInbound_Model_PutInboundShipmentDataResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function putInboundShipmentData($request);


            
    /**
     * List Inbound Shipment Items 
     * Gets the first set of inbound shipment items for the given
     * ShipmentId. A NextToken is also returned to further iterate
     * through the merchant's remaining inbound shipment items.
     * The service will return between 1 and 'MaxCount' number of
     * shipment items.  Please check the value of 'HasNext' to
     * determine whether there are some items which were not
     * returned. To get the next set of inbound shipment items, you
     * must call ListInboundShipmentItemsByNextToken and pass in
     * the 'NextToken' this call returned.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/ListInboundShipmentItems.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_ListInboundShipmentItems request or Amazon_FWSInbound_Model_ListInboundShipmentItems object itself
     * @see Amazon_FWSInbound_Model_ListInboundShipmentItems
     * @return Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function listInboundShipmentItems($request);


            
    /**
     * List Inbound Shipment Items By Next Token 
     * Gets the next set of inbound shipment items and returns the
     * NextToken which can be used to iterate through the remaining
     * inbound shipment items. The service will return between 1 and
     * 'MaxCount' number of shipment items.  Please check the value
     * of 'HasNext' to determine whether there are some items which
     * were not returned. You must first call
     * ListInboundShipmentItems to get a 'NextToken'.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/ListInboundShipmentItemsByNextToken.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextToken request or Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextToken object itself
     * @see Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextToken
     * @return Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextTokenResponse Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextTokenResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function listInboundShipmentItemsByNextToken($request);


            
    /**
     * Set Inbound Shipment Status 
     * Sets the inbound shipment status to the specified ShipmentStatus.
     * Valid statuses are 'Shipped' (the shipment has left the merchant)
     * or 'Cancelled'.
     * Once a shipment's status has been set to 'Shipped', the merchant
     * may make no further changes except to update the status to
     * 'Cancelled'.  Any items not received at the time a shipment is
     * 'Cancelled' will be put into problem receive at the
     * fulfillment center.
     * This operation will simply return a requestId upon success,
     * otherwise an explicit error will be returned.
     *   
     * @see http://docs.amazonwebservices.com/FWSInbound/2007-05-10/DG/SetInboundShipmentStatus.html      
     * @param mixed $request array of parameters for Amazon_FWSInbound_Model_SetInboundShipmentStatus request or Amazon_FWSInbound_Model_SetInboundShipmentStatus object itself
     * @see Amazon_FWSInbound_Model_SetInboundShipmentStatus
     * @return Amazon_FWSInbound_Model_SetInboundShipmentStatusResponse Amazon_FWSInbound_Model_SetInboundShipmentStatusResponse
     *
     * @throws Amazon_FWSInbound_Exception
     */
    public function setInboundShipmentStatus($request);

}