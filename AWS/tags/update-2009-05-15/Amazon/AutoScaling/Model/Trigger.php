<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_AutoScaling
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
 *  Amazon Auto Scaling PHP5 Library
 *  Generated: Sun May 17 01:17:22 PDT 2009
 * 
 */

/**
 *  @see Amazon_AutoScaling_Model
 */
require_once ('Amazon/AutoScaling/Model.php');  

    

/**
 * Amazon_AutoScaling_Model_Trigger
 * 
 * Properties:
 * <ul>
 * 
 * <li>TriggerName: string</li>
 * <li>AutoScalingGroupName: string</li>
 * <li>MeasureName: string</li>
 * <li>Statistic: string</li>
 * <li>Dimensions: Amazon_AutoScaling_Model_Dimension</li>
 * <li>Period: int</li>
 * <li>Unit: string</li>
 * <li>CustomUnit: string</li>
 * <li>Namespace: string</li>
 * <li>LowerThreshold: int</li>
 * <li>LowerBreachScaleIncrement: string</li>
 * <li>UpperThreshold: int</li>
 * <li>UpperBreachScaleIncrement: string</li>
 * <li>BreachDuration: int</li>
 * <li>Status: string</li>
 * <li>CreatedTime: string</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_Trigger extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_Trigger
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>TriggerName: string</li>
     * <li>AutoScalingGroupName: string</li>
     * <li>MeasureName: string</li>
     * <li>Statistic: string</li>
     * <li>Dimensions: Amazon_AutoScaling_Model_Dimension</li>
     * <li>Period: int</li>
     * <li>Unit: string</li>
     * <li>CustomUnit: string</li>
     * <li>Namespace: string</li>
     * <li>LowerThreshold: int</li>
     * <li>LowerBreachScaleIncrement: string</li>
     * <li>UpperThreshold: int</li>
     * <li>UpperBreachScaleIncrement: string</li>
     * <li>BreachDuration: int</li>
     * <li>Status: string</li>
     * <li>CreatedTime: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'TriggerName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AutoScalingGroupName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MeasureName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Statistic' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Dimensions' => array('FieldValue' => array(), 'FieldType' => array('Amazon_AutoScaling_Model_Dimension')),
        'Period' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Unit' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CustomUnit' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Namespace' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LowerThreshold' => array('FieldValue' => null, 'FieldType' => 'int'),
        'LowerBreachScaleIncrement' => array('FieldValue' => null, 'FieldType' => 'string'),
        'UpperThreshold' => array('FieldValue' => null, 'FieldType' => 'int'),
        'UpperBreachScaleIncrement' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BreachDuration' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Status' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CreatedTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the TriggerName property.
     * 
     * @return string TriggerName
     */
    public function getTriggerName() 
    {
        return $this->_fields['TriggerName']['FieldValue'];
    }

    /**
     * Sets the value of the TriggerName property.
     * 
     * @param string TriggerName
     * @return this instance
     */
    public function setTriggerName($value) 
    {
        $this->_fields['TriggerName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the TriggerName and returns this instance
     * 
     * @param string $value TriggerName
     * @return Amazon_AutoScaling_Model_Trigger instance
     */
    public function withTriggerName($value)
    {
        $this->setTriggerName($value);
        return $this;
    }


    /**
     * Checks if TriggerName is set
     * 
     * @return bool true if TriggerName  is set
     */
    public function isSetTriggerName()
    {
        return !is_null($this->_fields['TriggerName']['FieldValue']);
    }

    /**
     * Gets the value of the AutoScalingGroupName property.
     * 
     * @return string AutoScalingGroupName
     */
    public function getAutoScalingGroupName() 
    {
        return $this->_fields['AutoScalingGroupName']['FieldValue'];
    }

    /**
     * Sets the value of the AutoScalingGroupName property.
     * 
     * @param string AutoScalingGroupName
     * @return this instance
     */
    public function setAutoScalingGroupName($value) 
    {
        $this->_fields['AutoScalingGroupName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AutoScalingGroupName and returns this instance
     * 
     * @param string $value AutoScalingGroupName
     * @return Amazon_AutoScaling_Model_Trigger instance
     */
    public function withAutoScalingGroupName($value)
    {
        $this->setAutoScalingGroupName($value);
        return $this;
    }


    /**
     * Checks if AutoScalingGroupName is set
     * 
     * @return bool true if AutoScalingGroupName  is set
     */
    public function isSetAutoScalingGroupName()
    {
        return !is_null($this->_fields['AutoScalingGroupName']['FieldValue']);
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
     * @return Amazon_AutoScaling_Model_Trigger instance
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
     * Gets the value of the Statistic property.
     * 
     * @return string Statistic
     */
    public function getStatistic() 
    {
        return $this->_fields['Statistic']['FieldValue'];
    }

    /**
     * Sets the value of the Statistic property.
     * 
     * @param string Statistic
     * @return this instance
     */
    public function setStatistic($value) 
    {
        $this->_fields['Statistic']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Statistic and returns this instance
     * 
     * @param string $value Statistic
     * @return Amazon_AutoScaling_Model_Trigger instance
     */
    public function withStatistic($value)
    {
        $this->setStatistic($value);
        return $this;
    }


    /**
     * Checks if Statistic is set
     * 
     * @return bool true if Statistic  is set
     */
    public function isSetStatistic()
    {
        return !is_null($this->_fields['Statistic']['FieldValue']);
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
     * @return Amazon_AutoScaling_Model_Trigger  instance
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
     * @return Amazon_AutoScaling_Model_Trigger instance
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
     * @return Amazon_AutoScaling_Model_Trigger instance
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
     * @return Amazon_AutoScaling_Model_Trigger instance
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
     * @return Amazon_AutoScaling_Model_Trigger instance
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

    /**
     * Gets the value of the LowerThreshold property.
     * 
     * @return int LowerThreshold
     */
    public function getLowerThreshold() 
    {
        return $this->_fields['LowerThreshold']['FieldValue'];
    }

    /**
     * Sets the value of the LowerThreshold property.
     * 
     * @param int LowerThreshold
     * @return this instance
     */
    public function setLowerThreshold($value) 
    {
        $this->_fields['LowerThreshold']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the LowerThreshold and returns this instance
     * 
     * @param int $value LowerThreshold
     * @return Amazon_AutoScaling_Model_Trigger instance
     */
    public function withLowerThreshold($value)
    {
        $this->setLowerThreshold($value);
        return $this;
    }


    /**
     * Checks if LowerThreshold is set
     * 
     * @return bool true if LowerThreshold  is set
     */
    public function isSetLowerThreshold()
    {
        return !is_null($this->_fields['LowerThreshold']['FieldValue']);
    }

    /**
     * Gets the value of the LowerBreachScaleIncrement property.
     * 
     * @return string LowerBreachScaleIncrement
     */
    public function getLowerBreachScaleIncrement() 
    {
        return $this->_fields['LowerBreachScaleIncrement']['FieldValue'];
    }

    /**
     * Sets the value of the LowerBreachScaleIncrement property.
     * 
     * @param string LowerBreachScaleIncrement
     * @return this instance
     */
    public function setLowerBreachScaleIncrement($value) 
    {
        $this->_fields['LowerBreachScaleIncrement']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the LowerBreachScaleIncrement and returns this instance
     * 
     * @param string $value LowerBreachScaleIncrement
     * @return Amazon_AutoScaling_Model_Trigger instance
     */
    public function withLowerBreachScaleIncrement($value)
    {
        $this->setLowerBreachScaleIncrement($value);
        return $this;
    }


    /**
     * Checks if LowerBreachScaleIncrement is set
     * 
     * @return bool true if LowerBreachScaleIncrement  is set
     */
    public function isSetLowerBreachScaleIncrement()
    {
        return !is_null($this->_fields['LowerBreachScaleIncrement']['FieldValue']);
    }

    /**
     * Gets the value of the UpperThreshold property.
     * 
     * @return int UpperThreshold
     */
    public function getUpperThreshold() 
    {
        return $this->_fields['UpperThreshold']['FieldValue'];
    }

    /**
     * Sets the value of the UpperThreshold property.
     * 
     * @param int UpperThreshold
     * @return this instance
     */
    public function setUpperThreshold($value) 
    {
        $this->_fields['UpperThreshold']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the UpperThreshold and returns this instance
     * 
     * @param int $value UpperThreshold
     * @return Amazon_AutoScaling_Model_Trigger instance
     */
    public function withUpperThreshold($value)
    {
        $this->setUpperThreshold($value);
        return $this;
    }


    /**
     * Checks if UpperThreshold is set
     * 
     * @return bool true if UpperThreshold  is set
     */
    public function isSetUpperThreshold()
    {
        return !is_null($this->_fields['UpperThreshold']['FieldValue']);
    }

    /**
     * Gets the value of the UpperBreachScaleIncrement property.
     * 
     * @return string UpperBreachScaleIncrement
     */
    public function getUpperBreachScaleIncrement() 
    {
        return $this->_fields['UpperBreachScaleIncrement']['FieldValue'];
    }

    /**
     * Sets the value of the UpperBreachScaleIncrement property.
     * 
     * @param string UpperBreachScaleIncrement
     * @return this instance
     */
    public function setUpperBreachScaleIncrement($value) 
    {
        $this->_fields['UpperBreachScaleIncrement']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the UpperBreachScaleIncrement and returns this instance
     * 
     * @param string $value UpperBreachScaleIncrement
     * @return Amazon_AutoScaling_Model_Trigger instance
     */
    public function withUpperBreachScaleIncrement($value)
    {
        $this->setUpperBreachScaleIncrement($value);
        return $this;
    }


    /**
     * Checks if UpperBreachScaleIncrement is set
     * 
     * @return bool true if UpperBreachScaleIncrement  is set
     */
    public function isSetUpperBreachScaleIncrement()
    {
        return !is_null($this->_fields['UpperBreachScaleIncrement']['FieldValue']);
    }

    /**
     * Gets the value of the BreachDuration property.
     * 
     * @return int BreachDuration
     */
    public function getBreachDuration() 
    {
        return $this->_fields['BreachDuration']['FieldValue'];
    }

    /**
     * Sets the value of the BreachDuration property.
     * 
     * @param int BreachDuration
     * @return this instance
     */
    public function setBreachDuration($value) 
    {
        $this->_fields['BreachDuration']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the BreachDuration and returns this instance
     * 
     * @param int $value BreachDuration
     * @return Amazon_AutoScaling_Model_Trigger instance
     */
    public function withBreachDuration($value)
    {
        $this->setBreachDuration($value);
        return $this;
    }


    /**
     * Checks if BreachDuration is set
     * 
     * @return bool true if BreachDuration  is set
     */
    public function isSetBreachDuration()
    {
        return !is_null($this->_fields['BreachDuration']['FieldValue']);
    }

    /**
     * Gets the value of the Status property.
     * 
     * @return string Status
     */
    public function getStatus() 
    {
        return $this->_fields['Status']['FieldValue'];
    }

    /**
     * Sets the value of the Status property.
     * 
     * @param string Status
     * @return this instance
     */
    public function setStatus($value) 
    {
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Status and returns this instance
     * 
     * @param string $value Status
     * @return Amazon_AutoScaling_Model_Trigger instance
     */
    public function withStatus($value)
    {
        $this->setStatus($value);
        return $this;
    }


    /**
     * Checks if Status is set
     * 
     * @return bool true if Status  is set
     */
    public function isSetStatus()
    {
        return !is_null($this->_fields['Status']['FieldValue']);
    }

    /**
     * Gets the value of the CreatedTime property.
     * 
     * @return string CreatedTime
     */
    public function getCreatedTime() 
    {
        return $this->_fields['CreatedTime']['FieldValue'];
    }

    /**
     * Sets the value of the CreatedTime property.
     * 
     * @param string CreatedTime
     * @return this instance
     */
    public function setCreatedTime($value) 
    {
        $this->_fields['CreatedTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CreatedTime and returns this instance
     * 
     * @param string $value CreatedTime
     * @return Amazon_AutoScaling_Model_Trigger instance
     */
    public function withCreatedTime($value)
    {
        $this->setCreatedTime($value);
        return $this;
    }


    /**
     * Checks if CreatedTime is set
     * 
     * @return bool true if CreatedTime  is set
     */
    public function isSetCreatedTime()
    {
        return !is_null($this->_fields['CreatedTime']['FieldValue']);
    }




}