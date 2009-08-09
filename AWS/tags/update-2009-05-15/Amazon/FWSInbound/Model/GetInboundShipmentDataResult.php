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
 * Amazon_FWSInbound_Model_GetInboundShipmentDataResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentData: Amazon_FWSInbound_Model_InboundShipmentData</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_GetInboundShipmentDataResult extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_GetInboundShipmentDataResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ShipmentData: Amazon_FWSInbound_Model_InboundShipmentData</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ShipmentData' => array('FieldValue' => null, 'FieldType' => 'Amazon_FWSInbound_Model_InboundShipmentData'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ShipmentData.
     * 
     * @return InboundShipmentData ShipmentData
     */
    public function getShipmentData() 
    {
        return $this->_fields['ShipmentData']['FieldValue'];
    }

    /**
     * Sets the value of the ShipmentData.
     * 
     * @param InboundShipmentData ShipmentData
     * @return void
     */
    public function setShipmentData($value) 
    {
        $this->_fields['ShipmentData']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ShipmentData  and returns this instance
     * 
     * @param InboundShipmentData $value ShipmentData
     * @return Amazon_FWSInbound_Model_GetInboundShipmentDataResult instance
     */
    public function withShipmentData($value)
    {
        $this->setShipmentData($value);
        return $this;
    }


    /**
     * Checks if ShipmentData  is set
     * 
     * @return bool true if ShipmentData property is set
     */
    public function isSetShipmentData()
    {
        return !is_null($this->_fields['ShipmentData']['FieldValue']);

    }




}