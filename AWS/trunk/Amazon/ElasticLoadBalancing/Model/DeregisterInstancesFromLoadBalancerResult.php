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
 * Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Instances: Amazon_ElasticLoadBalancing_Model_Instance</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResult extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Instances: Amazon_ElasticLoadBalancing_Model_Instance</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Instances' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticLoadBalancing_Model_Instance')),
        );
        parent::__construct($data);
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
     * @return Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResult  instance
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