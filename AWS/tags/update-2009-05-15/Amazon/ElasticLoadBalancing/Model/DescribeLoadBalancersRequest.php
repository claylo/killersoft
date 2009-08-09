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
 * Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>LoadBalancerNames: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersRequest extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LoadBalancerNames: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'LoadBalancerNames' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the LoadBalancerNames .
     * 
     * @return array of string LoadBalancerNames
     */
    public function getLoadBalancerNames() 
    {
        return $this->_fields['LoadBalancerNames']['FieldValue'];
    }

    /**
     * Sets the value of the LoadBalancerNames.
     * 
     * @param string or an array of string LoadBalancerNames
     * @return this instance
     */
    public function setLoadBalancerNames($loadBalancerNames) 
    {
        if (!$this->_isNumericArray($loadBalancerNames)) {
            $loadBalancerNames =  array ($loadBalancerNames);    
        }
        $this->_fields['LoadBalancerNames']['FieldValue'] = $loadBalancerNames;
        return $this;
    }
  

    /**
     * Sets single or multiple values of LoadBalancerNames list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withLoadBalancerNames($loadBalancerNames1, $loadBalancerNames2)</code>
     * 
     * @param string  $stringArgs one or more LoadBalancerNames
     * @return Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersRequest  instance
     */
    public function withLoadBalancerNames($stringArgs)
    {
        foreach (func_get_args() as $loadBalancerNames) {
            $this->_fields['LoadBalancerNames']['FieldValue'][] = $loadBalancerNames;
        }
        return $this;
    }  
      

    /**
     * Checks if LoadBalancerNames list is non-empty
     * 
     * @return bool true if LoadBalancerNames list is non-empty
     */
    public function isSetLoadBalancerNames()
    {
        return count ($this->_fields['LoadBalancerNames']['FieldValue']) > 0;
    }




}