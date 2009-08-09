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
 * Amazon_CloudWatch_Model_GetMetricStatisticsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Datapoints: Amazon_CloudWatch_Model_Datapoint</li>
 * <li>Label: string</li>
 *
 * </ul>
 */ 
class Amazon_CloudWatch_Model_GetMetricStatisticsResult extends Amazon_CloudWatch_Model
{


    /**
     * Construct new Amazon_CloudWatch_Model_GetMetricStatisticsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Datapoints: Amazon_CloudWatch_Model_Datapoint</li>
     * <li>Label: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Datapoints' => array('FieldValue' => array(), 'FieldType' => array('Amazon_CloudWatch_Model_Datapoint')),
        'Label' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Datapoints.
     * 
     * @return array of Datapoint Datapoints
     */
    public function getDatapoints() 
    {
        return $this->_fields['Datapoints']['FieldValue'];
    }

    /**
     * Sets the value of the Datapoints.
     * 
     * @param mixed Datapoint or an array of Datapoint Datapoints
     * @return this instance
     */
    public function setDatapoints($datapoints) 
    {
        if (!$this->_isNumericArray($datapoints)) {
            $datapoints =  array ($datapoints);    
        }
        $this->_fields['Datapoints']['FieldValue'] = $datapoints;
        return $this;
    }


    /**
     * Sets single or multiple values of Datapoints list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withDatapoints($datapoints1, $datapoints2)</code>
     * 
     * @param Datapoint  $datapointArgs one or more Datapoints
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsResult  instance
     */
    public function withDatapoints($datapointArgs)
    {
        foreach (func_get_args() as $datapoints) {
            $this->_fields['Datapoints']['FieldValue'][] = $datapoints;
        }
        return $this;
    }   



    /**
     * Checks if Datapoints list is non-empty
     * 
     * @return bool true if Datapoints list is non-empty
     */
    public function isSetDatapoints()
    {
        return count ($this->_fields['Datapoints']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the Label property.
     * 
     * @return string Label
     */
    public function getLabel() 
    {
        return $this->_fields['Label']['FieldValue'];
    }

    /**
     * Sets the value of the Label property.
     * 
     * @param string Label
     * @return this instance
     */
    public function setLabel($value) 
    {
        $this->_fields['Label']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Label and returns this instance
     * 
     * @param string $value Label
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsResult instance
     */
    public function withLabel($value)
    {
        $this->setLabel($value);
        return $this;
    }


    /**
     * Checks if Label is set
     * 
     * @return bool true if Label  is set
     */
    public function isSetLabel()
    {
        return !is_null($this->_fields['Label']['FieldValue']);
    }




}