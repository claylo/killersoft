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
 * Amazon_ElasticMapReduce_Model_PlacementType
 * 
 * Properties:
 * <ul>
 * 
 * <li>AvailabilityZone: string</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_PlacementType extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_PlacementType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>AvailabilityZone: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'AvailabilityZone' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the AvailabilityZone property.
     * 
     * @return string AvailabilityZone
     */
    public function getAvailabilityZone() 
    {
        return $this->_fields['AvailabilityZone']['FieldValue'];
    }

    /**
     * Sets the value of the AvailabilityZone property.
     * 
     * @param string AvailabilityZone
     * @return this instance
     */
    public function setAvailabilityZone($value) 
    {
        $this->_fields['AvailabilityZone']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AvailabilityZone and returns this instance
     * 
     * @param string $value AvailabilityZone
     * @return Amazon_ElasticMapReduce_Model_PlacementType instance
     */
    public function withAvailabilityZone($value)
    {
        $this->setAvailabilityZone($value);
        return $this;
    }


    /**
     * Checks if AvailabilityZone is set
     * 
     * @return bool true if AvailabilityZone  is set
     */
    public function isSetAvailabilityZone()
    {
        return !is_null($this->_fields['AvailabilityZone']['FieldValue']);
    }




}