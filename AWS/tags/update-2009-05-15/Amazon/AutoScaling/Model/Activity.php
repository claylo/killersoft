<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_AutoScaling
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-05-15
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon Auto Scaling PHP5 Library
 *  Generated: Sun May 17 01:17:22 PDT 2009
 * 
 */

/**
 *  @see Amazon_AutoScaling_Model
 */
require_once ('Amazon/AutoScaling/Model.php');  

    

/**
 * Amazon_AutoScaling_Model_Activity
 * 
 * Properties:
 * <ul>
 * 
 * <li>ActivityId: string</li>
 * <li>Description: string</li>
 * <li>Cause: string</li>
 * <li>StartTime: string</li>
 * <li>EndTime: string</li>
 * <li>StatusCode: string</li>
 * <li>StatusMessage: string</li>
 * <li>Progress: int</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_Activity extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_Activity
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ActivityId: string</li>
     * <li>Description: string</li>
     * <li>Cause: string</li>
     * <li>StartTime: string</li>
     * <li>EndTime: string</li>
     * <li>StatusCode: string</li>
     * <li>StatusMessage: string</li>
     * <li>Progress: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ActivityId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Description' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Cause' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StartTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'EndTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StatusCode' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StatusMessage' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Progress' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ActivityId property.
     * 
     * @return string ActivityId
     */
    public function getActivityId() 
    {
        return $this->_fields['ActivityId']['FieldValue'];
    }

    /**
     * Sets the value of the ActivityId property.
     * 
     * @param string ActivityId
     * @return this instance
     */
    public function setActivityId($value) 
    {
        $this->_fields['ActivityId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ActivityId and returns this instance
     * 
     * @param string $value ActivityId
     * @return Amazon_AutoScaling_Model_Activity instance
     */
    public function withActivityId($value)
    {
        $this->setActivityId($value);
        return $this;
    }


    /**
     * Checks if ActivityId is set
     * 
     * @return bool true if ActivityId  is set
     */
    public function isSetActivityId()
    {
        return !is_null($this->_fields['ActivityId']['FieldValue']);
    }

    /**
     * Gets the value of the Description property.
     * 
     * @return string Description
     */
    public function getDescription() 
    {
        return $this->_fields['Description']['FieldValue'];
    }

    /**
     * Sets the value of the Description property.
     * 
     * @param string Description
     * @return this instance
     */
    public function setDescription($value) 
    {
        $this->_fields['Description']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Description and returns this instance
     * 
     * @param string $value Description
     * @return Amazon_AutoScaling_Model_Activity instance
     */
    public function withDescription($value)
    {
        $this->setDescription($value);
        return $this;
    }


    /**
     * Checks if Description is set
     * 
     * @return bool true if Description  is set
     */
    public function isSetDescription()
    {
        return !is_null($this->_fields['Description']['FieldValue']);
    }

    /**
     * Gets the value of the Cause property.
     * 
     * @return string Cause
     */
    public function getCause() 
    {
        return $this->_fields['Cause']['FieldValue'];
    }

    /**
     * Sets the value of the Cause property.
     * 
     * @param string Cause
     * @return this instance
     */
    public function setCause($value) 
    {
        $this->_fields['Cause']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Cause and returns this instance
     * 
     * @param string $value Cause
     * @return Amazon_AutoScaling_Model_Activity instance
     */
    public function withCause($value)
    {
        $this->setCause($value);
        return $this;
    }


    /**
     * Checks if Cause is set
     * 
     * @return bool true if Cause  is set
     */
    public function isSetCause()
    {
        return !is_null($this->_fields['Cause']['FieldValue']);
    }

    /**
     * Gets the value of the StartTime property.
     * 
     * @return string StartTime
     */
    public function getStartTime() 
    {
        return $this->_fields['StartTime']['FieldValue'];
    }

    /**
     * Sets the value of the StartTime property.
     * 
     * @param string StartTime
     * @return this instance
     */
    public function setStartTime($value) 
    {
        $this->_fields['StartTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the StartTime and returns this instance
     * 
     * @param string $value StartTime
     * @return Amazon_AutoScaling_Model_Activity instance
     */
    public function withStartTime($value)
    {
        $this->setStartTime($value);
        return $this;
    }


    /**
     * Checks if StartTime is set
     * 
     * @return bool true if StartTime  is set
     */
    public function isSetStartTime()
    {
        return !is_null($this->_fields['StartTime']['FieldValue']);
    }

    /**
     * Gets the value of the EndTime property.
     * 
     * @return string EndTime
     */
    public function getEndTime() 
    {
        return $this->_fields['EndTime']['FieldValue'];
    }

    /**
     * Sets the value of the EndTime property.
     * 
     * @param string EndTime
     * @return this instance
     */
    public function setEndTime($value) 
    {
        $this->_fields['EndTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the EndTime and returns this instance
     * 
     * @param string $value EndTime
     * @return Amazon_AutoScaling_Model_Activity instance
     */
    public function withEndTime($value)
    {
        $this->setEndTime($value);
        return $this;
    }


    /**
     * Checks if EndTime is set
     * 
     * @return bool true if EndTime  is set
     */
    public function isSetEndTime()
    {
        return !is_null($this->_fields['EndTime']['FieldValue']);
    }

    /**
     * Gets the value of the StatusCode property.
     * 
     * @return string StatusCode
     */
    public function getStatusCode() 
    {
        return $this->_fields['StatusCode']['FieldValue'];
    }

    /**
     * Sets the value of the StatusCode property.
     * 
     * @param string StatusCode
     * @return this instance
     */
    public function setStatusCode($value) 
    {
        $this->_fields['StatusCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the StatusCode and returns this instance
     * 
     * @param string $value StatusCode
     * @return Amazon_AutoScaling_Model_Activity instance
     */
    public function withStatusCode($value)
    {
        $this->setStatusCode($value);
        return $this;
    }


    /**
     * Checks if StatusCode is set
     * 
     * @return bool true if StatusCode  is set
     */
    public function isSetStatusCode()
    {
        return !is_null($this->_fields['StatusCode']['FieldValue']);
    }

    /**
     * Gets the value of the StatusMessage property.
     * 
     * @return string StatusMessage
     */
    public function getStatusMessage() 
    {
        return $this->_fields['StatusMessage']['FieldValue'];
    }

    /**
     * Sets the value of the StatusMessage property.
     * 
     * @param string StatusMessage
     * @return this instance
     */
    public function setStatusMessage($value) 
    {
        $this->_fields['StatusMessage']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the StatusMessage and returns this instance
     * 
     * @param string $value StatusMessage
     * @return Amazon_AutoScaling_Model_Activity instance
     */
    public function withStatusMessage($value)
    {
        $this->setStatusMessage($value);
        return $this;
    }


    /**
     * Checks if StatusMessage is set
     * 
     * @return bool true if StatusMessage  is set
     */
    public function isSetStatusMessage()
    {
        return !is_null($this->_fields['StatusMessage']['FieldValue']);
    }

    /**
     * Gets the value of the Progress property.
     * 
     * @return int Progress
     */
    public function getProgress() 
    {
        return $this->_fields['Progress']['FieldValue'];
    }

    /**
     * Sets the value of the Progress property.
     * 
     * @param int Progress
     * @return this instance
     */
    public function setProgress($value) 
    {
        $this->_fields['Progress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Progress and returns this instance
     * 
     * @param int $value Progress
     * @return Amazon_AutoScaling_Model_Activity instance
     */
    public function withProgress($value)
    {
        $this->setProgress($value);
        return $this;
    }


    /**
     * Checks if Progress is set
     * 
     * @return bool true if Progress  is set
     */
    public function isSetProgress()
    {
        return !is_null($this->_fields['Progress']['FieldValue']);
    }




}