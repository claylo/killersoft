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
 * Amazon_FWSInbound_Model_ListInboundShipmentsByNextTokenResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>NextToken: string</li>
 * <li>HasNext: bool</li>
 * <li>ShipmentData: Amazon_FWSInbound_Model_InboundShipmentData</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_ListInboundShipmentsByNextTokenResult extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_ListInboundShipmentsByNextTokenResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>ShipmentData: Amazon_FWSInbound_Model_InboundShipmentData</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'ShipmentData' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FWSInbound_Model_InboundShipmentData')),
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
     * @return Amazon_FWSInbound_Model_ListInboundShipmentsByNextTokenResult instance
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
     * @return Amazon_FWSInbound_Model_ListInboundShipmentsByNextTokenResult instance
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
     * Gets the value of the ShipmentData.
     * 
     * @return array of InboundShipmentData ShipmentData
     */
    public function getShipmentData() 
    {
        return $this->_fields['ShipmentData']['FieldValue'];
    }

    /**
     * Sets the value of the ShipmentData.
     * 
     * @param mixed InboundShipmentData or an array of InboundShipmentData ShipmentData
     * @return this instance
     */
    public function setShipmentData($shipmentData) 
    {
        if (!$this->_isNumericArray($shipmentData)) {
            $shipmentData =  array ($shipmentData);    
        }
        $this->_fields['ShipmentData']['FieldValue'] = $shipmentData;
        return $this;
    }


    /**
     * Sets single or multiple values of ShipmentData list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withShipmentData($shipmentData1, $shipmentData2)</code>
     * 
     * @param InboundShipmentData  $inboundShipmentDataArgs one or more ShipmentData
     * @return Amazon_FWSInbound_Model_ListInboundShipmentsByNextTokenResult  instance
     */
    public function withShipmentData($inboundShipmentDataArgs)
    {
        foreach (func_get_args() as $shipmentData) {
            $this->_fields['ShipmentData']['FieldValue'][] = $shipmentData;
        }
        return $this;
    }   



    /**
     * Checks if ShipmentData list is non-empty
     * 
     * @return bool true if ShipmentData list is non-empty
     */
    public function isSetShipmentData()
    {
        return count ($this->_fields['ShipmentData']['FieldValue']) > 0;
    }




}