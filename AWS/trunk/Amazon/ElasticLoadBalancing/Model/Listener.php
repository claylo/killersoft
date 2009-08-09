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
 * Amazon_ElasticLoadBalancing_Model_Listener
 * 
 * Properties:
 * <ul>
 * 
 * <li>Protocol: string</li>
 * <li>LoadBalancerPort: int</li>
 * <li>InstancePort: int</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_Listener extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_Listener
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Protocol: string</li>
     * <li>LoadBalancerPort: int</li>
     * <li>InstancePort: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Protocol' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LoadBalancerPort' => array('FieldValue' => null, 'FieldType' => 'int'),
        'InstancePort' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Protocol property.
     * 
     * @return string Protocol
     */
    public function getProtocol() 
    {
        return $this->_fields['Protocol']['FieldValue'];
    }

    /**
     * Sets the value of the Protocol property.
     * 
     * @param string Protocol
     * @return this instance
     */
    public function setProtocol($value) 
    {
        $this->_fields['Protocol']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Protocol and returns this instance
     * 
     * @param string $value Protocol
     * @return Amazon_ElasticLoadBalancing_Model_Listener instance
     */
    public function withProtocol($value)
    {
        $this->setProtocol($value);
        return $this;
    }


    /**
     * Checks if Protocol is set
     * 
     * @return bool true if Protocol  is set
     */
    public function isSetProtocol()
    {
        return !is_null($this->_fields['Protocol']['FieldValue']);
    }

    /**
     * Gets the value of the LoadBalancerPort property.
     * 
     * @return int LoadBalancerPort
     */
    public function getLoadBalancerPort() 
    {
        return $this->_fields['LoadBalancerPort']['FieldValue'];
    }

    /**
     * Sets the value of the LoadBalancerPort property.
     * 
     * @param int LoadBalancerPort
     * @return this instance
     */
    public function setLoadBalancerPort($value) 
    {
        $this->_fields['LoadBalancerPort']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the LoadBalancerPort and returns this instance
     * 
     * @param int $value LoadBalancerPort
     * @return Amazon_ElasticLoadBalancing_Model_Listener instance
     */
    public function withLoadBalancerPort($value)
    {
        $this->setLoadBalancerPort($value);
        return $this;
    }


    /**
     * Checks if LoadBalancerPort is set
     * 
     * @return bool true if LoadBalancerPort  is set
     */
    public function isSetLoadBalancerPort()
    {
        return !is_null($this->_fields['LoadBalancerPort']['FieldValue']);
    }

    /**
     * Gets the value of the InstancePort property.
     * 
     * @return int InstancePort
     */
    public function getInstancePort() 
    {
        return $this->_fields['InstancePort']['FieldValue'];
    }

    /**
     * Sets the value of the InstancePort property.
     * 
     * @param int InstancePort
     * @return this instance
     */
    public function setInstancePort($value) 
    {
        $this->_fields['InstancePort']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstancePort and returns this instance
     * 
     * @param int $value InstancePort
     * @return Amazon_ElasticLoadBalancing_Model_Listener instance
     */
    public function withInstancePort($value)
    {
        $this->setInstancePort($value);
        return $this;
    }


    /**
     * Checks if InstancePort is set
     * 
     * @return bool true if InstancePort  is set
     */
    public function isSetInstancePort()
    {
        return !is_null($this->_fields['InstancePort']['FieldValue']);
    }




}