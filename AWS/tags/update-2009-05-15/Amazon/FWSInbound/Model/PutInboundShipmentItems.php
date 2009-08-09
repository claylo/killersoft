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
 * Amazon_FWSInbound_Model_PutInboundShipmentItems
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentId: string</li>
 * <li>MerchantSKUQuantityItem: Amazon_FWSInbound_Model_MerchantSKUQuantityItem</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_PutInboundShipmentItems extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_PutInboundShipmentItems
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ShipmentId: string</li>
     * <li>MerchantSKUQuantityItem: Amazon_FWSInbound_Model_MerchantSKUQuantityItem</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MerchantSKUQuantityItem' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FWSInbound_Model_MerchantSKUQuantityItem')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ShipmentId property.
     * 
     * @return string ShipmentId
     */
    public function getShipmentId() 
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }

    /**
     * Sets the value of the ShipmentId property.
     * 
     * @param string ShipmentId
     * @return this instance
     */
    public function setShipmentId($value) 
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ShipmentId and returns this instance
     * 
     * @param string $value ShipmentId
     * @return Amazon_FWSInbound_Model_PutInboundShipmentItems instance
     */
    public function withShipmentId($value)
    {
        $this->setShipmentId($value);
        return $this;
    }


    /**
     * Checks if ShipmentId is set
     * 
     * @return bool true if ShipmentId  is set
     */
    public function isSetShipmentId()
    {
        return !is_null($this->_fields['ShipmentId']['FieldValue']);
    }

    /**
     * Gets the value of the MerchantSKUQuantityItem.
     * 
     * @return array of MerchantSKUQuantityItem MerchantSKUQuantityItem
     */
    public function getMerchantSKUQuantityItem() 
    {
        return $this->_fields['MerchantSKUQuantityItem']['FieldValue'];
    }

    /**
     * Sets the value of the MerchantSKUQuantityItem.
     * 
     * @param mixed MerchantSKUQuantityItem or an array of MerchantSKUQuantityItem MerchantSKUQuantityItem
     * @return this instance
     */
    public function setMerchantSKUQuantityItem($merchantSKUQuantityItem) 
    {
        if (!$this->_isNumericArray($merchantSKUQuantityItem)) {
            $merchantSKUQuantityItem =  array ($merchantSKUQuantityItem);    
        }
        $this->_fields['MerchantSKUQuantityItem']['FieldValue'] = $merchantSKUQuantityItem;
        return $this;
    }


    /**
     * Sets single or multiple values of MerchantSKUQuantityItem list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withMerchantSKUQuantityItem($merchantSKUQuantityItem1, $merchantSKUQuantityItem2)</code>
     * 
     * @param MerchantSKUQuantityItem  $merchantSKUQuantityItemArgs one or more MerchantSKUQuantityItem
     * @return Amazon_FWSInbound_Model_PutInboundShipmentItems  instance
     */
    public function withMerchantSKUQuantityItem($merchantSKUQuantityItemArgs)
    {
        foreach (func_get_args() as $merchantSKUQuantityItem) {
            $this->_fields['MerchantSKUQuantityItem']['FieldValue'][] = $merchantSKUQuantityItem;
        }
        return $this;
    }   



    /**
     * Checks if MerchantSKUQuantityItem list is non-empty
     * 
     * @return bool true if MerchantSKUQuantityItem list is non-empty
     */
    public function isSetMerchantSKUQuantityItem()
    {
        return count ($this->_fields['MerchantSKUQuantityItem']['FieldValue']) > 0;
    }




}