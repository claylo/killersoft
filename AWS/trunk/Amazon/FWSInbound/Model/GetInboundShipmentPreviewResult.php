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
 * Amazon_FWSInbound_Model_GetInboundShipmentPreviewResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentPreview: Amazon_FWSInbound_Model_ShipmentPreview</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_GetInboundShipmentPreviewResult extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_GetInboundShipmentPreviewResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ShipmentPreview: Amazon_FWSInbound_Model_ShipmentPreview</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ShipmentPreview' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FWSInbound_Model_ShipmentPreview')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ShipmentPreview.
     * 
     * @return array of ShipmentPreview ShipmentPreview
     */
    public function getShipmentPreview() 
    {
        return $this->_fields['ShipmentPreview']['FieldValue'];
    }

    /**
     * Sets the value of the ShipmentPreview.
     * 
     * @param mixed ShipmentPreview or an array of ShipmentPreview ShipmentPreview
     * @return this instance
     */
    public function setShipmentPreview($shipmentPreview) 
    {
        if (!$this->_isNumericArray($shipmentPreview)) {
            $shipmentPreview =  array ($shipmentPreview);    
        }
        $this->_fields['ShipmentPreview']['FieldValue'] = $shipmentPreview;
        return $this;
    }


    /**
     * Sets single or multiple values of ShipmentPreview list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withShipmentPreview($shipmentPreview1, $shipmentPreview2)</code>
     * 
     * @param ShipmentPreview  $shipmentPreviewArgs one or more ShipmentPreview
     * @return Amazon_FWSInbound_Model_GetInboundShipmentPreviewResult  instance
     */
    public function withShipmentPreview($shipmentPreviewArgs)
    {
        foreach (func_get_args() as $shipmentPreview) {
            $this->_fields['ShipmentPreview']['FieldValue'][] = $shipmentPreview;
        }
        return $this;
    }   



    /**
     * Checks if ShipmentPreview list is non-empty
     * 
     * @return bool true if ShipmentPreview list is non-empty
     */
    public function isSetShipmentPreview()
    {
        return count ($this->_fields['ShipmentPreview']['FieldValue']) > 0;
    }




}