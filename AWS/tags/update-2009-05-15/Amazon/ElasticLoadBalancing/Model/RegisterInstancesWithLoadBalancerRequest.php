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
 * Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>LoadBalancerName: string</li>
 * <li>Instances: Amazon_ElasticLoadBalancing_Model_Instance</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LoadBalancerName: string</li>
     * <li>Instances: Amazon_ElasticLoadBalancing_Model_Instance</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'LoadBalancerName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Instances' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticLoadBalancing_Model_Instance')),
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
     * @return Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest instance
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
     * @return Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest  instance
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




}