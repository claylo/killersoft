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
 * Amazon_CloudWatch_Model_GetMetricStatisticsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>Statistics: string</li>
 * <li>Period: int</li>
 * <li>MeasureName: string</li>
 * <li>Dimensions: Amazon_CloudWatch_Model_Dimension</li>
 * <li>StartTime: string</li>
 * <li>EndTime: string</li>
 * <li>Unit: string</li>
 * <li>CustomUnit: string</li>
 * <li>Namespace: string</li>
 *
 * </ul>
 */ 
class Amazon_CloudWatch_Model_GetMetricStatisticsRequest extends Amazon_CloudWatch_Model
{


    /**
     * Construct new Amazon_CloudWatch_Model_GetMetricStatisticsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Statistics: string</li>
     * <li>Period: int</li>
     * <li>MeasureName: string</li>
     * <li>Dimensions: Amazon_CloudWatch_Model_Dimension</li>
     * <li>StartTime: string</li>
     * <li>EndTime: string</li>
     * <li>Unit: string</li>
     * <li>CustomUnit: string</li>
     * <li>Namespace: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Statistics' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'Period' => array('FieldValue' => null, 'FieldType' => 'int'),
        'MeasureName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Dimensions' => array('FieldValue' => array(), 'FieldType' => array('Amazon_CloudWatch_Model_Dimension')),
        'StartTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'EndTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Unit' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CustomUnit' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Namespace' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Statistics .
     * 
     * @return array of string Statistics
     */
    public function getStatistics() 
    {
        return $this->_fields['Statistics']['FieldValue'];
    }

    /**
     * Sets the value of the Statistics.
     * 
     * @param string or an array of string Statistics
     * @return this instance
     */
    public function setStatistics($statistics) 
    {
        if (!$this->_isNumericArray($statistics)) {
            $statistics =  array ($statistics);    
        }
        $this->_fields['Statistics']['FieldValue'] = $statistics;
        return $this;
    }
  

    /**
     * Sets single or multiple values of Statistics list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withStatistics($statistics1, $statistics2)</code>
     * 
     * @param string  $stringArgs one or more Statistics
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsRequest  instance
     */
    public function withStatistics($stringArgs)
    {
        foreach (func_get_args() as $statistics) {
            $this->_fields['Statistics']['FieldValue'][] = $statistics;
        }
        return $this;
    }  
      

    /**
     * Checks if Statistics list is non-empty
     * 
     * @return bool true if Statistics list is non-empty
     */
    public function isSetStatistics()
    {
        return count ($this->_fields['Statistics']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the Period property.
     * 
     * @return int Period
     */
    public function getPeriod() 
    {
        return $this->_fields['Period']['FieldValue'];
    }

    /**
     * Sets the value of the Period property.
     * 
     * @param int Period
     * @return this instance
     */
    public function setPeriod($value) 
    {
        $this->_fields['Period']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Period and returns this instance
     * 
     * @param int $value Period
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsRequest instance
     */
    public function withPeriod($value)
    {
        $this->setPeriod($value);
        return $this;
    }


    /**
     * Checks if Period is set
     * 
     * @return bool true if Period  is set
     */
    public function isSetPeriod()
    {
        return !is_null($this->_fields['Period']['FieldValue']);
    }

    /**
     * Gets the value of the MeasureName property.
     * 
     * @return string MeasureName
     */
    public function getMeasureName() 
    {
        return $this->_fields['MeasureName']['FieldValue'];
    }

    /**
     * Sets the value of the MeasureName property.
     * 
     * @param string MeasureName
     * @return this instance
     */
    public function setMeasureName($value) 
    {
        $this->_fields['MeasureName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MeasureName and returns this instance
     * 
     * @param string $value MeasureName
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsRequest instance
     */
    public function withMeasureName($value)
    {
        $this->setMeasureName($value);
        return $this;
    }


    /**
     * Checks if MeasureName is set
     * 
     * @return bool true if MeasureName  is set
     */
    public function isSetMeasureName()
    {
        return !is_null($this->_fields['MeasureName']['FieldValue']);
    }

    /**
     * Gets the value of the Dimensions.
     * 
     * @return array of Dimension Dimensions
     */
    public function getDimensions() 
    {
        return $this->_fields['Dimensions']['FieldValue'];
    }

    /**
     * Sets the value of the Dimensions.
     * 
     * @param mixed Dimension or an array of Dimension Dimensions
     * @return this instance
     */
    public function setDimensions($dimensions) 
    {
        if (!$this->_isNumericArray($dimensions)) {
            $dimensions =  array ($dimensions);    
        }
        $this->_fields['Dimensions']['FieldValue'] = $dimensions;
        return $this;
    }


    /**
     * Sets single or multiple values of Dimensions list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withDimensions($dimensions1, $dimensions2)</code>
     * 
     * @param Dimension  $dimensionArgs one or more Dimensions
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsRequest  instance
     */
    public function withDimensions($dimensionArgs)
    {
        foreach (func_get_args() as $dimensions) {
            $this->_fields['Dimensions']['FieldValue'][] = $dimensions;
        }
        return $this;
    }   



    /**
     * Checks if Dimensions list is non-empty
     * 
     * @return bool true if Dimensions list is non-empty
     */
    public function isSetDimensions()
    {
        return count ($this->_fields['Dimensions']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the StartTime property.
     * 
     * @return string StartTime
     */
    public function getStartTime() 
    {
        return $this->_fields['StartTime']['FieldValue'];
    }

    /**
     * Sets the value of the StartTime property.
     * 
     * @param string StartTime
     * @return this instance
     */
    public function setStartTime($value) 
    {
        $this->_fields['StartTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the StartTime and returns this instance
     * 
     * @param string $value StartTime
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsRequest instance
     */
    public function withStartTime($value)
    {
        $this->setStartTime($value);
        return $this;
    }


    /**
     * Checks if StartTime is set
     * 
     * @return bool true if StartTime  is set
     */
    public function isSetStartTime()
    {
        return !is_null($this->_fields['StartTime']['FieldValue']);
    }

    /**
     * Gets the value of the EndTime property.
     * 
     * @return string EndTime
     */
    public function getEndTime() 
    {
        return $this->_fields['EndTime']['FieldValue'];
    }

    /**
     * Sets the value of the EndTime property.
     * 
     * @param string EndTime
     * @return this instance
     */
    public function setEndTime($value) 
    {
        $this->_fields['EndTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the EndTime and returns this instance
     * 
     * @param string $value EndTime
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsRequest instance
     */
    public function withEndTime($value)
    {
        $this->setEndTime($value);
        return $this;
    }


    /**
     * Checks if EndTime is set
     * 
     * @return bool true if EndTime  is set
     */
    public function isSetEndTime()
    {
        return !is_null($this->_fields['EndTime']['FieldValue']);
    }

    /**
     * Gets the value of the Unit property.
     * 
     * @return string Unit
     */
    public function getUnit() 
    {
        return $this->_fields['Unit']['FieldValue'];
    }

    /**
     * Sets the value of the Unit property.
     * 
     * @param string Unit
     * @return this instance
     */
    public function setUnit($value) 
    {
        $this->_fields['Unit']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Unit and returns this instance
     * 
     * @param string $value Unit
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsRequest instance
     */
    public function withUnit($value)
    {
        $this->setUnit($value);
        return $this;
    }


    /**
     * Checks if Unit is set
     * 
     * @return bool true if Unit  is set
     */
    public function isSetUnit()
    {
        return !is_null($this->_fields['Unit']['FieldValue']);
    }

    /**
     * Gets the value of the CustomUnit property.
     * 
     * @return string CustomUnit
     */
    public function getCustomUnit() 
    {
        return $this->_fields['CustomUnit']['FieldValue'];
    }

    /**
     * Sets the value of the CustomUnit property.
     * 
     * @param string CustomUnit
     * @return this instance
     */
    public function setCustomUnit($value) 
    {
        $this->_fields['CustomUnit']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CustomUnit and returns this instance
     * 
     * @param string $value CustomUnit
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsRequest instance
     */
    public function withCustomUnit($value)
    {
        $this->setCustomUnit($value);
        return $this;
    }


    /**
     * Checks if CustomUnit is set
     * 
     * @return bool true if CustomUnit  is set
     */
    public function isSetCustomUnit()
    {
        return !is_null($this->_fields['CustomUnit']['FieldValue']);
    }

    /**
     * Gets the value of the Namespace property.
     * 
     * @return string Namespace
     */
    public function getNamespace() 
    {
        return $this->_fields['Namespace']['FieldValue'];
    }

    /**
     * Sets the value of the Namespace property.
     * 
     * @param string Namespace
     * @return this instance
     */
    public function setNamespace($value) 
    {
        $this->_fields['Namespace']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Namespace and returns this instance
     * 
     * @param string $value Namespace
     * @return Amazon_CloudWatch_Model_GetMetricStatisticsRequest instance
     */
    public function withNamespace($value)
    {
        $this->setNamespace($value);
        return $this;
    }


    /**
     * Checks if Namespace is set
     * 
     * @return bool true if Namespace  is set
     */
    public function isSetNamespace()
    {
        return !is_null($this->_fields['Namespace']['FieldValue']);
    }




}