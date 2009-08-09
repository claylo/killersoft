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
 * Amazon_FWSOutbound_Model_ListAllFulfillmentOrders
 * 
 * Properties:
 * <ul>
 * 
 * <li>NumberOfResultsRequested: int</li>
 * <li>QueryStartDateTime: string</li>
 *
 * </ul>
 */ 
class Amazon_FWSOutbound_Model_ListAllFulfillmentOrders extends Amazon_FWSOutbound_Model
{


    /**
     * Construct new Amazon_FWSOutbound_Model_ListAllFulfillmentOrders
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NumberOfResultsRequested: int</li>
     * <li>QueryStartDateTime: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'NumberOfResultsRequested' => array('FieldValue' => null, 'FieldType' => 'int'),
        'QueryStartDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the NumberOfResultsRequested property.
     * 
     * @return int NumberOfResultsRequested
     */
    public function getNumberOfResultsRequested() 
    {
        return $this->_fields['NumberOfResultsRequested']['FieldValue'];
    }

    /**
     * Sets the value of the NumberOfResultsRequested property.
     * 
     * @param int NumberOfResultsRequested
     * @return this instance
     */
    public function setNumberOfResultsRequested($value) 
    {
        $this->_fields['NumberOfResultsRequested']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the NumberOfResultsRequested and returns this instance
     * 
     * @param int $value NumberOfResultsRequested
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrders instance
     */
    public function withNumberOfResultsRequested($value)
    {
        $this->setNumberOfResultsRequested($value);
        return $this;
    }


    /**
     * Checks if NumberOfResultsRequested is set
     * 
     * @return bool true if NumberOfResultsRequested  is set
     */
    public function isSetNumberOfResultsRequested()
    {
        return !is_null($this->_fields['NumberOfResultsRequested']['FieldValue']);
    }

    /**
     * Gets the value of the QueryStartDateTime property.
     * 
     * @return string QueryStartDateTime
     */
    public function getQueryStartDateTime() 
    {
        return $this->_fields['QueryStartDateTime']['FieldValue'];
    }

    /**
     * Sets the value of the QueryStartDateTime property.
     * 
     * @param string QueryStartDateTime
     * @return this instance
     */
    public function setQueryStartDateTime($value) 
    {
        $this->_fields['QueryStartDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the QueryStartDateTime and returns this instance
     * 
     * @param string $value QueryStartDateTime
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrders instance
     */
    public function withQueryStartDateTime($value)
    {
        $this->setQueryStartDateTime($value);
        return $this;
    }


    /**
     * Checks if QueryStartDateTime is set
     * 
     * @return bool true if QueryStartDateTime  is set
     */
    public function isSetQueryStartDateTime()
    {
        return !is_null($this->_fields['QueryStartDateTime']['FieldValue']);
    }




}