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
 * Amazon_FWSInbound_Model_ResponseMetadata
 * 
 * Properties:
 * <ul>
 * 
 * <li>RequestId: string</li>
 *
 * </ul>
 */ 
class Amazon_FWSInbound_Model_ResponseMetadata extends Amazon_FWSInbound_Model
{


    /**
     * Construct new Amazon_FWSInbound_Model_ResponseMetadata
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>RequestId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'RequestId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the RequestId property.
     * 
     * @return string RequestId
     */
    public function getRequestId() 
    {
        return $this->_fields['RequestId']['FieldValue'];
    }

    /**
     * Sets the value of the RequestId property.
     * 
     * @param string RequestId
     * @return this instance
     */
    public function setRequestId($value) 
    {
        $this->_fields['RequestId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RequestId and returns this instance
     * 
     * @param string $value RequestId
     * @return Amazon_FWSInbound_Model_ResponseMetadata instance
     */
    public function withRequestId($value)
    {
        $this->setRequestId($value);
        return $this;
    }


    /**
     * Checks if RequestId is set
     * 
     * @return bool true if RequestId  is set
     */
    public function isSetRequestId()
    {
        return !is_null($this->_fields['RequestId']['FieldValue']);
    }




}