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
 * Amazon_AutoScaling_Model_DescribeTriggersResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Triggers: Amazon_AutoScaling_Model_Trigger</li>
 *
 * </ul>
 */ 
class Amazon_AutoScaling_Model_DescribeTriggersResult extends Amazon_AutoScaling_Model
{


    /**
     * Construct new Amazon_AutoScaling_Model_DescribeTriggersResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Triggers: Amazon_AutoScaling_Model_Trigger</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Triggers' => array('FieldValue' => array(), 'FieldType' => array('Amazon_AutoScaling_Model_Trigger')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Triggers.
     * 
     * @return array of Trigger Triggers
     */
    public function getTriggers() 
    {
        return $this->_fields['Triggers']['FieldValue'];
    }

    /**
     * Sets the value of the Triggers.
     * 
     * @param mixed Trigger or an array of Trigger Triggers
     * @return this instance
     */
    public function setTriggers($triggers) 
    {
        if (!$this->_isNumericArray($triggers)) {
            $triggers =  array ($triggers);    
        }
        $this->_fields['Triggers']['FieldValue'] = $triggers;
        return $this;
    }


    /**
     * Sets single or multiple values of Triggers list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withTriggers($triggers1, $triggers2)</code>
     * 
     * @param Trigger  $triggerArgs one or more Triggers
     * @return Amazon_AutoScaling_Model_DescribeTriggersResult  instance
     */
    public function withTriggers($triggerArgs)
    {
        foreach (func_get_args() as $triggers) {
            $this->_fields['Triggers']['FieldValue'][] = $triggers;
        }
        return $this;
    }   



    /**
     * Checks if Triggers list is non-empty
     * 
     * @return bool true if Triggers list is non-empty
     */
    public function isSetTriggers()
    {
        return count ($this->_fields['Triggers']['FieldValue']) > 0;
    }




}