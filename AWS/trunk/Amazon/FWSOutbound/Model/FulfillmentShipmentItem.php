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
 * Amazon_FWSOutbound_Model_FulfillmentShipmentItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>MerchantSKU: string</li>
 * <li>MerchantFulfillmentOrderItemId: string</li>
 * <li>Quantity: int</li>
 * <li>PackageNumber: int</li>
 *
 * </ul>
 */ 
class Amazon_FWSOutbound_Model_FulfillmentShipmentItem extends Amazon_FWSOutbound_Model
{


    /**
     * Construct new Amazon_FWSOutbound_Model_FulfillmentShipmentItem
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>MerchantSKU: string</li>
     * <li>MerchantFulfillmentOrderItemId: string</li>
     * <li>Quantity: int</li>
     * <li>PackageNumber: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'MerchantSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MerchantFulfillmentOrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Quantity' => array('FieldValue' => null, 'FieldType' => 'int'),
        'PackageNumber' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
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
     * @return Amazon_FWSOutbound_Model_FulfillmentShipmentItem instance
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

    /**
     * Gets the value of the MerchantFulfillmentOrderItemId property.
     * 
     * @return string MerchantFulfillmentOrderItemId
     */
    public function getMerchantFulfillmentOrderItemId() 
    {
        return $this->_fields['MerchantFulfillmentOrderItemId']['FieldValue'];
    }

    /**
     * Sets the value of the MerchantFulfillmentOrderItemId property.
     * 
     * @param string MerchantFulfillmentOrderItemId
     * @return this instance
     */
    public function setMerchantFulfillmentOrderItemId($value) 
    {
        $this->_fields['MerchantFulfillmentOrderItemId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MerchantFulfillmentOrderItemId and returns this instance
     * 
     * @param string $value MerchantFulfillmentOrderItemId
     * @return Amazon_FWSOutbound_Model_FulfillmentShipmentItem instance
     */
    public function withMerchantFulfillmentOrderItemId($value)
    {
        $this->setMerchantFulfillmentOrderItemId($value);
        return $this;
    }


    /**
     * Checks if MerchantFulfillmentOrderItemId is set
     * 
     * @return bool true if MerchantFulfillmentOrderItemId  is set
     */
    public function isSetMerchantFulfillmentOrderItemId()
    {
        return !is_null($this->_fields['MerchantFulfillmentOrderItemId']['FieldValue']);
    }

    /**
     * Gets the value of the Quantity property.
     * 
     * @return int Quantity
     */
    public function getQuantity() 
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Sets the value of the Quantity property.
     * 
     * @param int Quantity
     * @return this instance
     */
    public function setQuantity($value) 
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Quantity and returns this instance
     * 
     * @param int $value Quantity
     * @return Amazon_FWSOutbound_Model_FulfillmentShipmentItem instance
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);
        return $this;
    }


    /**
     * Checks if Quantity is set
     * 
     * @return bool true if Quantity  is set
     */
    public function isSetQuantity()
    {
        return !is_null($this->_fields['Quantity']['FieldValue']);
    }

    /**
     * Gets the value of the PackageNumber property.
     * 
     * @return int PackageNumber
     */
    public function getPackageNumber() 
    {
        return $this->_fields['PackageNumber']['FieldValue'];
    }

    /**
     * Sets the value of the PackageNumber property.
     * 
     * @param int PackageNumber
     * @return this instance
     */
    public function setPackageNumber($value) 
    {
        $this->_fields['PackageNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the PackageNumber and returns this instance
     * 
     * @param int $value PackageNumber
     * @return Amazon_FWSOutbound_Model_FulfillmentShipmentItem instance
     */
    public function withPackageNumber($value)
    {
        $this->setPackageNumber($value);
        return $this;
    }


    /**
     * Checks if PackageNumber is set
     * 
     * @return bool true if PackageNumber  is set
     */
    public function isSetPackageNumber()
    {
        return !is_null($this->_fields['PackageNumber']['FieldValue']);
    }




}