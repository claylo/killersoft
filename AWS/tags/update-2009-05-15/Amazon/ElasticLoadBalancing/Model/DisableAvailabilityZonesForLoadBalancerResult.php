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
 * Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>AvailabilityZones: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResult extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>AvailabilityZones: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'AvailabilityZones' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
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
     * @return Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResult  instance
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