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
 * Amazon_FWSInbound_Model_InventoryQuantity
 * 
 * Properties:
 * <ul>
 * 
 * <li>InventoryStatus: string</li>
 * <li>ItemQuantity: int</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_InventoryQuantity extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_InventoryQuantity
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InventoryStatus: string</li>
     * <li>ItemQuantity: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InventoryStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ItemQuantity' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the InventoryStatus property.
     * 
     * @return string InventoryStatus
     */
    public function getInventoryStatus() 
    {
        return $this->_fields['InventoryStatus']['FieldValue'];
    }

    /**
     * Sets the value of the InventoryStatus property.
     * 
     * @param string InventoryStatus
     * @return this instance
     */
    public function setInventoryStatus($value) 
    {
        $this->_fields['InventoryStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InventoryStatus and returns this instance
     * 
     * @param string $value InventoryStatus
     * @return Amazon_FWSInbound_Model_InventoryQuantity instance
     */
    public function withInventoryStatus($value)
    {
        $this->setInventoryStatus($value);
        return $this;
    }


    /**
     * Checks if InventoryStatus is set
     * 
     * @return bool true if InventoryStatus  is set
     */
    public function isSetInventoryStatus()
    {
        return !is_null($this->_fields['InventoryStatus']['FieldValue']);
    }

    /**
     * Gets the value of the ItemQuantity property.
     * 
     * @return int ItemQuantity
     */
    public function getItemQuantity() 
    {
        return $this->_fields['ItemQuantity']['FieldValue'];
    }

    /**
     * Sets the value of the ItemQuantity property.
     * 
     * @param int ItemQuantity
     * @return this instance
     */
    public function setItemQuantity($value) 
    {
        $this->_fields['ItemQuantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ItemQuantity and returns this instance
     * 
     * @param int $value ItemQuantity
     * @return Amazon_FWSInbound_Model_InventoryQuantity instance
     */
    public function withItemQuantity($value)
    {
        $this->setItemQuantity($value);
        return $this;
    }


    /**
     * Checks if ItemQuantity is set
     * 
     * @return bool true if ItemQuantity  is set
     */
    public function isSetItemQuantity()
    {
        return !is_null($this->_fields['ItemQuantity']['FieldValue']);
    }




}