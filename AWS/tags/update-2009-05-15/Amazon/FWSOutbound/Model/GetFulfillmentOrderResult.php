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
 * Amazon_FWSOutbound_Model_GetFulfillmentOrderResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>FulfillmentOrder: Amazon_FWSOutbound_Model_FulfillmentOrder</li>
 * <li>FulfillmentOrderItem: Amazon_FWSOutbound_Model_FulfillmentOrderItem</li>
 * <li>FulfillmentShipment: Amazon_FWSOutbound_Model_FulfillmentShipment</li>
 *
 * </ul>
 */ 
class Amazon_FWSOutbound_Model_GetFulfillmentOrderResult extends Amazon_FWSOutbound_Model
{


    /**
     * Construct new Amazon_FWSOutbound_Model_GetFulfillmentOrderResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>FulfillmentOrder: Amazon_FWSOutbound_Model_FulfillmentOrder</li>
     * <li>FulfillmentOrderItem: Amazon_FWSOutbound_Model_FulfillmentOrderItem</li>
     * <li>FulfillmentShipment: Amazon_FWSOutbound_Model_FulfillmentShipment</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'FulfillmentOrder' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSOutbound_Model_FulfillmentOrder'),
        'FulfillmentOrderItem' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FWSOutbound_Model_FulfillmentOrderItem')),
        'FulfillmentShipment' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FWSOutbound_Model_FulfillmentShipment')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the FulfillmentOrder.
     * 
     * @return FulfillmentOrder FulfillmentOrder
     */
    public function getFulfillmentOrder() 
    {
        return $this->_fields['FulfillmentOrder']['FieldValue'];
    }

    /**
     * Sets the value of the FulfillmentOrder.
     * 
     * @param FulfillmentOrder FulfillmentOrder
     * @return void
     */
    public function setFulfillmentOrder($value) 
    {
        $this->_fields['FulfillmentOrder']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the FulfillmentOrder  and returns this instance
     * 
     * @param FulfillmentOrder $value FulfillmentOrder
     * @return Amazon_FWSOutbound_Model_GetFulfillmentOrderResult instance
     */
    public function withFulfillmentOrder($value)
    {
        $this->setFulfillmentOrder($value);
        return $this;
    }


    /**
     * Checks if FulfillmentOrder  is set
     * 
     * @return bool true if FulfillmentOrder property is set
     */
    public function isSetFulfillmentOrder()
    {
        return !is_null($this->_fields['FulfillmentOrder']['FieldValue']);

    }

    /**
     * Gets the value of the FulfillmentOrderItem.
     * 
     * @return array of FulfillmentOrderItem FulfillmentOrderItem
     */
    public function getFulfillmentOrderItem() 
    {
        return $this->_fields['FulfillmentOrderItem']['FieldValue'];
    }

    /**
     * Sets the value of the FulfillmentOrderItem.
     * 
     * @param mixed FulfillmentOrderItem or an array of FulfillmentOrderItem FulfillmentOrderItem
     * @return this instance
     */
    public function setFulfillmentOrderItem($fulfillmentOrderItem) 
    {
        if (!$this->_isNumericArray($fulfillmentOrderItem)) {
            $fulfillmentOrderItem =  array ($fulfillmentOrderItem);    
        }
        $this->_fields['FulfillmentOrderItem']['FieldValue'] = $fulfillmentOrderItem;
        return $this;
    }


    /**
     * Sets single or multiple values of FulfillmentOrderItem list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withFulfillmentOrderItem($fulfillmentOrderItem1, $fulfillmentOrderItem2)</code>
     * 
     * @param FulfillmentOrderItem  $fulfillmentOrderItemArgs one or more FulfillmentOrderItem
     * @return Amazon_FWSOutbound_Model_GetFulfillmentOrderResult  instance
     */
    public function withFulfillmentOrderItem($fulfillmentOrderItemArgs)
    {
        foreach (func_get_args() as $fulfillmentOrderItem) {
            $this->_fields['FulfillmentOrderItem']['FieldValue'][] = $fulfillmentOrderItem;
        }
        return $this;
    }   



    /**
     * Checks if FulfillmentOrderItem list is non-empty
     * 
     * @return bool true if FulfillmentOrderItem list is non-empty
     */
    public function isSetFulfillmentOrderItem()
    {
        return count ($this->_fields['FulfillmentOrderItem']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the FulfillmentShipment.
     * 
     * @return array of FulfillmentShipment FulfillmentShipment
     */
    public function getFulfillmentShipment() 
    {
        return $this->_fields['FulfillmentShipment']['FieldValue'];
    }

    /**
     * Sets the value of the FulfillmentShipment.
     * 
     * @param mixed FulfillmentShipment or an array of FulfillmentShipment FulfillmentShipment
     * @return this instance
     */
    public function setFulfillmentShipment($fulfillmentShipment) 
    {
        if (!$this->_isNumericArray($fulfillmentShipment)) {
            $fulfillmentShipment =  array ($fulfillmentShipment);    
        }
        $this->_fields['FulfillmentShipment']['FieldValue'] = $fulfillmentShipment;
        return $this;
    }


    /**
     * Sets single or multiple values of FulfillmentShipment list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withFulfillmentShipment($fulfillmentShipment1, $fulfillmentShipment2)</code>
     * 
     * @param FulfillmentShipment  $fulfillmentShipmentArgs one or more FulfillmentShipment
     * @return Amazon_FWSOutbound_Model_GetFulfillmentOrderResult  instance
     */
    public function withFulfillmentShipment($fulfillmentShipmentArgs)
    {
        foreach (func_get_args() as $fulfillmentShipment) {
            $this->_fields['FulfillmentShipment']['FieldValue'][] = $fulfillmentShipment;
        }
        return $this;
    }   



    /**
     * Checks if FulfillmentShipment list is non-empty
     * 
     * @return bool true if FulfillmentShipment list is non-empty
     */
    public function isSetFulfillmentShipment()
    {
        return count ($this->_fields['FulfillmentShipment']['FieldValue']) > 0;
    }




}