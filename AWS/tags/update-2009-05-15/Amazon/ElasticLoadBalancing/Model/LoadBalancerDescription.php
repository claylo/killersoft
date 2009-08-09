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
 * Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription
 * 
 * Properties:
 * <ul>
 * 
 * <li>LoadBalancerName: string</li>
 * <li>DNSName: string</li>
 * <li>Listeners: Amazon_ElasticLoadBalancing_Model_Listener</li>
 * <li>AvailabilityZones: string</li>
 * <li>Instances: Amazon_ElasticLoadBalancing_Model_Instance</li>
 * <li>HealthCheck: Amazon_ElasticLoadBalancing_Model_HealthCheck</li>
 * <li>CreatedTime: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LoadBalancerName: string</li>
     * <li>DNSName: string</li>
     * <li>Listeners: Amazon_ElasticLoadBalancing_Model_Listener</li>
     * <li>AvailabilityZones: string</li>
     * <li>Instances: Amazon_ElasticLoadBalancing_Model_Instance</li>
     * <li>HealthCheck: Amazon_ElasticLoadBalancing_Model_HealthCheck</li>
     * <li>CreatedTime: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'LoadBalancerName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DNSName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Listeners' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticLoadBalancing_Model_Listener')),
        'AvailabilityZones' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'Instances' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticLoadBalancing_Model_Instance')),
        'HealthCheck' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticLoadBalancing_Model_HealthCheck'),
        'CreatedTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the LoadBalancerName property.
     * 
     * @return string LoadBalancerName
     */
    public function getLoadBalancerName() 
    {
        return $this->_fields['LoadBalancerName']['FieldValue'];
    }

    /**
     * Sets the value of the LoadBalancerName property.
     * 
     * @param string LoadBalancerName
     * @return this instance
     */
    public function setLoadBalancerName($value) 
    {
        $this->_fields['LoadBalancerName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the LoadBalancerName and returns this instance
     * 
     * @param string $value LoadBalancerName
     * @return Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription instance
     */
    public function withLoadBalancerName($value)
    {
        $this->setLoadBalancerName($value);
        return $this;
    }


    /**
     * Checks if LoadBalancerName is set
     * 
     * @return bool true if LoadBalancerName  is set
     */
    public function isSetLoadBalancerName()
    {
        return !is_null($this->_fields['LoadBalancerName']['FieldValue']);
    }

    /**
     * Gets the value of the DNSName property.
     * 
     * @return string DNSName
     */
    public function getDNSName() 
    {
        return $this->_fields['DNSName']['FieldValue'];
    }

    /**
     * Sets the value of the DNSName property.
     * 
     * @param string DNSName
     * @return this instance
     */
    public function setDNSName($value) 
    {
        $this->_fields['DNSName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the DNSName and returns this instance
     * 
     * @param string $value DNSName
     * @return Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription instance
     */
    public function withDNSName($value)
    {
        $this->setDNSName($value);
        return $this;
    }


    /**
     * Checks if DNSName is set
     * 
     * @return bool true if DNSName  is set
     */
    public function isSetDNSName()
    {
        return !is_null($this->_fields['DNSName']['FieldValue']);
    }

    /**
     * Gets the value of the Listeners.
     * 
     * @return array of Listener Listeners
     */
    public function getListeners() 
    {
        return $this->_fields['Listeners']['FieldValue'];
    }

    /**
     * Sets the value of the Listeners.
     * 
     * @param mixed Listener or an array of Listener Listeners
     * @return this instance
     */
    public function setListeners($listeners) 
    {
        if (!$this->_isNumericArray($listeners)) {
            $listeners =  array ($listeners);    
        }
        $this->_fields['Listeners']['FieldValue'] = $listeners;
        return $this;
    }


    /**
     * Sets single or multiple values of Listeners list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withListeners($listeners1, $listeners2)</code>
     * 
     * @param Listener  $listenerArgs one or more Listeners
     * @return Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription  instance
     */
    public function withListeners($listenerArgs)
    {
        foreach (func_get_args() as $listeners) {
            $this->_fields['Listeners']['FieldValue'][] = $listeners;
        }
        return $this;
    }   



    /**
     * Checks if Listeners list is non-empty
     * 
     * @return bool true if Listeners list is non-empty
     */
    public function isSetListeners()
    {
        return count ($this->_fields['Listeners']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the AvailabilityZones .
     * 
     * @return array of string AvailabilityZones
     */
    public function getAvailabilityZones() 
    {
        return $this->_fields['AvailabilityZones']['FieldValue'];
    }

    /**
     * Sets the value of the AvailabilityZones.
     * 
     * @param string or an array of string AvailabilityZones
     * @return this instance
     */
    public function setAvailabilityZones($availabilityZones) 
    {
        if (!$this->_isNumericArray($availabilityZones)) {
            $availabilityZones =  array ($availabilityZones);    
        }
        $this->_fields['AvailabilityZones']['FieldValue'] = $availabilityZones;
        return $this;
    }
  

    /**
     * Sets single or multiple values of AvailabilityZones list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withAvailabilityZones($availabilityZones1, $availabilityZones2)</code>
     * 
     * @param string  $stringArgs one or more AvailabilityZones
     * @return Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription  instance
     */
    public function withAvailabilityZones($stringArgs)
    {
        foreach (func_get_args() as $availabilityZones) {
            $this->_fields['AvailabilityZones']['FieldValue'][] = $availabilityZones;
        }
        return $this;
    }  
      

    /**
     * Checks if AvailabilityZones list is non-empty
     * 
     * @return bool true if AvailabilityZones list is non-empty
     */
    public function isSetAvailabilityZones()
    {
        return count ($this->_fields['AvailabilityZones']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the Instances.
     * 
     * @return array of Instance Instances
     */
    public function getInstances() 
    {
        return $this->_fields['Instances']['FieldValue'];
    }

    /**
     * Sets the value of the Instances.
     * 
     * @param mixed Instance or an array of Instance Instances
     * @return this instance
     */
    public function setInstances($instances) 
    {
        if (!$this->_isNumericArray($instances)) {
            $instances =  array ($instances);    
        }
        $this->_fields['Instances']['FieldValue'] = $instances;
        return $this;
    }


    /**
     * Sets single or multiple values of Instances list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withInstances($instances1, $instances2)</code>
     * 
     * @param Instance  $instanceArgs one or more Instances
     * @return Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription  instance
     */
    public function withInstances($instanceArgs)
    {
        foreach (func_get_args() as $instances) {
            $this->_fields['Instances']['FieldValue'][] = $instances;
        }
        return $this;
    }   



    /**
     * Checks if Instances list is non-empty
     * 
     * @return bool true if Instances list is non-empty
     */
    public function isSetInstances()
    {
        return count ($this->_fields['Instances']['FieldValue']) > 0;
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
     * @return Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription instance
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

    /**
     * Gets the value of the CreatedTime property.
     * 
     * @return string CreatedTime
     */
    public function getCreatedTime() 
    {
        return $this->_fields['CreatedTime']['FieldValue'];
    }

    /**
     * Sets the value of the CreatedTime property.
     * 
     * @param string CreatedTime
     * @return this instance
     */
    public function setCreatedTime($value) 
    {
        $this->_fields['CreatedTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CreatedTime and returns this instance
     * 
     * @param string $value CreatedTime
     * @return Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription instance
     */
    public function withCreatedTime($value)
    {
        $this->setCreatedTime($value);
        return $this;
    }


    /**
     * Checks if CreatedTime is set
     * 
     * @return bool true if CreatedTime  is set
     */
    public function isSetCreatedTime()
    {
        return !is_null($this->_fields['CreatedTime']['FieldValue']);
    }




}