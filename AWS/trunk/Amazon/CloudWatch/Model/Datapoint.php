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
 * Amazon_CloudWatch_Model_Datapoint
 * 
 * Properties:
 * <ul>
 * 
 * <li>Timestamp: string</li>
 * <li>Samples: int</li>
 * <li>Average: int</li>
 * <li>Sum: int</li>
 * <li>Minimum: int</li>
 * <li>Maximum: int</li>
 * <li>Unit: string</li>
 * <li>CustomUnit: string</li>
 *
 * </ul>
 */ 
class Amazon_CloudWatch_Model_Datapoint extends Amazon_CloudWatch_Model
{


    /**
     * Construct new Amazon_CloudWatch_Model_Datapoint
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Timestamp: string</li>
     * <li>Samples: int</li>
     * <li>Average: int</li>
     * <li>Sum: int</li>
     * <li>Minimum: int</li>
     * <li>Maximum: int</li>
     * <li>Unit: string</li>
     * <li>CustomUnit: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Timestamp' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Samples' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Average' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Sum' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Minimum' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Maximum' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Unit' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CustomUnit' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Timestamp property.
     * 
     * @return string Timestamp
     */
    public function getTimestamp() 
    {
        return $this->_fields['Timestamp']['FieldValue'];
    }

    /**
     * Sets the value of the Timestamp property.
     * 
     * @param string Timestamp
     * @return this instance
     */
    public function setTimestamp($value) 
    {
        $this->_fields['Timestamp']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Timestamp and returns this instance
     * 
     * @param string $value Timestamp
     * @return Amazon_CloudWatch_Model_Datapoint instance
     */
    public function withTimestamp($value)
    {
        $this->setTimestamp($value);
        return $this;
    }


    /**
     * Checks if Timestamp is set
     * 
     * @return bool true if Timestamp  is set
     */
    public function isSetTimestamp()
    {
        return !is_null($this->_fields['Timestamp']['FieldValue']);
    }

    /**
     * Gets the value of the Samples property.
     * 
     * @return int Samples
     */
    public function getSamples() 
    {
        return $this->_fields['Samples']['FieldValue'];
    }

    /**
     * Sets the value of the Samples property.
     * 
     * @param int Samples
     * @return this instance
     */
    public function setSamples($value) 
    {
        $this->_fields['Samples']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Samples and returns this instance
     * 
     * @param int $value Samples
     * @return Amazon_CloudWatch_Model_Datapoint instance
     */
    public function withSamples($value)
    {
        $this->setSamples($value);
        return $this;
    }


    /**
     * Checks if Samples is set
     * 
     * @return bool true if Samples  is set
     */
    public function isSetSamples()
    {
        return !is_null($this->_fields['Samples']['FieldValue']);
    }

    /**
     * Gets the value of the Average property.
     * 
     * @return int Average
     */
    public function getAverage() 
    {
        return $this->_fields['Average']['FieldValue'];
    }

    /**
     * Sets the value of the Average property.
     * 
     * @param int Average
     * @return this instance
     */
    public function setAverage($value) 
    {
        $this->_fields['Average']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Average and returns this instance
     * 
     * @param int $value Average
     * @return Amazon_CloudWatch_Model_Datapoint instance
     */
    public function withAverage($value)
    {
        $this->setAverage($value);
        return $this;
    }


    /**
     * Checks if Average is set
     * 
     * @return bool true if Average  is set
     */
    public function isSetAverage()
    {
        return !is_null($this->_fields['Average']['FieldValue']);
    }

    /**
     * Gets the value of the Sum property.
     * 
     * @return int Sum
     */
    public function getSum() 
    {
        return $this->_fields['Sum']['FieldValue'];
    }

    /**
     * Sets the value of the Sum property.
     * 
     * @param int Sum
     * @return this instance
     */
    public function setSum($value) 
    {
        $this->_fields['Sum']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Sum and returns this instance
     * 
     * @param int $value Sum
     * @return Amazon_CloudWatch_Model_Datapoint instance
     */
    public function withSum($value)
    {
        $this->setSum($value);
        return $this;
    }


    /**
     * Checks if Sum is set
     * 
     * @return bool true if Sum  is set
     */
    public function isSetSum()
    {
        return !is_null($this->_fields['Sum']['FieldValue']);
    }

    /**
     * Gets the value of the Minimum property.
     * 
     * @return int Minimum
     */
    public function getMinimum() 
    {
        return $this->_fields['Minimum']['FieldValue'];
    }

    /**
     * Sets the value of the Minimum property.
     * 
     * @param int Minimum
     * @return this instance
     */
    public function setMinimum($value) 
    {
        $this->_fields['Minimum']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Minimum and returns this instance
     * 
     * @param int $value Minimum
     * @return Amazon_CloudWatch_Model_Datapoint instance
     */
    public function withMinimum($value)
    {
        $this->setMinimum($value);
        return $this;
    }


    /**
     * Checks if Minimum is set
     * 
     * @return bool true if Minimum  is set
     */
    public function isSetMinimum()
    {
        return !is_null($this->_fields['Minimum']['FieldValue']);
    }

    /**
     * Gets the value of the Maximum property.
     * 
     * @return int Maximum
     */
    public function getMaximum() 
    {
        return $this->_fields['Maximum']['FieldValue'];
    }

    /**
     * Sets the value of the Maximum property.
     * 
     * @param int Maximum
     * @return this instance
     */
    public function setMaximum($value) 
    {
        $this->_fields['Maximum']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Maximum and returns this instance
     * 
     * @param int $value Maximum
     * @return Amazon_CloudWatch_Model_Datapoint instance
     */
    public function withMaximum($value)
    {
        $this->setMaximum($value);
        return $this;
    }


    /**
     * Checks if Maximum is set
     * 
     * @return bool true if Maximum  is set
     */
    public function isSetMaximum()
    {
        return !is_null($this->_fields['Maximum']['FieldValue']);
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
     * @return Amazon_CloudWatch_Model_Datapoint instance
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
     * @return Amazon_CloudWatch_Model_Datapoint instance
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




}