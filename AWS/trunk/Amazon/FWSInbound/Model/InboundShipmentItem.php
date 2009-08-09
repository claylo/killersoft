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
 *  @see Amazon_FWSInbound_Model
 */
require_once ('Amazon/FWSInbound/Model.php');  

    

/**
 * Amazon_FWSInbound_Model_InboundShipmentItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>QuantityShipped: int</li>
 * <li>QuantityReceived: int</li>
 * <li>FulfillmentNetworkSKU: string</li>
 * <li>MerchantSKU: string</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_InboundShipmentItem extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_InboundShipmentItem
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>QuantityShipped: int</li>
     * <li>QuantityReceived: int</li>
     * <li>FulfillmentNetworkSKU: string</li>
     * <li>MerchantSKU: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'QuantityShipped' => array('FieldValue' => null, 'FieldType' => 'int'),
        'QuantityReceived' => array('FieldValue' => null, 'FieldType' => 'int'),
        'FulfillmentNetworkSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MerchantSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the QuantityShipped property.
     * 
     * @return int QuantityShipped
     */
    public function getQuantityShipped() 
    {
        return $this->_fields['QuantityShipped']['FieldValue'];
    }

    /**
     * Sets the value of the QuantityShipped property.
     * 
     * @param int QuantityShipped
     * @return this instance
     */
    public function setQuantityShipped($value) 
    {
        $this->_fields['QuantityShipped']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the QuantityShipped and returns this instance
     * 
     * @param int $value QuantityShipped
     * @return Amazon_FWSInbound_Model_InboundShipmentItem instance
     */
    public function withQuantityShipped($value)
    {
        $this->setQuantityShipped($value);
        return $this;
    }


    /**
     * Checks if QuantityShipped is set
     * 
     * @return bool true if QuantityShipped  is set
     */
    public function isSetQuantityShipped()
    {
        return !is_null($this->_fields['QuantityShipped']['FieldValue']);
    }

    /**
     * Gets the value of the QuantityReceived property.
     * 
     * @return int QuantityReceived
     */
    public function getQuantityReceived() 
    {
        return $this->_fields['QuantityReceived']['FieldValue'];
    }

    /**
     * Sets the value of the QuantityReceived property.
     * 
     * @param int QuantityReceived
     * @return this instance
     */
    public function setQuantityReceived($value) 
    {
        $this->_fields['QuantityReceived']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the QuantityReceived and returns this instance
     * 
     * @param int $value QuantityReceived
     * @return Amazon_FWSInbound_Model_InboundShipmentItem instance
     */
    public function withQuantityReceived($value)
    {
        $this->setQuantityReceived($value);
        return $this;
    }


    /**
     * Checks if QuantityReceived is set
     * 
     * @return bool true if QuantityReceived  is set
     */
    public function isSetQuantityReceived()
    {
        return !is_null($this->_fields['QuantityReceived']['FieldValue']);
    }

    /**
     * Gets the value of the FulfillmentNetworkSKU property.
     * 
     * @return string FulfillmentNetworkSKU
     */
    public function getFulfillmentNetworkSKU() 
    {
        return $this->_fields['FulfillmentNetworkSKU']['FieldValue'];
    }

    /**
     * Sets the value of the FulfillmentNetworkSKU property.
     * 
     * @param string FulfillmentNetworkSKU
     * @return this instance
     */
    public function setFulfillmentNetworkSKU($value) 
    {
        $this->_fields['FulfillmentNetworkSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the FulfillmentNetworkSKU and returns this instance
     * 
     * @param string $value FulfillmentNetworkSKU
     * @return Amazon_FWSInbound_Model_InboundShipmentItem instance
     */
    public function withFulfillmentNetworkSKU($value)
    {
        $this->setFulfillmentNetworkSKU($value);
        return $this;
    }


    /**
     * Checks if FulfillmentNetworkSKU is set
     * 
     * @return bool true if FulfillmentNetworkSKU  is set
     */
    public function isSetFulfillmentNetworkSKU()
    {
        return !is_null($this->_fields['FulfillmentNetworkSKU']['FieldValue']);
    }

    /**
     * Gets the value of the MerchantSKU property.
     * 
     * @return string MerchantSKU
     */
    public function getMerchantSKU() 
    {
        return $this->_fields['MerchantSKU']['FieldValue'];
    }

    /**
     * Sets the value of the MerchantSKU property.
     * 
     * @param string MerchantSKU
     * @return this instance
     */
    public function setMerchantSKU($value) 
    {
        $this->_fields['MerchantSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MerchantSKU and returns this instance
     * 
     * @param string $value MerchantSKU
     * @return Amazon_FWSInbound_Model_InboundShipmentItem instance
     */
    public function withMerchantSKU($value)
    {
        $this->setMerchantSKU($value);
        return $this;
    }


    /**
     * Checks if MerchantSKU is set
     * 
     * @return bool true if MerchantSKU  is set
     */
    public function isSetMerchantSKU()
    {
        return !is_null($this->_fields['MerchantSKU']['FieldValue']);
    }




}