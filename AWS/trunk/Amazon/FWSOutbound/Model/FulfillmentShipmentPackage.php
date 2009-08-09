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
 * Amazon_FWSOutbound_Model_FulfillmentShipmentPackage
 * 
 * Properties:
 * <ul>
 * 
 * <li>PackageNumber: int</li>
 * <li>CarrierCode: string</li>
 * <li>TrackingNumber: string</li>
 * <li>EstimatedArrivalDateTime: string</li>
 *
 * </ul>
 */ 
class Amazon_FWSOutbound_Model_FulfillmentShipmentPackage extends Amazon_FWSOutbound_Model
{


    /**
     * Construct new Amazon_FWSOutbound_Model_FulfillmentShipmentPackage
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>PackageNumber: int</li>
     * <li>CarrierCode: string</li>
     * <li>TrackingNumber: string</li>
     * <li>EstimatedArrivalDateTime: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'PackageNumber' => array('FieldValue' => null, 'FieldType' => 'int'),
        'CarrierCode' => array('FieldValue' => null, 'FieldType' => 'string'),
        'TrackingNumber' => array('FieldValue' => null, 'FieldType' => 'string'),
        'EstimatedArrivalDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the PackageNumber property.
     * 
     * @return int PackageNumber
     */
    public function getPackageNumber() 
    {
        return $this->_fields['PackageNumber']['FieldValue'];
    }

    /**
     * Sets the value of the PackageNumber property.
     * 
     * @param int PackageNumber
     * @return this instance
     */
    public function setPackageNumber($value) 
    {
        $this->_fields['PackageNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the PackageNumber and returns this instance
     * 
     * @param int $value PackageNumber
     * @return Amazon_FWSOutbound_Model_FulfillmentShipmentPackage instance
     */
    public function withPackageNumber($value)
    {
        $this->setPackageNumber($value);
        return $this;
    }


    /**
     * Checks if PackageNumber is set
     * 
     * @return bool true if PackageNumber  is set
     */
    public function isSetPackageNumber()
    {
        return !is_null($this->_fields['PackageNumber']['FieldValue']);
    }

    /**
     * Gets the value of the CarrierCode property.
     * 
     * @return string CarrierCode
     */
    public function getCarrierCode() 
    {
        return $this->_fields['CarrierCode']['FieldValue'];
    }

    /**
     * Sets the value of the CarrierCode property.
     * 
     * @param string CarrierCode
     * @return this instance
     */
    public function setCarrierCode($value) 
    {
        $this->_fields['CarrierCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CarrierCode and returns this instance
     * 
     * @param string $value CarrierCode
     * @return Amazon_FWSOutbound_Model_FulfillmentShipmentPackage instance
     */
    public function withCarrierCode($value)
    {
        $this->setCarrierCode($value);
        return $this;
    }


    /**
     * Checks if CarrierCode is set
     * 
     * @return bool true if CarrierCode  is set
     */
    public function isSetCarrierCode()
    {
        return !is_null($this->_fields['CarrierCode']['FieldValue']);
    }

    /**
     * Gets the value of the TrackingNumber property.
     * 
     * @return string TrackingNumber
     */
    public function getTrackingNumber() 
    {
        return $this->_fields['TrackingNumber']['FieldValue'];
    }

    /**
     * Sets the value of the TrackingNumber property.
     * 
     * @param string TrackingNumber
     * @return this instance
     */
    public function setTrackingNumber($value) 
    {
        $this->_fields['TrackingNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the TrackingNumber and returns this instance
     * 
     * @param string $value TrackingNumber
     * @return Amazon_FWSOutbound_Model_FulfillmentShipmentPackage instance
     */
    public function withTrackingNumber($value)
    {
        $this->setTrackingNumber($value);
        return $this;
    }


    /**
     * Checks if TrackingNumber is set
     * 
     * @return bool true if TrackingNumber  is set
     */
    public function isSetTrackingNumber()
    {
        return !is_null($this->_fields['TrackingNumber']['FieldValue']);
    }

    /**
     * Gets the value of the EstimatedArrivalDateTime property.
     * 
     * @return string EstimatedArrivalDateTime
     */
    public function getEstimatedArrivalDateTime() 
    {
        return $this->_fields['EstimatedArrivalDateTime']['FieldValue'];
    }

    /**
     * Sets the value of the EstimatedArrivalDateTime property.
     * 
     * @param string EstimatedArrivalDateTime
     * @return this instance
     */
    public function setEstimatedArrivalDateTime($value) 
    {
        $this->_fields['EstimatedArrivalDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the EstimatedArrivalDateTime and returns this instance
     * 
     * @param string $value EstimatedArrivalDateTime
     * @return Amazon_FWSOutbound_Model_FulfillmentShipmentPackage instance
     */
    public function withEstimatedArrivalDateTime($value)
    {
        $this->setEstimatedArrivalDateTime($value);
        return $this;
    }


    /**
     * Checks if EstimatedArrivalDateTime is set
     * 
     * @return bool true if EstimatedArrivalDateTime  is set
     */
    public function isSetEstimatedArrivalDateTime()
    {
        return !is_null($this->_fields['EstimatedArrivalDateTime']['FieldValue']);
    }




}