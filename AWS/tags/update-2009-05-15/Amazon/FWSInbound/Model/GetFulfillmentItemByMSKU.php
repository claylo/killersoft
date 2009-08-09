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
 * Amazon_FWSInbound_Model_GetFulfillmentItemByMSKU
 * 
 * Properties:
 * <ul>
 * 
 * <li>MerchantSKU: string</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_GetFulfillmentItemByMSKU extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_GetFulfillmentItemByMSKU
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>MerchantSKU: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'MerchantSKU' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the MerchantSKU .
     * 
     * @return array of string MerchantSKU
     */
    public function getMerchantSKU() 
    {
        return $this->_fields['MerchantSKU']['FieldValue'];
    }

    /**
     * Sets the value of the MerchantSKU.
     * 
     * @param string or an array of string MerchantSKU
     * @return this instance
     */
    public function setMerchantSKU($merchantSKU) 
    {
        if (!$this->_isNumericArray($merchantSKU)) {
            $merchantSKU =  array ($merchantSKU);    
        }
        $this->_fields['MerchantSKU']['FieldValue'] = $merchantSKU;
        return $this;
    }
  

    /**
     * Sets single or multiple values of MerchantSKU list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withMerchantSKU($merchantSKU1, $merchantSKU2)</code>
     * 
     * @param string  $stringArgs one or more MerchantSKU
     * @return Amazon_FWSInbound_Model_GetFulfillmentItemByMSKU  instance
     */
    public function withMerchantSKU($stringArgs)
    {
        foreach (func_get_args() as $merchantSKU) {
            $this->_fields['MerchantSKU']['FieldValue'][] = $merchantSKU;
        }
        return $this;
    }  
      

    /**
     * Checks if MerchantSKU list is non-empty
     * 
     * @return bool true if MerchantSKU list is non-empty
     */
    public function isSetMerchantSKU()
    {
        return count ($this->_fields['MerchantSKU']['FieldValue']) > 0;
    }




}