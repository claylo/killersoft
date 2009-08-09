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
 * Amazon_FWSInbound_Model_PutInboundShipmentData
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentId: string</li>
 * <li>ShipmentName: string</li>
 * <li>DestinationFulfillmentCenter: string</li>
 * <li>ShipFromAddress: Amazon_FWSInbound_Model_Address</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_PutInboundShipmentData extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_PutInboundShipmentData
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ShipmentId: string</li>
     * <li>ShipmentName: string</li>
     * <li>DestinationFulfillmentCenter: string</li>
     * <li>ShipFromAddress: Amazon_FWSInbound_Model_Address</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ShipmentName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DestinationFulfillmentCenter' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ShipFromAddress' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_Address'),
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
     * @return Amazon_FWSInbound_Model_PutInboundShipmentData instance
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
     * Gets the value of the ShipmentName property.
     * 
     * @return string ShipmentName
     */
    public function getShipmentName() 
    {
        return $this->_fields['ShipmentName']['FieldValue'];
    }

    /**
     * Sets the value of the ShipmentName property.
     * 
     * @param string ShipmentName
     * @return this instance
     */
    public function setShipmentName($value) 
    {
        $this->_fields['ShipmentName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ShipmentName and returns this instance
     * 
     * @param string $value ShipmentName
     * @return Amazon_FWSInbound_Model_PutInboundShipmentData instance
     */
    public function withShipmentName($value)
    {
        $this->setShipmentName($value);
        return $this;
    }


    /**
     * Checks if ShipmentName is set
     * 
     * @return bool true if ShipmentName  is set
     */
    public function isSetShipmentName()
    {
        return !is_null($this->_fields['ShipmentName']['FieldValue']);
    }

    /**
     * Gets the value of the DestinationFulfillmentCenter property.
     * 
     * @return string DestinationFulfillmentCenter
     */
    public function getDestinationFulfillmentCenter() 
    {
        return $this->_fields['DestinationFulfillmentCenter']['FieldValue'];
    }

    /**
     * Sets the value of the DestinationFulfillmentCenter property.
     * 
     * @param string DestinationFulfillmentCenter
     * @return this instance
     */
    public function setDestinationFulfillmentCenter($value) 
    {
        $this->_fields['DestinationFulfillmentCenter']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the DestinationFulfillmentCenter and returns this instance
     * 
     * @param string $value DestinationFulfillmentCenter
     * @return Amazon_FWSInbound_Model_PutInboundShipmentData instance
     */
    public function withDestinationFulfillmentCenter($value)
    {
        $this->setDestinationFulfillmentCenter($value);
        return $this;
    }


    /**
     * Checks if DestinationFulfillmentCenter is set
     * 
     * @return bool true if DestinationFulfillmentCenter  is set
     */
    public function isSetDestinationFulfillmentCenter()
    {
        return !is_null($this->_fields['DestinationFulfillmentCenter']['FieldValue']);
    }

    /**
     * Gets the value of the ShipFromAddress.
     * 
     * @return Address ShipFromAddress
     */
    public function getShipFromAddress() 
    {
        return $this->_fields['ShipFromAddress']['FieldValue'];
    }

    /**
     * Sets the value of the ShipFromAddress.
     * 
     * @param Address ShipFromAddress
     * @return void
     */
    public function setShipFromAddress($value) 
    {
        $this->_fields['ShipFromAddress']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ShipFromAddress  and returns this instance
     * 
     * @param Address $value ShipFromAddress
     * @return Amazon_FWSInbound_Model_PutInboundShipmentData instance
     */
    public function withShipFromAddress($value)
    {
        $this->setShipFromAddress($value);
        return $this;
    }


    /**
     * Checks if ShipFromAddress  is set
     * 
     * @return bool true if ShipFromAddress property is set
     */
    public function isSetShipFromAddress()
    {
        return !is_null($this->_fields['ShipFromAddress']['FieldValue']);

    }




}