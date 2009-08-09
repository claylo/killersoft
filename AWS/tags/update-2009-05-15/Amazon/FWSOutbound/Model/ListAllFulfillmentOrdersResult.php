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
 * Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>NextToken: string</li>
 * <li>HasNext: bool</li>
 * <li>FulfillmentOrder: Amazon_FWSOutbound_Model_FulfillmentOrder</li>
 *
 * </ul>
 */ 
class Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResult extends Amazon_FWSOutbound_Model
{


    /**
     * Construct new Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>FulfillmentOrder: Amazon_FWSOutbound_Model_FulfillmentOrder</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'FulfillmentOrder' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FWSOutbound_Model_FulfillmentOrder')),
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
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResult instance
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
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResult instance
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
     * Gets the value of the FulfillmentOrder.
     * 
     * @return array of FulfillmentOrder FulfillmentOrder
     */
    public function getFulfillmentOrder() 
    {
        return $this->_fields['FulfillmentOrder']['FieldValue'];
    }

    /**
     * Sets the value of the FulfillmentOrder.
     * 
     * @param mixed FulfillmentOrder or an array of FulfillmentOrder FulfillmentOrder
     * @return this instance
     */
    public function setFulfillmentOrder($fulfillmentOrder) 
    {
        if (!$this->_isNumericArray($fulfillmentOrder)) {
            $fulfillmentOrder =  array ($fulfillmentOrder);    
        }
        $this->_fields['FulfillmentOrder']['FieldValue'] = $fulfillmentOrder;
        return $this;
    }


    /**
     * Sets single or multiple values of FulfillmentOrder list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withFulfillmentOrder($fulfillmentOrder1, $fulfillmentOrder2)</code>
     * 
     * @param FulfillmentOrder  $fulfillmentOrderArgs one or more FulfillmentOrder
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResult  instance
     */
    public function withFulfillmentOrder($fulfillmentOrderArgs)
    {
        foreach (func_get_args() as $fulfillmentOrder) {
            $this->_fields['FulfillmentOrder']['FieldValue'][] = $fulfillmentOrder;
        }
        return $this;
    }   



    /**
     * Checks if FulfillmentOrder list is non-empty
     * 
     * @return bool true if FulfillmentOrder list is non-empty
     */
    public function isSetFulfillmentOrder()
    {
        return count ($this->_fields['FulfillmentOrder']['FieldValue']) > 0;
    }




}