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
 * Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>LoadBalancerName: string</li>
 * <li>Listeners: Amazon_ElasticLoadBalancing_Model_Listener</li>
 * <li>AvailabilityZones: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LoadBalancerName: string</li>
     * <li>Listeners: Amazon_ElasticLoadBalancing_Model_Listener</li>
     * <li>AvailabilityZones: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'LoadBalancerName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Listeners' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticLoadBalancing_Model_Listener')),
        'AvailabilityZones' => array('FieldValue' => array(), 'FieldType' => array('string')),
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
     * @return Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest instance
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
     * @return Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest  instance
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
     * @return Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest  instance
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




}