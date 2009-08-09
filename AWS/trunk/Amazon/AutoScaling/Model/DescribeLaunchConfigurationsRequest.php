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
 * Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>LaunchConfigurationNames: string</li>
 * <li>NextToken: string</li>
 * <li>MaxRecords: int</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LaunchConfigurationNames: string</li>
     * <li>NextToken: string</li>
     * <li>MaxRecords: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'LaunchConfigurationNames' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MaxRecords' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the LaunchConfigurationNames .
     * 
     * @return array of string LaunchConfigurationNames
     */
    public function getLaunchConfigurationNames() 
    {
        return $this->_fields['LaunchConfigurationNames']['FieldValue'];
    }

    /**
     * Sets the value of the LaunchConfigurationNames.
     * 
     * @param string or an array of string LaunchConfigurationNames
     * @return this instance
     */
    public function setLaunchConfigurationNames($launchConfigurationNames) 
    {
        if (!$this->_isNumericArray($launchConfigurationNames)) {
            $launchConfigurationNames =  array ($launchConfigurationNames);    
        }
        $this->_fields['LaunchConfigurationNames']['FieldValue'] = $launchConfigurationNames;
        return $this;
    }
  

    /**
     * Sets single or multiple values of LaunchConfigurationNames list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withLaunchConfigurationNames($launchConfigurationNames1, $launchConfigurationNames2)</code>
     * 
     * @param string  $stringArgs one or more LaunchConfigurationNames
     * @return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest  instance
     */
    public function withLaunchConfigurationNames($stringArgs)
    {
        foreach (func_get_args() as $launchConfigurationNames) {
            $this->_fields['LaunchConfigurationNames']['FieldValue'][] = $launchConfigurationNames;
        }
        return $this;
    }  
      

    /**
     * Checks if LaunchConfigurationNames list is non-empty
     * 
     * @return bool true if LaunchConfigurationNames list is non-empty
     */
    public function isSetLaunchConfigurationNames()
    {
        return count ($this->_fields['LaunchConfigurationNames']['FieldValue']) > 0;
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
     * @return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest instance
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

    /**
     * Gets the value of the MaxRecords property.
     * 
     * @return int MaxRecords
     */
    public function getMaxRecords() 
    {
        return $this->_fields['MaxRecords']['FieldValue'];
    }

    /**
     * Sets the value of the MaxRecords property.
     * 
     * @param int MaxRecords
     * @return this instance
     */
    public function setMaxRecords($value) 
    {
        $this->_fields['MaxRecords']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MaxRecords and returns this instance
     * 
     * @param int $value MaxRecords
     * @return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest instance
     */
    public function withMaxRecords($value)
    {
        $this->setMaxRecords($value);
        return $this;
    }


    /**
     * Checks if MaxRecords is set
     * 
     * @return bool true if MaxRecords  is set
     */
    public function isSetMaxRecords()
    {
        return !is_null($this->_fields['MaxRecords']['FieldValue']);
    }




}