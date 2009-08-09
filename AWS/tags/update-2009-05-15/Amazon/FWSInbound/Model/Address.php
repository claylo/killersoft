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
 * Amazon_FWSInbound_Model_Address
 * 
 * Properties:
 * <ul>
 * 
 * <li>Name: string</li>
 * <li>AddressLine1: string</li>
 * <li>AddressLine2: string</li>
 * <li>City: string</li>
 * <li>StateOrProvinceCode: string</li>
 * <li>CountryCode: string</li>
 * <li>PostalCode: string</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_Address extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_Address
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Name: string</li>
     * <li>AddressLine1: string</li>
     * <li>AddressLine2: string</li>
     * <li>City: string</li>
     * <li>StateOrProvinceCode: string</li>
     * <li>CountryCode: string</li>
     * <li>PostalCode: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AddressLine1' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AddressLine2' => array('FieldValue' => null, 'FieldType' => 'string'),
        'City' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StateOrProvinceCode' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CountryCode' => array('FieldValue' => null, 'FieldType' => 'string'),
        'PostalCode' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Name property.
     * 
     * @return string Name
     */
    public function getName() 
    {
        return $this->_fields['Name']['FieldValue'];
    }

    /**
     * Sets the value of the Name property.
     * 
     * @param string Name
     * @return this instance
     */
    public function setName($value) 
    {
        $this->_fields['Name']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Name and returns this instance
     * 
     * @param string $value Name
     * @return Amazon_FWSInbound_Model_Address instance
     */
    public function withName($value)
    {
        $this->setName($value);
        return $this;
    }


    /**
     * Checks if Name is set
     * 
     * @return bool true if Name  is set
     */
    public function isSetName()
    {
        return !is_null($this->_fields['Name']['FieldValue']);
    }

    /**
     * Gets the value of the AddressLine1 property.
     * 
     * @return string AddressLine1
     */
    public function getAddressLine1() 
    {
        return $this->_fields['AddressLine1']['FieldValue'];
    }

    /**
     * Sets the value of the AddressLine1 property.
     * 
     * @param string AddressLine1
     * @return this instance
     */
    public function setAddressLine1($value) 
    {
        $this->_fields['AddressLine1']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AddressLine1 and returns this instance
     * 
     * @param string $value AddressLine1
     * @return Amazon_FWSInbound_Model_Address instance
     */
    public function withAddressLine1($value)
    {
        $this->setAddressLine1($value);
        return $this;
    }


    /**
     * Checks if AddressLine1 is set
     * 
     * @return bool true if AddressLine1  is set
     */
    public function isSetAddressLine1()
    {
        return !is_null($this->_fields['AddressLine1']['FieldValue']);
    }

    /**
     * Gets the value of the AddressLine2 property.
     * 
     * @return string AddressLine2
     */
    public function getAddressLine2() 
    {
        return $this->_fields['AddressLine2']['FieldValue'];
    }

    /**
     * Sets the value of the AddressLine2 property.
     * 
     * @param string AddressLine2
     * @return this instance
     */
    public function setAddressLine2($value) 
    {
        $this->_fields['AddressLine2']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AddressLine2 and returns this instance
     * 
     * @param string $value AddressLine2
     * @return Amazon_FWSInbound_Model_Address instance
     */
    public function withAddressLine2($value)
    {
        $this->setAddressLine2($value);
        return $this;
    }


    /**
     * Checks if AddressLine2 is set
     * 
     * @return bool true if AddressLine2  is set
     */
    public function isSetAddressLine2()
    {
        return !is_null($this->_fields['AddressLine2']['FieldValue']);
    }

    /**
     * Gets the value of the City property.
     * 
     * @return string City
     */
    public function getCity() 
    {
        return $this->_fields['City']['FieldValue'];
    }

    /**
     * Sets the value of the City property.
     * 
     * @param string City
     * @return this instance
     */
    public function setCity($value) 
    {
        $this->_fields['City']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the City and returns this instance
     * 
     * @param string $value City
     * @return Amazon_FWSInbound_Model_Address instance
     */
    public function withCity($value)
    {
        $this->setCity($value);
        return $this;
    }


    /**
     * Checks if City is set
     * 
     * @return bool true if City  is set
     */
    public function isSetCity()
    {
        return !is_null($this->_fields['City']['FieldValue']);
    }

    /**
     * Gets the value of the StateOrProvinceCode property.
     * 
     * @return string StateOrProvinceCode
     */
    public function getStateOrProvinceCode() 
    {
        return $this->_fields['StateOrProvinceCode']['FieldValue'];
    }

    /**
     * Sets the value of the StateOrProvinceCode property.
     * 
     * @param string StateOrProvinceCode
     * @return this instance
     */
    public function setStateOrProvinceCode($value) 
    {
        $this->_fields['StateOrProvinceCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the StateOrProvinceCode and returns this instance
     * 
     * @param string $value StateOrProvinceCode
     * @return Amazon_FWSInbound_Model_Address instance
     */
    public function withStateOrProvinceCode($value)
    {
        $this->setStateOrProvinceCode($value);
        return $this;
    }


    /**
     * Checks if StateOrProvinceCode is set
     * 
     * @return bool true if StateOrProvinceCode  is set
     */
    public function isSetStateOrProvinceCode()
    {
        return !is_null($this->_fields['StateOrProvinceCode']['FieldValue']);
    }

    /**
     * Gets the value of the CountryCode property.
     * 
     * @return string CountryCode
     */
    public function getCountryCode() 
    {
        return $this->_fields['CountryCode']['FieldValue'];
    }

    /**
     * Sets the value of the CountryCode property.
     * 
     * @param string CountryCode
     * @return this instance
     */
    public function setCountryCode($value) 
    {
        $this->_fields['CountryCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CountryCode and returns this instance
     * 
     * @param string $value CountryCode
     * @return Amazon_FWSInbound_Model_Address instance
     */
    public function withCountryCode($value)
    {
        $this->setCountryCode($value);
        return $this;
    }


    /**
     * Checks if CountryCode is set
     * 
     * @return bool true if CountryCode  is set
     */
    public function isSetCountryCode()
    {
        return !is_null($this->_fields['CountryCode']['FieldValue']);
    }

    /**
     * Gets the value of the PostalCode property.
     * 
     * @return string PostalCode
     */
    public function getPostalCode() 
    {
        return $this->_fields['PostalCode']['FieldValue'];
    }

    /**
     * Sets the value of the PostalCode property.
     * 
     * @param string PostalCode
     * @return this instance
     */
    public function setPostalCode($value) 
    {
        $this->_fields['PostalCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the PostalCode and returns this instance
     * 
     * @param string $value PostalCode
     * @return Amazon_FWSInbound_Model_Address instance
     */
    public function withPostalCode($value)
    {
        $this->setPostalCode($value);
        return $this;
    }


    /**
     * Checks if PostalCode is set
     * 
     * @return bool true if PostalCode  is set
     */
    public function isSetPostalCode()
    {
        return !is_null($this->_fields['PostalCode']['FieldValue']);
    }




}