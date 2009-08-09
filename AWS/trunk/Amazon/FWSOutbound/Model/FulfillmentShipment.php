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
 * Amazon_FWSOutbound_Model_FulfillmentShipment
 * 
 * Properties:
 * <ul>
 * 
 * <li>AmazonShipmentId: string</li>
 * <li>FulfillmentCenterId: string</li>
 * <li>FulfillmentShipmentStatus: string</li>
 * <li>ShippingDateTime: string</li>
 * <li>EstimatedArrivalDateTime: string</li>
 * <li>FulfillmentShipmentItem: Amazon_FWSOutbound_Model_FulfillmentShipmentItem</li>
 * <li>FulfillmentShipmentPackage: Amazon_FWSOutbound_Model_FulfillmentShipmentPackage</li>
 *
 * </ul>
 */ 
class Amazon_FWSOutbound_Model_FulfillmentShipment extends Amazon_FWSOutbound_Model
{


    /**
     * Construct new Amazon_FWSOutbound_Model_FulfillmentShipment
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>AmazonShipmentId: string</li>
     * <li>FulfillmentCenterId: string</li>
     * <li>FulfillmentShipmentStatus: string</li>
     * <li>ShippingDateTime: string</li>
     * <li>EstimatedArrivalDateTime: string</li>
     * <li>FulfillmentShipmentItem: Amazon_FWSOutbound_Model_FulfillmentShipmentItem</li>
     * <li>FulfillmentShipmentPackage: Amazon_FWSOutbound_Model_FulfillmentShipmentPackage</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'AmazonShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'FulfillmentCenterId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'FulfillmentShipmentStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ShippingDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'EstimatedArrivalDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'FulfillmentShipmentItem' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FWSOutbound_Model_FulfillmentShipmentItem')),
        'FulfillmentShipmentPackage' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FWSOutbound_Model_FulfillmentShipmentPackage')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the AmazonShipmentId property.
     * 
     * @return string AmazonShipmentId
     */
    public function getAmazonShipmentId() 
    {
        return $this->_fields['AmazonShipmentId']['FieldValue'];
    }

    /**
     * Sets the value of the AmazonShipmentId property.
     * 
     * @param string AmazonShipmentId
     * @return this instance
     */
    public function setAmazonShipmentId($value) 
    {
        $this->_fields['AmazonShipmentId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AmazonShipmentId and returns this instance
     * 
     * @param string $value AmazonShipmentId
     * @return Amazon_FWSOutbound_Model_FulfillmentShipment instance
     */
    public function withAmazonShipmentId($value)
    {
        $this->setAmazonShipmentId($value);
        return $this;
    }


    /**
     * Checks if AmazonShipmentId is set
     * 
     * @return bool true if AmazonShipmentId  is set
     */
    public function isSetAmazonShipmentId()
    {
        return !is_null($this->_fields['AmazonShipmentId']['FieldValue']);
    }

    /**
     * Gets the value of the FulfillmentCenterId property.
     * 
     * @return string FulfillmentCenterId
     */
    public function getFulfillmentCenterId() 
    {
        return $this->_fields['FulfillmentCenterId']['FieldValue'];
    }

    /**
     * Sets the value of the FulfillmentCenterId property.
     * 
     * @param string FulfillmentCenterId
     * @return this instance
     */
    public function setFulfillmentCenterId($value) 
    {
        $this->_fields['FulfillmentCenterId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the FulfillmentCenterId and returns this instance
     * 
     * @param string $value FulfillmentCenterId
     * @return Amazon_FWSOutbound_Model_FulfillmentShipment instance
     */
    public function withFulfillmentCenterId($value)
    {
        $this->setFulfillmentCenterId($value);
        return $this;
    }


    /**
     * Checks if FulfillmentCenterId is set
     * 
     * @return bool true if FulfillmentCenterId  is set
     */
    public function isSetFulfillmentCenterId()
    {
        return !is_null($this->_fields['FulfillmentCenterId']['FieldValue']);
    }

    /**
     * Gets the value of the FulfillmentShipmentStatus property.
     * 
     * @return string FulfillmentShipmentStatus
     */
    public function getFulfillmentShipmentStatus() 
    {
        return $this->_fields['FulfillmentShipmentStatus']['FieldValue'];
    }

    /**
     * Sets the value of the FulfillmentShipmentStatus property.
     * 
     * @param string FulfillmentShipmentStatus
     * @return this instance
     */
    public function setFulfillmentShipmentStatus($value) 
    {
        $this->_fields['FulfillmentShipmentStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the FulfillmentShipmentStatus and returns this instance
     * 
     * @param string $value FulfillmentShipmentStatus
     * @return Amazon_FWSOutbound_Model_FulfillmentShipment instance
     */
    public function withFulfillmentShipmentStatus($value)
    {
        $this->setFulfillmentShipmentStatus($value);
        return $this;
    }


    /**
     * Checks if FulfillmentShipmentStatus is set
     * 
     * @return bool true if FulfillmentShipmentStatus  is set
     */
    public function isSetFulfillmentShipmentStatus()
    {
        return !is_null($this->_fields['FulfillmentShipmentStatus']['FieldValue']);
    }

    /**
     * Gets the value of the ShippingDateTime property.
     * 
     * @return string ShippingDateTime
     */
    public function getShippingDateTime() 
    {
        return $this->_fields['ShippingDateTime']['FieldValue'];
    }

    /**
     * Sets the value of the ShippingDateTime property.
     * 
     * @param string ShippingDateTime
     * @return this instance
     */
    public function setShippingDateTime($value) 
    {
        $this->_fields['ShippingDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ShippingDateTime and returns this instance
     * 
     * @param string $value ShippingDateTime
     * @return Amazon_FWSOutbound_Model_FulfillmentShipment instance
     */
    public function withShippingDateTime($value)
    {
        $this->setShippingDateTime($value);
        return $this;
    }


    /**
     * Checks if ShippingDateTime is set
     * 
     * @return bool true if ShippingDateTime  is set
     */
    public function isSetShippingDateTime()
    {
        return !is_null($this->_fields['ShippingDateTime']['FieldValue']);
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
     * @return Amazon_FWSOutbound_Model_FulfillmentShipment instance
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

    /**
     * Gets the value of the FulfillmentShipmentItem.
     * 
     * @return array of FulfillmentShipmentItem FulfillmentShipmentItem
     */
    public function getFulfillmentShipmentItem() 
    {
        return $this->_fields['FulfillmentShipmentItem']['FieldValue'];
    }

    /**
     * Sets the value of the FulfillmentShipmentItem.
     * 
     * @param mixed FulfillmentShipmentItem or an array of FulfillmentShipmentItem FulfillmentShipmentItem
     * @return this instance
     */
    public function setFulfillmentShipmentItem($fulfillmentShipmentItem) 
    {
        if (!$this->_isNumericArray($fulfillmentShipmentItem)) {
            $fulfillmentShipmentItem =  array ($fulfillmentShipmentItem);    
        }
        $this->_fields['FulfillmentShipmentItem']['FieldValue'] = $fulfillmentShipmentItem;
        return $this;
    }


    /**
     * Sets single or multiple values of FulfillmentShipmentItem list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withFulfillmentShipmentItem($fulfillmentShipmentItem1, $fulfillmentShipmentItem2)</code>
     * 
     * @param FulfillmentShipmentItem  $fulfillmentShipmentItemArgs one or more FulfillmentShipmentItem
     * @return Amazon_FWSOutbound_Model_FulfillmentShipment  instance
     */
    public function withFulfillmentShipmentItem($fulfillmentShipmentItemArgs)
    {
        foreach (func_get_args() as $fulfillmentShipmentItem) {
            $this->_fields['FulfillmentShipmentItem']['FieldValue'][] = $fulfillmentShipmentItem;
        }
        return $this;
    }   



    /**
     * Checks if FulfillmentShipmentItem list is non-empty
     * 
     * @return bool true if FulfillmentShipmentItem list is non-empty
     */
    public function isSetFulfillmentShipmentItem()
    {
        return count ($this->_fields['FulfillmentShipmentItem']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the FulfillmentShipmentPackage.
     * 
     * @return array of FulfillmentShipmentPackage FulfillmentShipmentPackage
     */
    public function getFulfillmentShipmentPackage() 
    {
        return $this->_fields['FulfillmentShipmentPackage']['FieldValue'];
    }

    /**
     * Sets the value of the FulfillmentShipmentPackage.
     * 
     * @param mixed FulfillmentShipmentPackage or an array of FulfillmentShipmentPackage FulfillmentShipmentPackage
     * @return this instance
     */
    public function setFulfillmentShipmentPackage($fulfillmentShipmentPackage) 
    {
        if (!$this->_isNumericArray($fulfillmentShipmentPackage)) {
            $fulfillmentShipmentPackage =  array ($fulfillmentShipmentPackage);    
        }
        $this->_fields['FulfillmentShipmentPackage']['FieldValue'] = $fulfillmentShipmentPackage;
        return $this;
    }


    /**
     * Sets single or multiple values of FulfillmentShipmentPackage list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withFulfillmentShipmentPackage($fulfillmentShipmentPackage1, $fulfillmentShipmentPackage2)</code>
     * 
     * @param FulfillmentShipmentPackage  $fulfillmentShipmentPackageArgs one or more FulfillmentShipmentPackage
     * @return Amazon_FWSOutbound_Model_FulfillmentShipment  instance
     */
    public function withFulfillmentShipmentPackage($fulfillmentShipmentPackageArgs)
    {
        foreach (func_get_args() as $fulfillmentShipmentPackage) {
            $this->_fields['FulfillmentShipmentPackage']['FieldValue'][] = $fulfillmentShipmentPackage;
        }
        return $this;
    }   



    /**
     * Checks if FulfillmentShipmentPackage list is non-empty
     * 
     * @return bool true if FulfillmentShipmentPackage list is non-empty
     */
    public function isSetFulfillmentShipmentPackage()
    {
        return count ($this->_fields['FulfillmentShipmentPackage']['FieldValue']) > 0;
    }




}