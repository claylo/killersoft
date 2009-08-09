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
 * Amazon_CloudWatch_Model_Metric
 * 
 * Properties:
 * <ul>
 * 
 * <li>MeasureName: string</li>
 * <li>Dimensions: Amazon_CloudWatch_Model_Dimension</li>
 * <li>Namespace: string</li>
 *
 * </ul>
 */ 
class Amazon_CloudWatch_Model_Metric extends Amazon_CloudWatch_Model
{


    /**
     * Construct new Amazon_CloudWatch_Model_Metric
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>MeasureName: string</li>
     * <li>Dimensions: Amazon_CloudWatch_Model_Dimension</li>
     * <li>Namespace: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'MeasureName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Dimensions' => array('FieldValue' => array(), 'FieldType' => array('Amazon_CloudWatch_Model_Dimension')),
        'Namespace' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * @return Amazon_CloudWatch_Model_Metric instance
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
     * @return Amazon_CloudWatch_Model_Metric  instance
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
     * @return Amazon_CloudWatch_Model_Metric instance
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