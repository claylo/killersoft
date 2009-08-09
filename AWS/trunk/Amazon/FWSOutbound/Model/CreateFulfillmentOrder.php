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
 * Amazon_FWSOutbound_Model_CreateFulfillmentOrder
 * 
 * Properties:
 * <ul>
 * 
 * <li>MerchantFulfillmentOrderId: string</li>
 * <li>DisplayableOrderId: string</li>
 * <li>DisplayableOrderDateTime: string</li>
 * <li>DisplayableOrderComment: string</li>
 * <li>ShippingSpeedCategory: string</li>
 * <li>DestinationAddress: Amazon_FWSOutbound_Model_Address</li>
 * <li>Item: Amazon_FWSOutbound_Model_CreateFulfillmentOrderItem</li>
 *
 * </ul>
 */ 
class Amazon_FWSOutbound_Model_CreateFulfillmentOrder extends Amazon_FWSOutbound_Model
{


    /**
     * Construct new Amazon_FWSOutbound_Model_CreateFulfillmentOrder
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>MerchantFulfillmentOrderId: string</li>
     * <li>DisplayableOrderId: string</li>
     * <li>DisplayableOrderDateTime: string</li>
     * <li>DisplayableOrderComment: string</li>
     * <li>ShippingSpeedCategory: string</li>
     * <li>DestinationAddress: Amazon_FWSOutbound_Model_Address</li>
     * <li>Item: Amazon_FWSOutbound_Model_CreateFulfillmentOrderItem</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'MerchantFulfillmentOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DisplayableOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DisplayableOrderDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DisplayableOrderComment' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ShippingSpeedCategory' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DestinationAddress' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSOutbound_Model_Address'),
        'Item' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FWSOutbound_Model_CreateFulfillmentOrderItem')),
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
     * @return Amazon_FWSOutbound_Model_CreateFulfillmentOrder instance
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

    /**
     * Gets the value of the DisplayableOrderId property.
     * 
     * @return string DisplayableOrderId
     */
    public function getDisplayableOrderId() 
    {
        return $this->_fields['DisplayableOrderId']['FieldValue'];
    }

    /**
     * Sets the value of the DisplayableOrderId property.
     * 
     * @param string DisplayableOrderId
     * @return this instance
     */
    public function setDisplayableOrderId($value) 
    {
        $this->_fields['DisplayableOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the DisplayableOrderId and returns this instance
     * 
     * @param string $value DisplayableOrderId
     * @return Amazon_FWSOutbound_Model_CreateFulfillmentOrder instance
     */
    public function withDisplayableOrderId($value)
    {
        $this->setDisplayableOrderId($value);
        return $this;
    }


    /**
     * Checks if DisplayableOrderId is set
     * 
     * @return bool true if DisplayableOrderId  is set
     */
    public function isSetDisplayableOrderId()
    {
        return !is_null($this->_fields['DisplayableOrderId']['FieldValue']);
    }

    /**
     * Gets the value of the DisplayableOrderDateTime property.
     * 
     * @return string DisplayableOrderDateTime
     */
    public function getDisplayableOrderDateTime() 
    {
        return $this->_fields['DisplayableOrderDateTime']['FieldValue'];
    }

    /**
     * Sets the value of the DisplayableOrderDateTime property.
     * 
     * @param string DisplayableOrderDateTime
     * @return this instance
     */
    public function setDisplayableOrderDateTime($value) 
    {
        $this->_fields['DisplayableOrderDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the DisplayableOrderDateTime and returns this instance
     * 
     * @param string $value DisplayableOrderDateTime
     * @return Amazon_FWSOutbound_Model_CreateFulfillmentOrder instance
     */
    public function withDisplayableOrderDateTime($value)
    {
        $this->setDisplayableOrderDateTime($value);
        return $this;
    }


    /**
     * Checks if DisplayableOrderDateTime is set
     * 
     * @return bool true if DisplayableOrderDateTime  is set
     */
    public function isSetDisplayableOrderDateTime()
    {
        return !is_null($this->_fields['DisplayableOrderDateTime']['FieldValue']);
    }

    /**
     * Gets the value of the DisplayableOrderComment property.
     * 
     * @return string DisplayableOrderComment
     */
    public function getDisplayableOrderComment() 
    {
        return $this->_fields['DisplayableOrderComment']['FieldValue'];
    }

    /**
     * Sets the value of the DisplayableOrderComment property.
     * 
     * @param string DisplayableOrderComment
     * @return this instance
     */
    public function setDisplayableOrderComment($value) 
    {
        $this->_fields['DisplayableOrderComment']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the DisplayableOrderComment and returns this instance
     * 
     * @param string $value DisplayableOrderComment
     * @return Amazon_FWSOutbound_Model_CreateFulfillmentOrder instance
     */
    public function withDisplayableOrderComment($value)
    {
        $this->setDisplayableOrderComment($value);
        return $this;
    }


    /**
     * Checks if DisplayableOrderComment is set
     * 
     * @return bool true if DisplayableOrderComment  is set
     */
    public function isSetDisplayableOrderComment()
    {
        return !is_null($this->_fields['DisplayableOrderComment']['FieldValue']);
    }

    /**
     * Gets the value of the ShippingSpeedCategory property.
     * 
     * @return string ShippingSpeedCategory
     */
    public function getShippingSpeedCategory() 
    {
        return $this->_fields['ShippingSpeedCategory']['FieldValue'];
    }

    /**
     * Sets the value of the ShippingSpeedCategory property.
     * 
     * @param string ShippingSpeedCategory
     * @return this instance
     */
    public function setShippingSpeedCategory($value) 
    {
        $this->_fields['ShippingSpeedCategory']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ShippingSpeedCategory and returns this instance
     * 
     * @param string $value ShippingSpeedCategory
     * @return Amazon_FWSOutbound_Model_CreateFulfillmentOrder instance
     */
    public function withShippingSpeedCategory($value)
    {
        $this->setShippingSpeedCategory($value);
        return $this;
    }


    /**
     * Checks if ShippingSpeedCategory is set
     * 
     * @return bool true if ShippingSpeedCategory  is set
     */
    public function isSetShippingSpeedCategory()
    {
        return !is_null($this->_fields['ShippingSpeedCategory']['FieldValue']);
    }

    /**
     * Gets the value of the DestinationAddress.
     * 
     * @return Address DestinationAddress
     */
    public function getDestinationAddress() 
    {
        return $this->_fields['DestinationAddress']['FieldValue'];
    }

    /**
     * Sets the value of the DestinationAddress.
     * 
     * @param Address DestinationAddress
     * @return void
     */
    public function setDestinationAddress($value) 
    {
        $this->_fields['DestinationAddress']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DestinationAddress  and returns this instance
     * 
     * @param Address $value DestinationAddress
     * @return Amazon_FWSOutbound_Model_CreateFulfillmentOrder instance
     */
    public function withDestinationAddress($value)
    {
        $this->setDestinationAddress($value);
        return $this;
    }


    /**
     * Checks if DestinationAddress  is set
     * 
     * @return bool true if DestinationAddress property is set
     */
    public function isSetDestinationAddress()
    {
        return !is_null($this->_fields['DestinationAddress']['FieldValue']);

    }

    /**
     * Gets the value of the Item.
     * 
     * @return array of CreateFulfillmentOrderItem Item
     */
    public function getItem() 
    {
        return $this->_fields['Item']['FieldValue'];
    }

    /**
     * Sets the value of the Item.
     * 
     * @param mixed CreateFulfillmentOrderItem or an array of CreateFulfillmentOrderItem Item
     * @return this instance
     */
    public function setItem($item) 
    {
        if (!$this->_isNumericArray($item)) {
            $item =  array ($item);    
        }
        $this->_fields['Item']['FieldValue'] = $item;
        return $this;
    }


    /**
     * Sets single or multiple values of Item list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withItem($item1, $item2)</code>
     * 
     * @param CreateFulfillmentOrderItem  $createFulfillmentOrderItemArgs one or more Item
     * @return Amazon_FWSOutbound_Model_CreateFulfillmentOrder  instance
     */
    public function withItem($createFulfillmentOrderItemArgs)
    {
        foreach (func_get_args() as $item) {
            $this->_fields['Item']['FieldValue'][] = $item;
        }
        return $this;
    }   



    /**
     * Checks if Item list is non-empty
     * 
     * @return bool true if Item list is non-empty
     */
    public function isSetItem()
    {
        return count ($this->_fields['Item']['FieldValue']) > 0;
    }




}