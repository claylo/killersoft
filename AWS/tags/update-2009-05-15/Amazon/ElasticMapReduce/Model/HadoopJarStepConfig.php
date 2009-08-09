<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_ElasticMapReduce
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-03-31
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon Elastic Map Reduce PHP5 Library
 *  Generated: Tue Apr 21 15:38:55 PDT 2009
 * 
 */

/**
 *  @see Amazon_ElasticMapReduce_Model
 */
require_once ('Amazon/ElasticMapReduce/Model.php');  

    

/**
 * Amazon_ElasticMapReduce_Model_HadoopJarStepConfig
 * 
 * Properties:
 * <ul>
 * 
 * <li>Properties: Amazon_ElasticMapReduce_Model_KeyValue</li>
 * <li>Jar: string</li>
 * <li>MainClass: string</li>
 * <li>Args: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_HadoopJarStepConfig extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_HadoopJarStepConfig
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Properties: Amazon_ElasticMapReduce_Model_KeyValue</li>
     * <li>Jar: string</li>
     * <li>MainClass: string</li>
     * <li>Args: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Properties' => array('FieldValue' => array(), 'FieldType' => array('Amazon_ElasticMapReduce_Model_KeyValue')),
        'Jar' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MainClass' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Args' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Properties.
     * 
     * @return array of KeyValue Properties
     */
    public function getProperties() 
    {
        return $this->_fields['Properties']['FieldValue'];
    }

    /**
     * Sets the value of the Properties.
     * 
     * @param mixed KeyValue or an array of KeyValue Properties
     * @return this instance
     */
    public function setProperties($properties) 
    {
        if (!$this->_isNumericArray($properties)) {
            $properties =  array ($properties);    
        }
        $this->_fields['Properties']['FieldValue'] = $properties;
        return $this;
    }


    /**
     * Sets single or multiple values of Properties list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withProperties($properties1, $properties2)</code>
     * 
     * @param KeyValue  $keyValueArgs one or more Properties
     * @return Amazon_ElasticMapReduce_Model_HadoopJarStepConfig  instance
     */
    public function withProperties($keyValueArgs)
    {
        foreach (func_get_args() as $properties) {
            $this->_fields['Properties']['FieldValue'][] = $properties;
        }
        return $this;
    }   



    /**
     * Checks if Properties list is non-empty
     * 
     * @return bool true if Properties list is non-empty
     */
    public function isSetProperties()
    {
        return count ($this->_fields['Properties']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the Jar property.
     * 
     * @return string Jar
     */
    public function getJar() 
    {
        return $this->_fields['Jar']['FieldValue'];
    }

    /**
     * Sets the value of the Jar property.
     * 
     * @param string Jar
     * @return this instance
     */
    public function setJar($value) 
    {
        $this->_fields['Jar']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Jar and returns this instance
     * 
     * @param string $value Jar
     * @return Amazon_ElasticMapReduce_Model_HadoopJarStepConfig instance
     */
    public function withJar($value)
    {
        $this->setJar($value);
        return $this;
    }


    /**
     * Checks if Jar is set
     * 
     * @return bool true if Jar  is set
     */
    public function isSetJar()
    {
        return !is_null($this->_fields['Jar']['FieldValue']);
    }

    /**
     * Gets the value of the MainClass property.
     * 
     * @return string MainClass
     */
    public function getMainClass() 
    {
        return $this->_fields['MainClass']['FieldValue'];
    }

    /**
     * Sets the value of the MainClass property.
     * 
     * @param string MainClass
     * @return this instance
     */
    public function setMainClass($value) 
    {
        $this->_fields['MainClass']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MainClass and returns this instance
     * 
     * @param string $value MainClass
     * @return Amazon_ElasticMapReduce_Model_HadoopJarStepConfig instance
     */
    public function withMainClass($value)
    {
        $this->setMainClass($value);
        return $this;
    }


    /**
     * Checks if MainClass is set
     * 
     * @return bool true if MainClass  is set
     */
    public function isSetMainClass()
    {
        return !is_null($this->_fields['MainClass']['FieldValue']);
    }

    /**
     * Gets the value of the Args .
     * 
     * @return array of string Args
     */
    public function getArgs() 
    {
        return $this->_fields['Args']['FieldValue'];
    }

    /**
     * Sets the value of the Args.
     * 
     * @param string or an array of string Args
     * @return this instance
     */
    public function setArgs($args) 
    {
        if (!$this->_isNumericArray($args)) {
            $args =  array ($args);    
        }
        $this->_fields['Args']['FieldValue'] = $args;
        return $this;
    }
  

    /**
     * Sets single or multiple values of Args list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withArgs($args1, $args2)</code>
     * 
     * @param string  $stringArgs one or more Args
     * @return Amazon_ElasticMapReduce_Model_HadoopJarStepConfig  instance
     */
    public function withArgs($stringArgs)
    {
        foreach (func_get_args() as $args) {
            $this->_fields['Args']['FieldValue'][] = $args;
        }
        return $this;
    }  
      

    /**
     * Checks if Args list is non-empty
     * 
     * @return bool true if Args list is non-empty
     */
    public function isSetArgs()
    {
        return count ($this->_fields['Args']['FieldValue']) > 0;
    }




}