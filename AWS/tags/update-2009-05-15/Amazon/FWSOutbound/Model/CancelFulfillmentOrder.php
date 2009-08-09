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
 *  @see Amazon_FWSOutbound_Model
 */
require_once ('Amazon/FWSOutbound/Model.php');  

    

/**
 * Amazon_FWSOutbound_Model_CancelFulfillmentOrder
 * 
 * Properties:
 * <ul>
 * 
 * <li>MerchantFulfillmentOrderId: string</li>
 *
 * </ul>
 */ 
class Amazon_FWSOutbound_Model_CancelFulfillmentOrder extends Amazon_FWSOutbound_Model
{


    /**
     * Construct new Amazon_FWSOutbound_Model_CancelFulfillmentOrder
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>MerchantFulfillmentOrderId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'MerchantFulfillmentOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the MerchantFulfillmentOrderId property.
     * 
     * @return string MerchantFulfillmentOrderId
     */
    public function getMerchantFulfillmentOrderId() 
    {
        return $this->_fields['MerchantFulfillmentOrderId']['FieldValue'];
    }

    /**
     * Sets the value of the MerchantFulfillmentOrderId property.
     * 
     * @param string MerchantFulfillmentOrderId
     * @return this instance
     */
    public function setMerchantFulfillmentOrderId($value) 
    {
        $this->_fields['MerchantFulfillmentOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MerchantFulfillmentOrderId and returns this instance
     * 
     * @param string $value MerchantFulfillmentOrderId
     * @return Amazon_FWSOutbound_Model_CancelFulfillmentOrder instance
     */
    public function withMerchantFulfillmentOrderId($value)
    {
        $this->setMerchantFulfillmentOrderId($value);
        return $this;
    }


    /**
     * Checks if MerchantFulfillmentOrderId is set
     * 
     * @return bool true if MerchantFulfillmentOrderId  is set
     */
    public function isSetMerchantFulfillmentOrderId()
    {
        return !is_null($this->_fields['MerchantFulfillmentOrderId']['FieldValue']);
    }




}