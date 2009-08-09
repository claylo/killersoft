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
 * Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>LoadBalancerDescriptions: Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResult extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LoadBalancerDescriptions: Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'LoadBalancerDescriptions' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticLoadBalancing_Model_LoadBalancerDescription')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the LoadBalancerDescriptions.
     * 
     * @return array of LoadBalancerDescription LoadBalancerDescriptions
     */
    public function getLoadBalancerDescriptions() 
    {
        return $this->_fields['LoadBalancerDescriptions']['FieldValue'];
    }

    /**
     * Sets the value of the LoadBalancerDescriptions.
     * 
     * @param mixed LoadBalancerDescription or an array of LoadBalancerDescription LoadBalancerDescriptions
     * @return this instance
     */
    public function setLoadBalancerDescriptions($loadBalancerDescriptions) 
    {
        if (!$this->_isNumericArray($loadBalancerDescriptions)) {
            $loadBalancerDescriptions =  array ($loadBalancerDescriptions);    
        }
        $this->_fields['LoadBalancerDescriptions']['FieldValue'] = $loadBalancerDescriptions;
        return $this;
    }


    /**
     * Sets single or multiple values of LoadBalancerDescriptions list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withLoadBalancerDescriptions($loadBalancerDescriptions1, $loadBalancerDescriptions2)</code>
     * 
     * @param LoadBalancerDescription  $loadBalancerDescriptionArgs one or more LoadBalancerDescriptions
     * @return Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResult  instance
     */
    public function withLoadBalancerDescriptions($loadBalancerDescriptionArgs)
    {
        foreach (func_get_args() as $loadBalancerDescriptions) {
            $this->_fields['LoadBalancerDescriptions']['FieldValue'][] = $loadBalancerDescriptions;
        }
        return $this;
    }   



    /**
     * Checks if LoadBalancerDescriptions list is non-empty
     * 
     * @return bool true if LoadBalancerDescriptions list is non-empty
     */
    public function isSetLoadBalancerDescriptions()
    {
        return count ($this->_fields['LoadBalancerDescriptions']['FieldValue']) > 0;
    }




}