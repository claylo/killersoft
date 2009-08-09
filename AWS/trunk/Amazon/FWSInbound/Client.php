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
 *  @see Amazon_FWSInbound_Interface
 */
require_once ('Amazon/FWSInbound/Interface.php'); 

/**
 * Fulfillment  Web Service (FWS) used to set up inbound shipments
 * to Amazon and to view inventory in the Amazon Fulfillment Network.
 * 
 * Release Notes: https://fba-inbound.amazonaws.com/doc/2007-05-10/ReleaseNotes.html
 * 
 * Amazon_FWSInbound_Client is an implementation of Amazon_FWSInbound
 *
 */
class Amazon_FWSInbound_Client implements Amazon_FWSInbound_Interface
{

    const SERVICE_VERSION = '2007-05-10';

    /** @var string */
    private  $_awsAccessKeyId = null;
    
    /** @var string */
    private  $_awsSecretAccessKey = null;
    
    /** @var array */
    private  $_config = array ('ServiceURL' => 'https://fba-inbound.amazonaws.com', 
                               'UserAgent' => 'Amazon FWSInbound PHP5 Library',
                               'SignatureVersion' => 1,
                               'ProxyHost' => null,
                               'ProxyPort' => -1,
                               'MaxErrorRetry' => 3       
                               );
   
    /**
     * Construct new Client
     * 
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options. 
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct($awsAccessKeyId, $awsSecretAccessKey, $config = null)
    {
        iconv_set_encoding('output_encoding', 'UTF-8');
        iconv_set_encoding('input_encoding', 'UTF-8');
        iconv_set_encoding('internal_encoding', 'UTF-8');

        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) $this->_config = array_merge($this->_config, $config);
    }

    // Public API ------------------------------------------------------------//


            
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
    public function getServiceStatus($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_GetServiceStatus) {
            require_once ('Amazon/FWSInbound/Model/GetServiceStatus.php');
            $request = new Amazon_FWSInbound_Model_GetServiceStatus($request);
        }
        require_once ('Amazon/FWSInbound/Model/GetServiceStatusResponse.php');
        return Amazon_FWSInbound_Model_GetServiceStatusResponse::fromXML($this->_invoke($this->_convertGetServiceStatus($request)));
    }


            
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
    public function getFulfillmentIdentifier($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_GetFulfillmentIdentifier) {
            require_once ('Amazon/FWSInbound/Model/GetFulfillmentIdentifier.php');
            $request = new Amazon_FWSInbound_Model_GetFulfillmentIdentifier($request);
        }
        require_once ('Amazon/FWSInbound/Model/GetFulfillmentIdentifierResponse.php');
        return Amazon_FWSInbound_Model_GetFulfillmentIdentifierResponse::fromXML($this->_invoke($this->_convertGetFulfillmentIdentifier($request)));
    }


            
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
    public function getFulfillmentIdentifierForMSKU($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKU) {
            require_once ('Amazon/FWSInbound/Model/GetFulfillmentIdentifierForMSKU.php');
            $request = new Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKU($request);
        }
        require_once ('Amazon/FWSInbound/Model/GetFulfillmentIdentifierForMSKUResponse.php');
        return Amazon_FWSInbound_Model_GetFulfillmentIdentifierForMSKUResponse::fromXML($this->_invoke($this->_convertGetFulfillmentIdentifierForMSKU($request)));
    }


            
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
    public function listAllFulfillmentItems($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_ListAllFulfillmentItems) {
            require_once ('Amazon/FWSInbound/Model/ListAllFulfillmentItems.php');
            $request = new Amazon_FWSInbound_Model_ListAllFulfillmentItems($request);
        }
        require_once ('Amazon/FWSInbound/Model/ListAllFulfillmentItemsResponse.php');
        return Amazon_FWSInbound_Model_ListAllFulfillmentItemsResponse::fromXML($this->_invoke($this->_convertListAllFulfillmentItems($request)));
    }


            
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
    public function listAllFulfillmentItemsByNextToken($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextToken) {
            require_once ('Amazon/FWSInbound/Model/ListAllFulfillmentItemsByNextToken.php');
            $request = new Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextToken($request);
        }
        require_once ('Amazon/FWSInbound/Model/ListAllFulfillmentItemsByNextTokenResponse.php');
        return Amazon_FWSInbound_Model_ListAllFulfillmentItemsByNextTokenResponse::fromXML($this->_invoke($this->_convertListAllFulfillmentItemsByNextToken($request)));
    }


            
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
    public function getFulfillmentItemByMSKU($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_GetFulfillmentItemByMSKU) {
            require_once ('Amazon/FWSInbound/Model/GetFulfillmentItemByMSKU.php');
            $request = new Amazon_FWSInbound_Model_GetFulfillmentItemByMSKU($request);
        }
        require_once ('Amazon/FWSInbound/Model/GetFulfillmentItemByMSKUResponse.php');
        return Amazon_FWSInbound_Model_GetFulfillmentItemByMSKUResponse::fromXML($this->_invoke($this->_convertGetFulfillmentItemByMSKU($request)));
    }


            
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
    public function getFulfillmentItemByFNSKU($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKU) {
            require_once ('Amazon/FWSInbound/Model/GetFulfillmentItemByFNSKU.php');
            $request = new Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKU($request);
        }
        require_once ('Amazon/FWSInbound/Model/GetFulfillmentItemByFNSKUResponse.php');
        return Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKUResponse::fromXML($this->_invoke($this->_convertGetFulfillmentItemByFNSKU($request)));
    }


            
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
    public function getInboundShipmentPreview($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_GetInboundShipmentPreview) {
            require_once ('Amazon/FWSInbound/Model/GetInboundShipmentPreview.php');
            $request = new Amazon_FWSInbound_Model_GetInboundShipmentPreview($request);
        }
        require_once ('Amazon/FWSInbound/Model/GetInboundShipmentPreviewResponse.php');
        return Amazon_FWSInbound_Model_GetInboundShipmentPreviewResponse::fromXML($this->_invoke($this->_convertGetInboundShipmentPreview($request)));
    }


            
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
    public function putInboundShipment($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_PutInboundShipment) {
            require_once ('Amazon/FWSInbound/Model/PutInboundShipment.php');
            $request = new Amazon_FWSInbound_Model_PutInboundShipment($request);
        }
        require_once ('Amazon/FWSInbound/Model/PutInboundShipmentResponse.php');
        return Amazon_FWSInbound_Model_PutInboundShipmentResponse::fromXML($this->_invoke($this->_convertPutInboundShipment($request)));
    }


            
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
    public function putInboundShipmentItems($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_PutInboundShipmentItems) {
            require_once ('Amazon/FWSInbound/Model/PutInboundShipmentItems.php');
            $request = new Amazon_FWSInbound_Model_PutInboundShipmentItems($request);
        }
        require_once ('Amazon/FWSInbound/Model/PutInboundShipmentItemsResponse.php');
        return Amazon_FWSInbound_Model_PutInboundShipmentItemsResponse::fromXML($this->_invoke($this->_convertPutInboundShipmentItems($request)));
    }


            
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
    public function deleteInboundShipmentItems($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_DeleteInboundShipmentItems) {
            require_once ('Amazon/FWSInbound/Model/DeleteInboundShipmentItems.php');
            $request = new Amazon_FWSInbound_Model_DeleteInboundShipmentItems($request);
        }
        require_once ('Amazon/FWSInbound/Model/DeleteInboundShipmentItemsResponse.php');
        return Amazon_FWSInbound_Model_DeleteInboundShipmentItemsResponse::fromXML($this->_invoke($this->_convertDeleteInboundShipmentItems($request)));
    }


            
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
    public function listInboundShipments($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_ListInboundShipments) {
            require_once ('Amazon/FWSInbound/Model/ListInboundShipments.php');
            $request = new Amazon_FWSInbound_Model_ListInboundShipments($request);
        }
        require_once ('Amazon/FWSInbound/Model/ListInboundShipmentsResponse.php');
        return Amazon_FWSInbound_Model_ListInboundShipmentsResponse::fromXML($this->_invoke($this->_convertListInboundShipments($request)));
    }


            
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
    public function listInboundShipmentsByNextToken($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_ListInboundShipmentsByNextToken) {
            require_once ('Amazon/FWSInbound/Model/ListInboundShipmentsByNextToken.php');
            $request = new Amazon_FWSInbound_Model_ListInboundShipmentsByNextToken($request);
        }
        require_once ('Amazon/FWSInbound/Model/ListInboundShipmentsByNextTokenResponse.php');
        return Amazon_FWSInbound_Model_ListInboundShipmentsByNextTokenResponse::fromXML($this->_invoke($this->_convertListInboundShipmentsByNextToken($request)));
    }


            
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
    public function getInboundShipmentData($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_GetInboundShipmentData) {
            require_once ('Amazon/FWSInbound/Model/GetInboundShipmentData.php');
            $request = new Amazon_FWSInbound_Model_GetInboundShipmentData($request);
        }
        require_once ('Amazon/FWSInbound/Model/GetInboundShipmentDataResponse.php');
        return Amazon_FWSInbound_Model_GetInboundShipmentDataResponse::fromXML($this->_invoke($this->_convertGetInboundShipmentData($request)));
    }


            
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
    public function putInboundShipmentData($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_PutInboundShipmentData) {
            require_once ('Amazon/FWSInbound/Model/PutInboundShipmentData.php');
            $request = new Amazon_FWSInbound_Model_PutInboundShipmentData($request);
        }
        require_once ('Amazon/FWSInbound/Model/PutInboundShipmentDataResponse.php');
        return Amazon_FWSInbound_Model_PutInboundShipmentDataResponse::fromXML($this->_invoke($this->_convertPutInboundShipmentData($request)));
    }


            
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
    public function listInboundShipmentItems($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_ListInboundShipmentItems) {
            require_once ('Amazon/FWSInbound/Model/ListInboundShipmentItems.php');
            $request = new Amazon_FWSInbound_Model_ListInboundShipmentItems($request);
        }
        require_once ('Amazon/FWSInbound/Model/ListInboundShipmentItemsResponse.php');
        return Amazon_FWSInbound_Model_ListInboundShipmentItemsResponse::fromXML($this->_invoke($this->_convertListInboundShipmentItems($request)));
    }


            
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
    public function listInboundShipmentItemsByNextToken($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextToken) {
            require_once ('Amazon/FWSInbound/Model/ListInboundShipmentItemsByNextToken.php');
            $request = new Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextToken($request);
        }
        require_once ('Amazon/FWSInbound/Model/ListInboundShipmentItemsByNextTokenResponse.php');
        return Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextTokenResponse::fromXML($this->_invoke($this->_convertListInboundShipmentItemsByNextToken($request)));
    }


            
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
    public function setInboundShipmentStatus($request) 
    {
        if (!$request instanceof Amazon_FWSInbound_Model_SetInboundShipmentStatus) {
            require_once ('Amazon/FWSInbound/Model/SetInboundShipmentStatus.php');
            $request = new Amazon_FWSInbound_Model_SetInboundShipmentStatus($request);
        }
        require_once ('Amazon/FWSInbound/Model/SetInboundShipmentStatusResponse.php');
        return Amazon_FWSInbound_Model_SetInboundShipmentStatusResponse::fromXML($this->_invoke($this->_convertSetInboundShipmentStatus($request)));
    }

        // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        $actionName = $parameters["Action"];
        $response = array();
        $responseBody = null;
        $statusCode = 200;

        /* Submit the request and read response body */
        try {
        
            /* Add required request parameters */
            $parameters = $this->_addRequiredParameters($parameters);

            $shouldRetry = true;
            $retries = 0;
            do {
                try {
                        $response = $this->_httpPost($parameters);
                        if ($response['Status'] === 200) {
                            $shouldRetry = false;
                        } else {
                            if ($response['Status'] === 500 || $response['Status'] === 503) {
                                $shouldRetry = true;
                                $this->_pauseOnRetry(++$retries, $response['Status']);
                            } else {    
                                throw $this->_reportAnyErrors($response['ResponseBody'], $response['Status']);
                            }
                       }     
                /* Rethrow on deserializer error */
                } catch (Exception $e) {
                    require_once ('Amazon/FWSInbound/Exception.php');
                    if ($e instanceof Amazon_FWSInbound_Exception) {
                        throw $e;
                    } else {
                        require_once ('Amazon/FWSInbound/Exception.php');
                        throw new Amazon_FWSInbound_Exception(array('Exception' => $e, 'Message' => $e->getMessage()));   
                    }
                }

            } while ($shouldRetry);

        } catch (Amazon_FWSInbound_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Amazon_FWSInbound_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }

        return $response['ResponseBody'];
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function _reportAnyErrors($responseBody, $status, Exception $e =  null)
    {
        $ex = null;
        if (!is_null($responseBody) && strpos($responseBody, '<') === 0) {
            if (preg_match('@<RequestId>(.*)</RequestId>.*<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?@mi',
                $responseBody, $errorMatcherOne)) {
                                
                $requestId = $errorMatcherOne[1];
                $code = $errorMatcherOne[2];
                $message = $errorMatcherOne[3];

                require_once ('Amazon/FWSInbound/Exception.php');
                $ex = new Amazon_FWSInbound_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code, 
                                                           'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));

            } elseif (preg_match('@<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?.*<RequestID>(.*)</RequestID>@mi',
                $responseBody, $errorMatcherTwo)) {
                                
                $code = $errorMatcherTwo[1];  
                $message = $errorMatcherTwo[2];  
                $requestId = $errorMatcherTwo[4];   
                require_once ('Amazon/FWSInbound/Exception.php');
                $ex = new Amazon_FWSInbound_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code, 
                                                              'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));
            } elseif (preg_match('@<Error><Type>(.*)</Type><Code>(.*)</Code><Message>(.*)</Message>.*</Error>.*(<Error>)?.*<RequestId>(.*)</RequestId>@mi',
                $responseBody, $errorMatcherThree)) {
                
                $type = $errorMatcherTwo[1];
                $code = $errorMatcherTwo[2];  
                $message = $errorMatcherTwo[3];  
                $requestId = $errorMatcherTwo[5];   
                require_once ('Amazon/FWSInbound/Exception.php');
                $ex = new Amazon_FWSInbound_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code, 
                                                              'ErrorType' => $type, 'RequestId' => $requestId, 'XML' => $responseBody));
            
            } else {
                require_once ('Amazon/FWSInbound/Exception.php');
                $ex = new Amazon_FWSInbound_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
            }
        } else {
            require_once ('Amazon/FWSInbound/Exception.php');
            $ex = new Amazon_FWSInbound_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
        }
        return $ex;
    }



    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     * 
     */
    private function _httpPost(array $parameters) 
    {
        
        $query = $this->_getParametersAsString($parameters);
        $url = parse_url ($this->_config['ServiceURL']);
        $post  = "POST / HTTP/1.0\r\n";
        $post .= "Host: " . $url['host'] . "\r\n";
        $post .= "Content-Type: application/x-www-form-urlencoded; charset=utf-8\r\n";
        $post .= "Content-Length: " . strlen($query) . "\r\n";
        $post .= "User-Agent: " . $this->_config['UserAgent'] . "\r\n";
        $post .= "\r\n";
        $post .= $query;
        
        $port = $url['port'];
        $scheme = '';
        
        switch ($url['scheme']) {
            case 'https':
                $scheme = 'ssl://';
                $port = $port === null ? 443 : $port;
                break;
            default:
                $scheme = '';
                $port = 80;   
        }
              
        $response = '';
        if ($socket = @fsockopen($scheme . $url['host'], $port, $errno, $errstr, 10)) {
  
            fwrite($socket, $post);

            while (!feof($socket)) {
                $response .= fgets($socket, 1160);
            }
            fclose($socket);
        
            list($other, $responseBody) = explode("\r\n\r\n", $response, 2);
            $other = preg_split("/\r\n|\n|\r/", $other);
            list($protocol, $code, $text) = explode(' ', trim(array_shift($other)), 3);
        } else {
            throw new Exception ("Unable to establish connection to host " . $url['host'] . " $errstr");
        }
        return array ('Status' => (int)$code, 'ResponseBody' => $responseBody);
    }

    /**
     * Exponential sleep on failed request
     * @param retries current retry
     * @throws Amazon_FWSInbound_Exception if maximum number of retries has been reached
     */
    private function _pauseOnRetry($retries, $status)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000) ;
            usleep($delay);
        } else {
            require_once ('Amazon/FWSInbound/Exception.php');
            throw new Amazon_FWSInbound_Exception (array ('Message' => "Maximum number of retry attempts reached :  $retries", 'StatusCode' => $status));
        }
    }

    /**
     * Add authentication related and version parameters
     */
    private function _addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId'] = $this->_awsAccessKeyId;
        $parameters['Timestamp'] = $this->_getFormattedTimestamp();
        $parameters['Version'] = self::SERVICE_VERSION;      
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion']; 
        $parameters['Signature'] = $this->_signParameters($parameters, $this->_awsSecretAccessKey); 
        
        return $parameters;
    }

    /**
     * Convert paremeters to Url encoded query string
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = array();
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . urlencode($value);
        }
        return implode('&', $queryParameters);
    }  


    /**
      * Computes RFC 2104-compliant HMAC signature for request parameters
      * Implements AWS Signature, as per following spec:
      *
      * If Signature Version is 0, it signs concatenated Action and Timestamp
      *
      * If Signature Version is 1, it performs the following:
      *
      * Sorts all  parameters (including SignatureVersion and excluding Signature,
      * the value of which is being created), ignoring case.
      *
      * Iterate over the sorted list and append the parameter name (in original case)
      * and then its value. It will not URL-encode the parameter values before
      * constructing this string. There are no separators.
      */
    private function _signParameters(array $parameters, $key)
    {
        $signatureVersion = $parameters['SignatureVersion'];
        $data = '';

        if (0 === $signatureVersion) {
            $data .=  $parameters['Action'] .  $parameters['Timestamp'];
        } elseif (1 === $signatureVersion) {
            uksort($parameters, 'strcasecmp');
            unset ($parameters['Signature']);
                
            foreach ($parameters as $parameterName => $parameterValue) {
                $data .= $parameterName . $parameterValue;
            }
        } else {
            throw new Exception("Invalid Signature Version specified");
        }
        return $this->_sign($data, $key);
    }


    /**
     * Computes RFC 2104-compliant HMAC signature.
     */
    private function _sign($data, $key)
    {
        return base64_encode (
            pack("H*", sha1((str_pad($key, 64, chr(0x00))
            ^(str_repeat(chr(0x5c), 64))) .
            pack("H*", sha1((str_pad($key, 64, chr(0x00))
            ^(str_repeat(chr(0x36), 64))) . $data))))
        );
    }


    /**
     * Formats date as ISO 8601 timestamp
     */
    private function _getFormattedTimestamp()
    {
        return gmdate("Y-m-d\TH:i:s.\\0\\0\\0\\Z", time());
    }

        
    /**
     * Convert GetServiceStatus to name value pairs
     */
    private function _convertGetServiceStatus($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetServiceStatus';

        return $parameters;
    }
        
                        
    /**
     * Convert GetFulfillmentIdentifier to name value pairs
     */
    private function _convertGetFulfillmentIdentifier($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetFulfillmentIdentifier';
        foreach ($request->getMerchantItem() as $merchantItemIndex => $merchantItem) {
            if ($merchantItem->isSetASIN()) {
                $parameters['MerchantItem' . '.'  . ($merchantItemIndex + 1) . '.' . 'ASIN'] =  $merchantItem->getASIN();
            }
            if ($merchantItem->isSetCondition()) {
                $parameters['MerchantItem' . '.'  . ($merchantItemIndex + 1) . '.' . 'Condition'] =  $merchantItem->getCondition();
            }
            if ($merchantItem->isSetMerchantSKU()) {
                $parameters['MerchantItem' . '.'  . ($merchantItemIndex + 1) . '.' . 'MerchantSKU'] =  $merchantItem->getMerchantSKU();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert GetFulfillmentIdentifierForMSKU to name value pairs
     */
    private function _convertGetFulfillmentIdentifierForMSKU($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetFulfillmentIdentifierForMSKU';
        foreach  ($request->getMerchantSKU() as $merchantSKUIndex => $merchantSKU) {
            $parameters["GetFulfillmentIdentifierForMSKU" . "." . "MerchantSKU" . "."  . ($merchantSKUIndex + 1)] =  $merchantSKU;
        }	

        return $parameters;
    }
        
                        
    /**
     * Convert ListAllFulfillmentItems to name value pairs
     */
    private function _convertListAllFulfillmentItems($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListAllFulfillmentItems';
        if ($request->isSetIncludeInactive()) {
            $parameters['IncludeInactive'] =  $request->getIncludeInactive() ? "true" : "false";
        }
        if ($request->isSetMaxCount()) {
            $parameters['MaxCount'] =  $request->getMaxCount();
        }

        return $parameters;
    }
        
                        
    /**
     * Convert ListAllFulfillmentItemsByNextToken to name value pairs
     */
    private function _convertListAllFulfillmentItemsByNextToken($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListAllFulfillmentItemsByNextToken';
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }
        
                        
    /**
     * Convert GetFulfillmentItemByMSKU to name value pairs
     */
    private function _convertGetFulfillmentItemByMSKU($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetFulfillmentItemByMSKU';
        foreach  ($request->getMerchantSKU() as $merchantSKUIndex => $merchantSKU) {
            $parameters["GetFulfillmentItemByMSKU" . "." . "MerchantSKU" . "."  . ($merchantSKUIndex + 1)] =  $merchantSKU;
        }	

        return $parameters;
    }
        
                        
    /**
     * Convert GetFulfillmentItemByFNSKU to name value pairs
     */
    private function _convertGetFulfillmentItemByFNSKU($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetFulfillmentItemByFNSKU';
        foreach  ($request->getFulfillmentNetworkSKU() as $fulfillmentNetworkSKUIndex => $fulfillmentNetworkSKU) {
            $parameters["GetFulfillmentItemByFNSKU" . "." . "FulfillmentNetworkSKU" . "."  . ($fulfillmentNetworkSKUIndex + 1)] =  $fulfillmentNetworkSKU;
        }	

        return $parameters;
    }
        
                        
    /**
     * Convert GetInboundShipmentPreview to name value pairs
     */
    private function _convertGetInboundShipmentPreview($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetInboundShipmentPreview';
        if ($request->isSetShipFromAddress()) {
            $shipFromAddress = $request->getShipFromAddress();
            if ($shipFromAddress->isSetName()) {
                $parameters['ShipFromAddress' . '.' . 'Name'] =  $shipFromAddress->getName();
            }
            if ($shipFromAddress->isSetAddressLine1()) {
                $parameters['ShipFromAddress' . '.' . 'AddressLine1'] =  $shipFromAddress->getAddressLine1();
            }
            if ($shipFromAddress->isSetAddressLine2()) {
                $parameters['ShipFromAddress' . '.' . 'AddressLine2'] =  $shipFromAddress->getAddressLine2();
            }
            if ($shipFromAddress->isSetCity()) {
                $parameters['ShipFromAddress' . '.' . 'City'] =  $shipFromAddress->getCity();
            }
            if ($shipFromAddress->isSetStateOrProvinceCode()) {
                $parameters['ShipFromAddress' . '.' . 'StateOrProvinceCode'] =  $shipFromAddress->getStateOrProvinceCode();
            }
            if ($shipFromAddress->isSetCountryCode()) {
                $parameters['ShipFromAddress' . '.' . 'CountryCode'] =  $shipFromAddress->getCountryCode();
            }
            if ($shipFromAddress->isSetPostalCode()) {
                $parameters['ShipFromAddress' . '.' . 'PostalCode'] =  $shipFromAddress->getPostalCode();
            }
        }
        foreach ($request->getMerchantSKUQuantityItem() as $merchantSKUQuantityItemIndex => $merchantSKUQuantityItem) {
            if ($merchantSKUQuantityItem->isSetMerchantSKU()) {
                $parameters['MerchantSKUQuantityItem' . '.'  . ($merchantSKUQuantityItemIndex + 1) . '.' . 'MerchantSKU'] =  $merchantSKUQuantityItem->getMerchantSKU();
            }
            if ($merchantSKUQuantityItem->isSetQuantity()) {
                $parameters['MerchantSKUQuantityItem' . '.'  . ($merchantSKUQuantityItemIndex + 1) . '.' . 'Quantity'] =  $merchantSKUQuantityItem->getQuantity();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert PutInboundShipment to name value pairs
     */
    private function _convertPutInboundShipment($request) {
        
        $parameters = array();
        $parameters['Action'] = 'PutInboundShipment';
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetShipmentName()) {
            $parameters['ShipmentName'] =  $request->getShipmentName();
        }
        if ($request->isSetDestinationFulfillmentCenter()) {
            $parameters['DestinationFulfillmentCenter'] =  $request->getDestinationFulfillmentCenter();
        }
        if ($request->isSetShipFromAddress()) {
            $shipFromAddress = $request->getShipFromAddress();
            if ($shipFromAddress->isSetName()) {
                $parameters['ShipFromAddress' . '.' . 'Name'] =  $shipFromAddress->getName();
            }
            if ($shipFromAddress->isSetAddressLine1()) {
                $parameters['ShipFromAddress' . '.' . 'AddressLine1'] =  $shipFromAddress->getAddressLine1();
            }
            if ($shipFromAddress->isSetAddressLine2()) {
                $parameters['ShipFromAddress' . '.' . 'AddressLine2'] =  $shipFromAddress->getAddressLine2();
            }
            if ($shipFromAddress->isSetCity()) {
                $parameters['ShipFromAddress' . '.' . 'City'] =  $shipFromAddress->getCity();
            }
            if ($shipFromAddress->isSetStateOrProvinceCode()) {
                $parameters['ShipFromAddress' . '.' . 'StateOrProvinceCode'] =  $shipFromAddress->getStateOrProvinceCode();
            }
            if ($shipFromAddress->isSetCountryCode()) {
                $parameters['ShipFromAddress' . '.' . 'CountryCode'] =  $shipFromAddress->getCountryCode();
            }
            if ($shipFromAddress->isSetPostalCode()) {
                $parameters['ShipFromAddress' . '.' . 'PostalCode'] =  $shipFromAddress->getPostalCode();
            }
        }
        foreach ($request->getMerchantSKUQuantityItem() as $merchantSKUQuantityItemIndex => $merchantSKUQuantityItem) {
            if ($merchantSKUQuantityItem->isSetMerchantSKU()) {
                $parameters['MerchantSKUQuantityItem' . '.'  . ($merchantSKUQuantityItemIndex + 1) . '.' . 'MerchantSKU'] =  $merchantSKUQuantityItem->getMerchantSKU();
            }
            if ($merchantSKUQuantityItem->isSetQuantity()) {
                $parameters['MerchantSKUQuantityItem' . '.'  . ($merchantSKUQuantityItemIndex + 1) . '.' . 'Quantity'] =  $merchantSKUQuantityItem->getQuantity();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert PutInboundShipmentItems to name value pairs
     */
    private function _convertPutInboundShipmentItems($request) {
        
        $parameters = array();
        $parameters['Action'] = 'PutInboundShipmentItems';
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        foreach ($request->getMerchantSKUQuantityItem() as $merchantSKUQuantityItemIndex => $merchantSKUQuantityItem) {
            if ($merchantSKUQuantityItem->isSetMerchantSKU()) {
                $parameters['MerchantSKUQuantityItem' . '.'  . ($merchantSKUQuantityItemIndex + 1) . '.' . 'MerchantSKU'] =  $merchantSKUQuantityItem->getMerchantSKU();
            }
            if ($merchantSKUQuantityItem->isSetQuantity()) {
                $parameters['MerchantSKUQuantityItem' . '.'  . ($merchantSKUQuantityItemIndex + 1) . '.' . 'Quantity'] =  $merchantSKUQuantityItem->getQuantity();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert DeleteInboundShipmentItems to name value pairs
     */
    private function _convertDeleteInboundShipmentItems($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteInboundShipmentItems';
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        foreach  ($request->getMerchantSKU() as $merchantSKUIndex => $merchantSKU) {
            $parameters["DeleteInboundShipmentItems" . "." . "MerchantSKU" . "."  . ($merchantSKUIndex + 1)] =  $merchantSKU;
        }	

        return $parameters;
    }
        
                        
    /**
     * Convert ListInboundShipments to name value pairs
     */
    private function _convertListInboundShipments($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListInboundShipments';
        foreach  ($request->getShipmentStatus() as $shipmentStatusIndex => $shipmentStatus) {
            $parameters["ListInboundShipments" . "." . "ShipmentStatus" . "."  . ($shipmentStatusIndex + 1)] =  $shipmentStatus;
        }	
        if ($request->isSetCreatedBefore()) {
            $parameters['CreatedBefore'] =  $request->getCreatedBefore();
        }
        if ($request->isSetCreatedAfter()) {
            $parameters['CreatedAfter'] =  $request->getCreatedAfter();
        }
        if ($request->isSetMaxCount()) {
            $parameters['MaxCount'] =  $request->getMaxCount();
        }

        return $parameters;
    }
        
                        
    /**
     * Convert ListInboundShipmentsByNextToken to name value pairs
     */
    private function _convertListInboundShipmentsByNextToken($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListInboundShipmentsByNextToken';
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }
        
                        
    /**
     * Convert GetInboundShipmentData to name value pairs
     */
    private function _convertGetInboundShipmentData($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetInboundShipmentData';
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }

        return $parameters;
    }
        
                        
    /**
     * Convert PutInboundShipmentData to name value pairs
     */
    private function _convertPutInboundShipmentData($request) {
        
        $parameters = array();
        $parameters['Action'] = 'PutInboundShipmentData';
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetShipmentName()) {
            $parameters['ShipmentName'] =  $request->getShipmentName();
        }
        if ($request->isSetDestinationFulfillmentCenter()) {
            $parameters['DestinationFulfillmentCenter'] =  $request->getDestinationFulfillmentCenter();
        }
        if ($request->isSetShipFromAddress()) {
            $shipFromAddress = $request->getShipFromAddress();
            if ($shipFromAddress->isSetName()) {
                $parameters['ShipFromAddress' . '.' . 'Name'] =  $shipFromAddress->getName();
            }
            if ($shipFromAddress->isSetAddressLine1()) {
                $parameters['ShipFromAddress' . '.' . 'AddressLine1'] =  $shipFromAddress->getAddressLine1();
            }
            if ($shipFromAddress->isSetAddressLine2()) {
                $parameters['ShipFromAddress' . '.' . 'AddressLine2'] =  $shipFromAddress->getAddressLine2();
            }
            if ($shipFromAddress->isSetCity()) {
                $parameters['ShipFromAddress' . '.' . 'City'] =  $shipFromAddress->getCity();
            }
            if ($shipFromAddress->isSetStateOrProvinceCode()) {
                $parameters['ShipFromAddress' . '.' . 'StateOrProvinceCode'] =  $shipFromAddress->getStateOrProvinceCode();
            }
            if ($shipFromAddress->isSetCountryCode()) {
                $parameters['ShipFromAddress' . '.' . 'CountryCode'] =  $shipFromAddress->getCountryCode();
            }
            if ($shipFromAddress->isSetPostalCode()) {
                $parameters['ShipFromAddress' . '.' . 'PostalCode'] =  $shipFromAddress->getPostalCode();
            }
        }

        return $parameters;
    }
        
                        
    /**
     * Convert ListInboundShipmentItems to name value pairs
     */
    private function _convertListInboundShipmentItems($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListInboundShipmentItems';
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetMaxCount()) {
            $parameters['MaxCount'] =  $request->getMaxCount();
        }

        return $parameters;
    }
        
                        
    /**
     * Convert ListInboundShipmentItemsByNextToken to name value pairs
     */
    private function _convertListInboundShipmentItemsByNextToken($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListInboundShipmentItemsByNextToken';
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }
        
                        
    /**
     * Convert SetInboundShipmentStatus to name value pairs
     */
    private function _convertSetInboundShipmentStatus($request) {
        
        $parameters = array();
        $parameters['Action'] = 'SetInboundShipmentStatus';
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetShipmentStatus()) {
            $parameters['ShipmentStatus'] =  $request->getShipmentStatus();
        }

        return $parameters;
    }
        
                                                                                                                                                                                                                

}