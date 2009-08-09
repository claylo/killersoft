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
 * Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>HealthCheck: Amazon_ElasticLoadBalancing_Model_HealthCheck</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResult extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>HealthCheck: Amazon_ElasticLoadBalancing_Model_HealthCheck</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'HealthCheck' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticLoadBalancing_Model_HealthCheck'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the HealthCheck.
     * 
     * @return HealthCheck HealthCheck
     */
    public function getHealthCheck() 
    {
        return $this->_fields['HealthCheck']['FieldValue'];
    }

    /**
     * Sets the value of the HealthCheck.
     * 
     * @param HealthCheck HealthCheck
     * @return void
     */
    public function setHealthCheck($value) 
    {
        $this->_fields['HealthCheck']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the HealthCheck  and returns this instance
     * 
     * @param HealthCheck $value HealthCheck
     * @return Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResult instance
     */
    public function withHealthCheck($value)
    {
        $this->setHealthCheck($value);
        return $this;
    }


    /**
     * Checks if HealthCheck  is set
     * 
     * @return bool true if HealthCheck property is set
     */
    public function isSetHealthCheck()
    {
        return !is_null($this->_fields['HealthCheck']['FieldValue']);

    }




}