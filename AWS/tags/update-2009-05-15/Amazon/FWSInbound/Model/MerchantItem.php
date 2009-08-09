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
 * Amazon_FWSInbound_Model_MerchantItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>ASIN: string</li>
 * <li>Condition: string</li>
 * <li>MerchantSKU: string</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_MerchantItem extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_MerchantItem
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ASIN: string</li>
     * <li>Condition: string</li>
     * <li>MerchantSKU: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Condition' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MerchantSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ASIN property.
     * 
     * @return string ASIN
     */
    public function getASIN() 
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Sets the value of the ASIN property.
     * 
     * @param string ASIN
     * @return this instance
     */
    public function setASIN($value) 
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ASIN and returns this instance
     * 
     * @param string $value ASIN
     * @return Amazon_FWSInbound_Model_MerchantItem instance
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }


    /**
     * Checks if ASIN is set
     * 
     * @return bool true if ASIN  is set
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }

    /**
     * Gets the value of the Condition property.
     * 
     * @return string Condition
     */
    public function getCondition() 
    {
        return $this->_fields['Condition']['FieldValue'];
    }

    /**
     * Sets the value of the Condition property.
     * 
     * @param string Condition
     * @return this instance
     */
    public function setCondition($value) 
    {
        $this->_fields['Condition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Condition and returns this instance
     * 
     * @param string $value Condition
     * @return Amazon_FWSInbound_Model_MerchantItem instance
     */
    public function withCondition($value)
    {
        $this->setCondition($value);
        return $this;
    }


    /**
     * Checks if Condition is set
     * 
     * @return bool true if Condition  is set
     */
    public function isSetCondition()
    {
        return !is_null($this->_fields['Condition']['FieldValue']);
    }

    /**
     * Gets the value of the MerchantSKU property.
     * 
     * @return string MerchantSKU
     */
    public function getMerchantSKU() 
    {
        return $this->_fields['MerchantSKU']['FieldValue'];
    }

    /**
     * Sets the value of the MerchantSKU property.
     * 
     * @param string MerchantSKU
     * @return this instance
     */
    public function setMerchantSKU($value) 
    {
        $this->_fields['MerchantSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MerchantSKU and returns this instance
     * 
     * @param string $value MerchantSKU
     * @return Amazon_FWSInbound_Model_MerchantItem instance
     */
    public function withMerchantSKU($value)
    {
        $this->setMerchantSKU($value);
        return $this;
    }


    /**
     * Checks if MerchantSKU is set
     * 
     * @return bool true if MerchantSKU  is set
     */
    public function isSetMerchantSKU()
    {
        return !is_null($this->_fields['MerchantSKU']['FieldValue']);
    }




}