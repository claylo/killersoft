<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_CloudWatch
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
 *  Amazon Cloud Watch PHP5 Library
 *  Generated: Sun May 17 01:27:23 PDT 2009
 * 
 */

/**
 *  @see Amazon_CloudWatch_Model
 */
require_once ('Amazon/CloudWatch/Model.php');  

    

/**
 * Amazon_CloudWatch_Model_ListMetricsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Metrics: Amazon_CloudWatch_Model_Metric</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */ 
class Amazon_CloudWatch_Model_ListMetricsResult extends Amazon_CloudWatch_Model
{


    /**
     * Construct new Amazon_CloudWatch_Model_ListMetricsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Metrics: Amazon_CloudWatch_Model_Metric</li>
     * <li>NextToken: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Metrics' => array('FieldValue' => array(), 'FieldType' => array('Amazon_CloudWatch_Model_Metric')),
        'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Metrics.
     * 
     * @return array of Metric Metrics
     */
    public function getMetrics() 
    {
        return $this->_fields['Metrics']['FieldValue'];
    }

    /**
     * Sets the value of the Metrics.
     * 
     * @param mixed Metric or an array of Metric Metrics
     * @return this instance
     */
    public function setMetrics($metrics) 
    {
        if (!$this->_isNumericArray($metrics)) {
            $metrics =  array ($metrics);    
        }
        $this->_fields['Metrics']['FieldValue'] = $metrics;
        return $this;
    }


    /**
     * Sets single or multiple values of Metrics list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withMetrics($metrics1, $metrics2)</code>
     * 
     * @param Metric  $metricArgs one or more Metrics
     * @return Amazon_CloudWatch_Model_ListMetricsResult  instance
     */
    public function withMetrics($metricArgs)
    {
        foreach (func_get_args() as $metrics) {
            $this->_fields['Metrics']['FieldValue'][] = $metrics;
        }
        return $this;
    }   



    /**
     * Checks if Metrics list is non-empty
     * 
     * @return bool true if Metrics list is non-empty
     */
    public function isSetMetrics()
    {
        return count ($this->_fields['Metrics']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the NextToken property.
     * 
     * @return string NextToken
     */
    public function getNextToken() 
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Sets the value of the NextToken property.
     * 
     * @param string NextToken
     * @return this instance
     */
    public function setNextToken($value) 
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the NextToken and returns this instance
     * 
     * @param string $value NextToken
     * @return Amazon_CloudWatch_Model_ListMetricsResult instance
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }


    /**
     * Checks if NextToken is set
     * 
     * @return bool true if NextToken  is set
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }




}