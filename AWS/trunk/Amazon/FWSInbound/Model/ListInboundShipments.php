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
 * Amazon_FWSInbound_Model_ListInboundShipments
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentStatus: string</li>
 * <li>CreatedBefore: string</li>
 * <li>CreatedAfter: string</li>
 * <li>MaxCount: int</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_ListInboundShipments extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_ListInboundShipments
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ShipmentStatus: string</li>
     * <li>CreatedBefore: string</li>
     * <li>CreatedAfter: string</li>
     * <li>MaxCount: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ShipmentStatus' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'CreatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CreatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MaxCount' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ShipmentStatus .
     * 
     * @return array of string ShipmentStatus
     */
    public function getShipmentStatus() 
    {
        return $this->_fields['ShipmentStatus']['FieldValue'];
    }

    /**
     * Sets the value of the ShipmentStatus.
     * 
     * @param string or an array of string ShipmentStatus
     * @return this instance
     */
    public function setShipmentStatus($shipmentStatus) 
    {
        if (!$this->_isNumericArray($shipmentStatus)) {
            $shipmentStatus =  array ($shipmentStatus);    
        }
        $this->_fields['ShipmentStatus']['FieldValue'] = $shipmentStatus;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ShipmentStatus list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withShipmentStatus($shipmentStatus1, $shipmentStatus2)</code>
     * 
     * @param string  $stringArgs one or more ShipmentStatus
     * @return Amazon_FWSInbound_Model_ListInboundShipments  instance
     */
    public function withShipmentStatus($stringArgs)
    {
        foreach (func_get_args() as $shipmentStatus) {
            $this->_fields['ShipmentStatus']['FieldValue'][] = $shipmentStatus;
        }
        return $this;
    }  
      

    /**
     * Checks if ShipmentStatus list is non-empty
     * 
     * @return bool true if ShipmentStatus list is non-empty
     */
    public function isSetShipmentStatus()
    {
        return count ($this->_fields['ShipmentStatus']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the CreatedBefore property.
     * 
     * @return string CreatedBefore
     */
    public function getCreatedBefore() 
    {
        return $this->_fields['CreatedBefore']['FieldValue'];
    }

    /**
     * Sets the value of the CreatedBefore property.
     * 
     * @param string CreatedBefore
     * @return this instance
     */
    public function setCreatedBefore($value) 
    {
        $this->_fields['CreatedBefore']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CreatedBefore and returns this instance
     * 
     * @param string $value CreatedBefore
     * @return Amazon_FWSInbound_Model_ListInboundShipments instance
     */
    public function withCreatedBefore($value)
    {
        $this->setCreatedBefore($value);
        return $this;
    }


    /**
     * Checks if CreatedBefore is set
     * 
     * @return bool true if CreatedBefore  is set
     */
    public function isSetCreatedBefore()
    {
        return !is_null($this->_fields['CreatedBefore']['FieldValue']);
    }

    /**
     * Gets the value of the CreatedAfter property.
     * 
     * @return string CreatedAfter
     */
    public function getCreatedAfter() 
    {
        return $this->_fields['CreatedAfter']['FieldValue'];
    }

    /**
     * Sets the value of the CreatedAfter property.
     * 
     * @param string CreatedAfter
     * @return this instance
     */
    public function setCreatedAfter($value) 
    {
        $this->_fields['CreatedAfter']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CreatedAfter and returns this instance
     * 
     * @param string $value CreatedAfter
     * @return Amazon_FWSInbound_Model_ListInboundShipments instance
     */
    public function withCreatedAfter($value)
    {
        $this->setCreatedAfter($value);
        return $this;
    }


    /**
     * Checks if CreatedAfter is set
     * 
     * @return bool true if CreatedAfter  is set
     */
    public function isSetCreatedAfter()
    {
        return !is_null($this->_fields['CreatedAfter']['FieldValue']);
    }

    /**
     * Gets the value of the MaxCount property.
     * 
     * @return int MaxCount
     */
    public function getMaxCount() 
    {
        return $this->_fields['MaxCount']['FieldValue'];
    }

    /**
     * Sets the value of the MaxCount property.
     * 
     * @param int MaxCount
     * @return this instance
     */
    public function setMaxCount($value) 
    {
        $this->_fields['MaxCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MaxCount and returns this instance
     * 
     * @param int $value MaxCount
     * @return Amazon_FWSInbound_Model_ListInboundShipments instance
     */
    public function withMaxCount($value)
    {
        $this->setMaxCount($value);
        return $this;
    }


    /**
     * Checks if MaxCount is set
     * 
     * @return bool true if MaxCount  is set
     */
    public function isSetMaxCount()
    {
        return !is_null($this->_fields['MaxCount']['FieldValue']);
    }




}