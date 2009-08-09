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
 * Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKU
 * 
 * Properties:
 * <ul>
 * 
 * <li>FulfillmentNetworkSKU: string</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKU extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKU
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>FulfillmentNetworkSKU: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'FulfillmentNetworkSKU' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the FulfillmentNetworkSKU .
     * 
     * @return array of string FulfillmentNetworkSKU
     */
    public function getFulfillmentNetworkSKU() 
    {
        return $this->_fields['FulfillmentNetworkSKU']['FieldValue'];
    }

    /**
     * Sets the value of the FulfillmentNetworkSKU.
     * 
     * @param string or an array of string FulfillmentNetworkSKU
     * @return this instance
     */
    public function setFulfillmentNetworkSKU($fulfillmentNetworkSKU) 
    {
        if (!$this->_isNumericArray($fulfillmentNetworkSKU)) {
            $fulfillmentNetworkSKU =  array ($fulfillmentNetworkSKU);    
        }
        $this->_fields['FulfillmentNetworkSKU']['FieldValue'] = $fulfillmentNetworkSKU;
        return $this;
    }
  

    /**
     * Sets single or multiple values of FulfillmentNetworkSKU list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withFulfillmentNetworkSKU($fulfillmentNetworkSKU1, $fulfillmentNetworkSKU2)</code>
     * 
     * @param string  $stringArgs one or more FulfillmentNetworkSKU
     * @return Amazon_FWSInbound_Model_GetFulfillmentItemByFNSKU  instance
     */
    public function withFulfillmentNetworkSKU($stringArgs)
    {
        foreach (func_get_args() as $fulfillmentNetworkSKU) {
            $this->_fields['FulfillmentNetworkSKU']['FieldValue'][] = $fulfillmentNetworkSKU;
        }
        return $this;
    }  
      

    /**
     * Checks if FulfillmentNetworkSKU list is non-empty
     * 
     * @return bool true if FulfillmentNetworkSKU list is non-empty
     */
    public function isSetFulfillmentNetworkSKU()
    {
        return count ($this->_fields['FulfillmentNetworkSKU']['FieldValue']) > 0;
    }




}