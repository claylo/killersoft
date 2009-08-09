<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_ElasticLoadBalancing
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
 *  Amazon Elastic Load Balancing PHP5 Library
 *  Generated: Sun May 17 01:27:31 PDT 2009
 * 
 */

/**
 *  @see Amazon_ElasticLoadBalancing_Model
 */
require_once ('Amazon/ElasticLoadBalancing/Model.php');  

    

/**
 * Amazon_ElasticLoadBalancing_Model_HealthCheck
 * 
 * Properties:
 * <ul>
 * 
 * <li>Target: string</li>
 * <li>Interval: int</li>
 * <li>Timeout: int</li>
 * <li>UnhealthyThreshold: int</li>
 * <li>HealthyThreshold: int</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_HealthCheck extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_HealthCheck
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Target: string</li>
     * <li>Interval: int</li>
     * <li>Timeout: int</li>
     * <li>UnhealthyThreshold: int</li>
     * <li>HealthyThreshold: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Target' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Interval' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Timeout' => array('FieldValue' => null, 'FieldType' => 'int'),
        'UnhealthyThreshold' => array('FieldValue' => null, 'FieldType' => 'int'),
        'HealthyThreshold' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Target property.
     * 
     * @return string Target
     */
    public function getTarget() 
    {
        return $this->_fields['Target']['FieldValue'];
    }

    /**
     * Sets the value of the Target property.
     * 
     * @param string Target
     * @return this instance
     */
    public function setTarget($value) 
    {
        $this->_fields['Target']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Target and returns this instance
     * 
     * @param string $value Target
     * @return Amazon_ElasticLoadBalancing_Model_HealthCheck instance
     */
    public function withTarget($value)
    {
        $this->setTarget($value);
        return $this;
    }


    /**
     * Checks if Target is set
     * 
     * @return bool true if Target  is set
     */
    public function isSetTarget()
    {
        return !is_null($this->_fields['Target']['FieldValue']);
    }

    /**
     * Gets the value of the Interval property.
     * 
     * @return int Interval
     */
    public function getInterval() 
    {
        return $this->_fields['Interval']['FieldValue'];
    }

    /**
     * Sets the value of the Interval property.
     * 
     * @param int Interval
     * @return this instance
     */
    public function setInterval($value) 
    {
        $this->_fields['Interval']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Interval and returns this instance
     * 
     * @param int $value Interval
     * @return Amazon_ElasticLoadBalancing_Model_HealthCheck instance
     */
    public function withInterval($value)
    {
        $this->setInterval($value);
        return $this;
    }


    /**
     * Checks if Interval is set
     * 
     * @return bool true if Interval  is set
     */
    public function isSetInterval()
    {
        return !is_null($this->_fields['Interval']['FieldValue']);
    }

    /**
     * Gets the value of the Timeout property.
     * 
     * @return int Timeout
     */
    public function getTimeout() 
    {
        return $this->_fields['Timeout']['FieldValue'];
    }

    /**
     * Sets the value of the Timeout property.
     * 
     * @param int Timeout
     * @return this instance
     */
    public function setTimeout($value) 
    {
        $this->_fields['Timeout']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Timeout and returns this instance
     * 
     * @param int $value Timeout
     * @return Amazon_ElasticLoadBalancing_Model_HealthCheck instance
     */
    public function withTimeout($value)
    {
        $this->setTimeout($value);
        return $this;
    }


    /**
     * Checks if Timeout is set
     * 
     * @return bool true if Timeout  is set
     */
    public function isSetTimeout()
    {
        return !is_null($this->_fields['Timeout']['FieldValue']);
    }

    /**
     * Gets the value of the UnhealthyThreshold property.
     * 
     * @return int UnhealthyThreshold
     */
    public function getUnhealthyThreshold() 
    {
        return $this->_fields['UnhealthyThreshold']['FieldValue'];
    }

    /**
     * Sets the value of the UnhealthyThreshold property.
     * 
     * @param int UnhealthyThreshold
     * @return this instance
     */
    public function setUnhealthyThreshold($value) 
    {
        $this->_fields['UnhealthyThreshold']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the UnhealthyThreshold and returns this instance
     * 
     * @param int $value UnhealthyThreshold
     * @return Amazon_ElasticLoadBalancing_Model_HealthCheck instance
     */
    public function withUnhealthyThreshold($value)
    {
        $this->setUnhealthyThreshold($value);
        return $this;
    }


    /**
     * Checks if UnhealthyThreshold is set
     * 
     * @return bool true if UnhealthyThreshold  is set
     */
    public function isSetUnhealthyThreshold()
    {
        return !is_null($this->_fields['UnhealthyThreshold']['FieldValue']);
    }

    /**
     * Gets the value of the HealthyThreshold property.
     * 
     * @return int HealthyThreshold
     */
    public function getHealthyThreshold() 
    {
        return $this->_fields['HealthyThreshold']['FieldValue'];
    }

    /**
     * Sets the value of the HealthyThreshold property.
     * 
     * @param int HealthyThreshold
     * @return this instance
     */
    public function setHealthyThreshold($value) 
    {
        $this->_fields['HealthyThreshold']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the HealthyThreshold and returns this instance
     * 
     * @param int $value HealthyThreshold
     * @return Amazon_ElasticLoadBalancing_Model_HealthCheck instance
     */
    public function withHealthyThreshold($value)
    {
        $this->setHealthyThreshold($value);
        return $this;
    }


    /**
     * Checks if HealthyThreshold is set
     * 
     * @return bool true if HealthyThreshold  is set
     */
    public function isSetHealthyThreshold()
    {
        return !is_null($this->_fields['HealthyThreshold']['FieldValue']);
    }




}