<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_ElasticMapReduce
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-03-31
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon Elastic Map Reduce PHP5 Library
 *  Generated: Tue Apr 21 15:38:55 PDT 2009
 * 
 */

/**
 *  @see Amazon_ElasticMapReduce_Model
 */
require_once ('Amazon/ElasticMapReduce/Model.php');  

    

/**
 * Amazon_ElasticMapReduce_Model_StepExecutionStatusDetail
 * 
 * Properties:
 * <ul>
 * 
 * <li>State: string</li>
 * <li>CreationDateTime: string</li>
 * <li>StartDateTime: string</li>
 * <li>EndDateTime: string</li>
 * <li>LastStateChangeReason: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_StepExecutionStatusDetail extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_StepExecutionStatusDetail
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>State: string</li>
     * <li>CreationDateTime: string</li>
     * <li>StartDateTime: string</li>
     * <li>EndDateTime: string</li>
     * <li>LastStateChangeReason: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'State' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CreationDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StartDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'EndDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LastStateChangeReason' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the State property.
     * 
     * @return string State
     */
    public function getState() 
    {
        return $this->_fields['State']['FieldValue'];
    }

    /**
     * Sets the value of the State property.
     * 
     * @param string State
     * @return this instance
     */
    public function setState($value) 
    {
        $this->_fields['State']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the State and returns this instance
     * 
     * @param string $value State
     * @return Amazon_ElasticMapReduce_Model_StepExecutionStatusDetail instance
     */
    public function withState($value)
    {
        $this->setState($value);
        return $this;
    }


    /**
     * Checks if State is set
     * 
     * @return bool true if State  is set
     */
    public function isSetState()
    {
        return !is_null($this->_fields['State']['FieldValue']);
    }

    /**
     * Gets the value of the CreationDateTime property.
     * 
     * @return string CreationDateTime
     */
    public function getCreationDateTime() 
    {
        return $this->_fields['CreationDateTime']['FieldValue'];
    }

    /**
     * Sets the value of the CreationDateTime property.
     * 
     * @param string CreationDateTime
     * @return this instance
     */
    public function setCreationDateTime($value) 
    {
        $this->_fields['CreationDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CreationDateTime and returns this instance
     * 
     * @param string $value CreationDateTime
     * @return Amazon_ElasticMapReduce_Model_StepExecutionStatusDetail instance
     */
    public function withCreationDateTime($value)
    {
        $this->setCreationDateTime($value);
        return $this;
    }


    /**
     * Checks if CreationDateTime is set
     * 
     * @return bool true if CreationDateTime  is set
     */
    public function isSetCreationDateTime()
    {
        return !is_null($this->_fields['CreationDateTime']['FieldValue']);
    }

    /**
     * Gets the value of the StartDateTime property.
     * 
     * @return string StartDateTime
     */
    public function getStartDateTime() 
    {
        return $this->_fields['StartDateTime']['FieldValue'];
    }

    /**
     * Sets the value of the StartDateTime property.
     * 
     * @param string StartDateTime
     * @return this instance
     */
    public function setStartDateTime($value) 
    {
        $this->_fields['StartDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the StartDateTime and returns this instance
     * 
     * @param string $value StartDateTime
     * @return Amazon_ElasticMapReduce_Model_StepExecutionStatusDetail instance
     */
    public function withStartDateTime($value)
    {
        $this->setStartDateTime($value);
        return $this;
    }


    /**
     * Checks if StartDateTime is set
     * 
     * @return bool true if StartDateTime  is set
     */
    public function isSetStartDateTime()
    {
        return !is_null($this->_fields['StartDateTime']['FieldValue']);
    }

    /**
     * Gets the value of the EndDateTime property.
     * 
     * @return string EndDateTime
     */
    public function getEndDateTime() 
    {
        return $this->_fields['EndDateTime']['FieldValue'];
    }

    /**
     * Sets the value of the EndDateTime property.
     * 
     * @param string EndDateTime
     * @return this instance
     */
    public function setEndDateTime($value) 
    {
        $this->_fields['EndDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the EndDateTime and returns this instance
     * 
     * @param string $value EndDateTime
     * @return Amazon_ElasticMapReduce_Model_StepExecutionStatusDetail instance
     */
    public function withEndDateTime($value)
    {
        $this->setEndDateTime($value);
        return $this;
    }


    /**
     * Checks if EndDateTime is set
     * 
     * @return bool true if EndDateTime  is set
     */
    public function isSetEndDateTime()
    {
        return !is_null($this->_fields['EndDateTime']['FieldValue']);
    }

    /**
     * Gets the value of the LastStateChangeReason property.
     * 
     * @return string LastStateChangeReason
     */
    public function getLastStateChangeReason() 
    {
        return $this->_fields['LastStateChangeReason']['FieldValue'];
    }

    /**
     * Sets the value of the LastStateChangeReason property.
     * 
     * @param string LastStateChangeReason
     * @return this instance
     */
    public function setLastStateChangeReason($value) 
    {
        $this->_fields['LastStateChangeReason']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the LastStateChangeReason and returns this instance
     * 
     * @param string $value LastStateChangeReason
     * @return Amazon_ElasticMapReduce_Model_StepExecutionStatusDetail instance
     */
    public function withLastStateChangeReason($value)
    {
        $this->setLastStateChangeReason($value);
        return $this;
    }


    /**
     * Checks if LastStateChangeReason is set
     * 
     * @return bool true if LastStateChangeReason  is set
     */
    public function isSetLastStateChangeReason()
    {
        return !is_null($this->_fields['LastStateChangeReason']['FieldValue']);
    }




}