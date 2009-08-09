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
 * Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>LaunchConfigurations: Amazon_AutoScaling_Model_LaunchConfiguration</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResult extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LaunchConfigurations: Amazon_AutoScaling_Model_LaunchConfiguration</li>
     * <li>NextToken: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'LaunchConfigurations' => array('FieldValue' => array(), 'FieldType' => array('Amazon_AutoScaling_Model_LaunchConfiguration')),
        'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the LaunchConfigurations.
     * 
     * @return array of LaunchConfiguration LaunchConfigurations
     */
    public function getLaunchConfigurations() 
    {
        return $this->_fields['LaunchConfigurations']['FieldValue'];
    }

    /**
     * Sets the value of the LaunchConfigurations.
     * 
     * @param mixed LaunchConfiguration or an array of LaunchConfiguration LaunchConfigurations
     * @return this instance
     */
    public function setLaunchConfigurations($launchConfigurations) 
    {
        if (!$this->_isNumericArray($launchConfigurations)) {
            $launchConfigurations =  array ($launchConfigurations);    
        }
        $this->_fields['LaunchConfigurations']['FieldValue'] = $launchConfigurations;
        return $this;
    }


    /**
     * Sets single or multiple values of LaunchConfigurations list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withLaunchConfigurations($launchConfigurations1, $launchConfigurations2)</code>
     * 
     * @param LaunchConfiguration  $launchConfigurationArgs one or more LaunchConfigurations
     * @return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResult  instance
     */
    public function withLaunchConfigurations($launchConfigurationArgs)
    {
        foreach (func_get_args() as $launchConfigurations) {
            $this->_fields['LaunchConfigurations']['FieldValue'][] = $launchConfigurations;
        }
        return $this;
    }   



    /**
     * Checks if LaunchConfigurations list is non-empty
     * 
     * @return bool true if LaunchConfigurations list is non-empty
     */
    public function isSetLaunchConfigurations()
    {
        return count ($this->_fields['LaunchConfigurations']['FieldValue']) > 0;
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
     * @return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResult instance
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