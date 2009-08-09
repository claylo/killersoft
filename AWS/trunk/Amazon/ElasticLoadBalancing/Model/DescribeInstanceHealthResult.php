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
 * Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceStates: Amazon_ElasticLoadBalancing_Model_InstanceState</li>
 *
 * </ul>
 */ 
class Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResult extends Amazon_ElasticLoadBalancing_Model
{


    /**
     * Construct new Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceStates: Amazon_ElasticLoadBalancing_Model_InstanceState</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceStates' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticLoadBalancing_Model_InstanceState')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the InstanceStates.
     * 
     * @return array of InstanceState InstanceStates
     */
    public function getInstanceStates() 
    {
        return $this->_fields['InstanceStates']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceStates.
     * 
     * @param mixed InstanceState or an array of InstanceState InstanceStates
     * @return this instance
     */
    public function setInstanceStates($instanceStates) 
    {
        if (!$this->_isNumericArray($instanceStates)) {
            $instanceStates =  array ($instanceStates);    
        }
        $this->_fields['InstanceStates']['FieldValue'] = $instanceStates;
        return $this;
    }


    /**
     * Sets single or multiple values of InstanceStates list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withInstanceStates($instanceStates1, $instanceStates2)</code>
     * 
     * @param InstanceState  $instanceStateArgs one or more InstanceStates
     * @return Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResult  instance
     */
    public function withInstanceStates($instanceStateArgs)
    {
        foreach (func_get_args() as $instanceStates) {
            $this->_fields['InstanceStates']['FieldValue'][] = $instanceStates;
        }
        return $this;
    }   



    /**
     * Checks if InstanceStates list is non-empty
     * 
     * @return bool true if InstanceStates list is non-empty
     */
    public function isSetInstanceStates()
    {
        return count ($this->_fields['InstanceStates']['FieldValue']) > 0;
    }




}