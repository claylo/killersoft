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
 * Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>DNSName: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResult extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DNSName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DNSName' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * @return Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResult instance
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




}