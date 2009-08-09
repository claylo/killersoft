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
 * Amazon_FWSInbound_Model_ListAllFulfillmentItems
 * 
 * Properties:
 * <ul>
 * 
 * <li>IncludeInactive: bool</li>
 * <li>MaxCount: int</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_ListAllFulfillmentItems extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_ListAllFulfillmentItems
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>IncludeInactive: bool</li>
     * <li>MaxCount: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'IncludeInactive' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'MaxCount' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the IncludeInactive property.
     * 
     * @return bool IncludeInactive
     */
    public function getIncludeInactive() 
    {
        return $this->_fields['IncludeInactive']['FieldValue'];
    }

    /**
     * Sets the value of the IncludeInactive property.
     * 
     * @param bool IncludeInactive
     * @return this instance
     */
    public function setIncludeInactive($value) 
    {
        $this->_fields['IncludeInactive']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the IncludeInactive and returns this instance
     * 
     * @param bool $value IncludeInactive
     * @return Amazon_FWSInbound_Model_ListAllFulfillmentItems instance
     */
    public function withIncludeInactive($value)
    {
        $this->setIncludeInactive($value);
        return $this;
    }


    /**
     * Checks if IncludeInactive is set
     * 
     * @return bool true if IncludeInactive  is set
     */
    public function isSetIncludeInactive()
    {
        return !is_null($this->_fields['IncludeInactive']['FieldValue']);
    }

    /**
     * Gets the value of the MaxCount property.
     * 
     * @return int MaxCount
     */
    public function getMaxCount() 
    {
        return $this->_fields['MaxCount']['FieldValue'];
    }

    /**
     * Sets the value of the MaxCount property.
     * 
     * @param int MaxCount
     * @return this instance
     */
    public function setMaxCount($value) 
    {
        $this->_fields['MaxCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MaxCount and returns this instance
     * 
     * @param int $value MaxCount
     * @return Amazon_FWSInbound_Model_ListAllFulfillmentItems instance
     */
    public function withMaxCount($value)
    {
        $this->setMaxCount($value);
        return $this;
    }


    /**
     * Checks if MaxCount is set
     * 
     * @return bool true if MaxCount  is set
     */
    public function isSetMaxCount()
    {
        return !is_null($this->_fields['MaxCount']['FieldValue']);
    }




}