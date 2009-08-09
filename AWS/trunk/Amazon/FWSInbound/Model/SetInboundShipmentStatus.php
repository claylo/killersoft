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
 * Amazon_FWSInbound_Model_SetInboundShipmentStatus
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentId: string</li>
 * <li>ShipmentStatus: string</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_SetInboundShipmentStatus extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_SetInboundShipmentStatus
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ShipmentId: string</li>
     * <li>ShipmentStatus: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ShipmentStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_FWSInbound_Model_SetInboundShipmentStatus instance
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
     * Gets the value of the ShipmentStatus property.
     * 
     * @return string ShipmentStatus
     */
    public function getShipmentStatus() 
    {
        return $this->_fields['ShipmentStatus']['FieldValue'];
    }

    /**
     * Sets the value of the ShipmentStatus property.
     * 
     * @param string ShipmentStatus
     * @return this instance
     */
    public function setShipmentStatus($value) 
    {
        $this->_fields['ShipmentStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ShipmentStatus and returns this instance
     * 
     * @param string $value ShipmentStatus
     * @return Amazon_FWSInbound_Model_SetInboundShipmentStatus instance
     */
    public function withShipmentStatus($value)
    {
        $this->setShipmentStatus($value);
        return $this;
    }


    /**
     * Checks if ShipmentStatus is set
     * 
     * @return bool true if ShipmentStatus  is set
     */
    public function isSetShipmentStatus()
    {
        return !is_null($this->_fields['ShipmentStatus']['FieldValue']);
    }




}