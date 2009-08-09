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
 * Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>LoadBalancerName: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerRequest extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LoadBalancerName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'LoadBalancerName' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerRequest instance
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




}