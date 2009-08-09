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
 * Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextTokenResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>NextToken: string</li>
 * <li>HasNext: bool</li>
 * <li>ShipmentItem: Amazon_FWSInbound_Model_InboundShipmentItem</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextTokenResult extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextTokenResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>ShipmentItem: Amazon_FWSInbound_Model_InboundShipmentItem</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'ShipmentItem' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FWSInbound_Model_InboundShipmentItem')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the NextToken property.
     * 
     * @return string NextToken
     */
    public function getNextToken() 
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Sets the value of the NextToken property.
     * 
     * @param string NextToken
     * @return this instance
     */
    public function setNextToken($value) 
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the NextToken and returns this instance
     * 
     * @param string $value NextToken
     * @return Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextTokenResult instance
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }


    /**
     * Checks if NextToken is set
     * 
     * @return bool true if NextToken  is set
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }

    /**
     * Gets the value of the HasNext property.
     * 
     * @return bool HasNext
     */
    public function getHasNext() 
    {
        return $this->_fields['HasNext']['FieldValue'];
    }

    /**
     * Sets the value of the HasNext property.
     * 
     * @param bool HasNext
     * @return this instance
     */
    public function setHasNext($value) 
    {
        $this->_fields['HasNext']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the HasNext and returns this instance
     * 
     * @param bool $value HasNext
     * @return Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextTokenResult instance
     */
    public function withHasNext($value)
    {
        $this->setHasNext($value);
        return $this;
    }


    /**
     * Checks if HasNext is set
     * 
     * @return bool true if HasNext  is set
     */
    public function isSetHasNext()
    {
        return !is_null($this->_fields['HasNext']['FieldValue']);
    }

    /**
     * Gets the value of the ShipmentItem.
     * 
     * @return array of InboundShipmentItem ShipmentItem
     */
    public function getShipmentItem() 
    {
        return $this->_fields['ShipmentItem']['FieldValue'];
    }

    /**
     * Sets the value of the ShipmentItem.
     * 
     * @param mixed InboundShipmentItem or an array of InboundShipmentItem ShipmentItem
     * @return this instance
     */
    public function setShipmentItem($shipmentItem) 
    {
        if (!$this->_isNumericArray($shipmentItem)) {
            $shipmentItem =  array ($shipmentItem);    
        }
        $this->_fields['ShipmentItem']['FieldValue'] = $shipmentItem;
        return $this;
    }


    /**
     * Sets single or multiple values of ShipmentItem list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withShipmentItem($shipmentItem1, $shipmentItem2)</code>
     * 
     * @param InboundShipmentItem  $inboundShipmentItemArgs one or more ShipmentItem
     * @return Amazon_FWSInbound_Model_ListInboundShipmentItemsByNextTokenResult  instance
     */
    public function withShipmentItem($inboundShipmentItemArgs)
    {
        foreach (func_get_args() as $shipmentItem) {
            $this->_fields['ShipmentItem']['FieldValue'][] = $shipmentItem;
        }
        return $this;
    }   



    /**
     * Checks if ShipmentItem list is non-empty
     * 
     * @return bool true if ShipmentItem list is non-empty
     */
    public function isSetShipmentItem()
    {
        return count ($this->_fields['ShipmentItem']['FieldValue']) > 0;
    }




}