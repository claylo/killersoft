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
 * Amazon_FWSInbound_Model_GetFulfillmentIdentifier
 * 
 * Properties:
 * <ul>
 * 
 * <li>MerchantItem: Amazon_FWSInbound_Model_MerchantItem</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_GetFulfillmentIdentifier extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_GetFulfillmentIdentifier
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>MerchantItem: Amazon_FWSInbound_Model_MerchantItem</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'MerchantItem' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FWSInbound_Model_MerchantItem')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the MerchantItem.
     * 
     * @return array of MerchantItem MerchantItem
     */
    public function getMerchantItem() 
    {
        return $this->_fields['MerchantItem']['FieldValue'];
    }

    /**
     * Sets the value of the MerchantItem.
     * 
     * @param mixed MerchantItem or an array of MerchantItem MerchantItem
     * @return this instance
     */
    public function setMerchantItem($merchantItem) 
    {
        if (!$this->_isNumericArray($merchantItem)) {
            $merchantItem =  array ($merchantItem);    
        }
        $this->_fields['MerchantItem']['FieldValue'] = $merchantItem;
        return $this;
    }


    /**
     * Sets single or multiple values of MerchantItem list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withMerchantItem($merchantItem1, $merchantItem2)</code>
     * 
     * @param MerchantItem  $merchantItemArgs one or more MerchantItem
     * @return Amazon_FWSInbound_Model_GetFulfillmentIdentifier  instance
     */
    public function withMerchantItem($merchantItemArgs)
    {
        foreach (func_get_args() as $merchantItem) {
            $this->_fields['MerchantItem']['FieldValue'][] = $merchantItem;
        }
        return $this;
    }   



    /**
     * Checks if MerchantItem list is non-empty
     * 
     * @return bool true if MerchantItem list is non-empty
     */
    public function isSetMerchantItem()
    {
        return count ($this->_fields['MerchantItem']['FieldValue']) > 0;
    }




}