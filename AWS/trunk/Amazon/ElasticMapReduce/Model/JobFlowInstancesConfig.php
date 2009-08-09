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
 * Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig
 * 
 * Properties:
 * <ul>
 * 
 * <li>MasterInstanceType: string</li>
 * <li>SlaveInstanceType: string</li>
 * <li>InstanceCount: int</li>
 * <li>Ec2KeyName: string</li>
 * <li>Placement: Amazon_ElasticMapReduce_Model_PlacementType</li>
 * <li>KeepJobFlowAliveWhenNoSteps: bool</li>
 *
 * </ul>
 */ 
class Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig extends Amazon_ElasticMapReduce_Model
{


    /**
     * Construct new Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>MasterInstanceType: string</li>
     * <li>SlaveInstanceType: string</li>
     * <li>InstanceCount: int</li>
     * <li>Ec2KeyName: string</li>
     * <li>Placement: Amazon_ElasticMapReduce_Model_PlacementType</li>
     * <li>KeepJobFlowAliveWhenNoSteps: bool</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'MasterInstanceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SlaveInstanceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceCount' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Ec2KeyName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Placement' => array('FieldValue' => null, 'FieldType' => 'Amazon_ElasticMapReduce_Model_PlacementType'),
        'KeepJobFlowAliveWhenNoSteps' => array('FieldValue' => null, 'FieldType' => 'bool'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the MasterInstanceType property.
     * 
     * @return string MasterInstanceType
     */
    public function getMasterInstanceType() 
    {
        return $this->_fields['MasterInstanceType']['FieldValue'];
    }

    /**
     * Sets the value of the MasterInstanceType property.
     * 
     * @param string MasterInstanceType
     * @return this instance
     */
    public function setMasterInstanceType($value) 
    {
        $this->_fields['MasterInstanceType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MasterInstanceType and returns this instance
     * 
     * @param string $value MasterInstanceType
     * @return Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig instance
     */
    public function withMasterInstanceType($value)
    {
        $this->setMasterInstanceType($value);
        return $this;
    }


    /**
     * Checks if MasterInstanceType is set
     * 
     * @return bool true if MasterInstanceType  is set
     */
    public function isSetMasterInstanceType()
    {
        return !is_null($this->_fields['MasterInstanceType']['FieldValue']);
    }

    /**
     * Gets the value of the SlaveInstanceType property.
     * 
     * @return string SlaveInstanceType
     */
    public function getSlaveInstanceType() 
    {
        return $this->_fields['SlaveInstanceType']['FieldValue'];
    }

    /**
     * Sets the value of the SlaveInstanceType property.
     * 
     * @param string SlaveInstanceType
     * @return this instance
     */
    public function setSlaveInstanceType($value) 
    {
        $this->_fields['SlaveInstanceType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SlaveInstanceType and returns this instance
     * 
     * @param string $value SlaveInstanceType
     * @return Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig instance
     */
    public function withSlaveInstanceType($value)
    {
        $this->setSlaveInstanceType($value);
        return $this;
    }


    /**
     * Checks if SlaveInstanceType is set
     * 
     * @return bool true if SlaveInstanceType  is set
     */
    public function isSetSlaveInstanceType()
    {
        return !is_null($this->_fields['SlaveInstanceType']['FieldValue']);
    }

    /**
     * Gets the value of the InstanceCount property.
     * 
     * @return int InstanceCount
     */
    public function getInstanceCount() 
    {
        return $this->_fields['InstanceCount']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceCount property.
     * 
     * @param int InstanceCount
     * @return this instance
     */
    public function setInstanceCount($value) 
    {
        $this->_fields['InstanceCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstanceCount and returns this instance
     * 
     * @param int $value InstanceCount
     * @return Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig instance
     */
    public function withInstanceCount($value)
    {
        $this->setInstanceCount($value);
        return $this;
    }


    /**
     * Checks if InstanceCount is set
     * 
     * @return bool true if InstanceCount  is set
     */
    public function isSetInstanceCount()
    {
        return !is_null($this->_fields['InstanceCount']['FieldValue']);
    }

    /**
     * Gets the value of the Ec2KeyName property.
     * 
     * @return string Ec2KeyName
     */
    public function getEc2KeyName() 
    {
        return $this->_fields['Ec2KeyName']['FieldValue'];
    }

    /**
     * Sets the value of the Ec2KeyName property.
     * 
     * @param string Ec2KeyName
     * @return this instance
     */
    public function setEc2KeyName($value) 
    {
        $this->_fields['Ec2KeyName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Ec2KeyName and returns this instance
     * 
     * @param string $value Ec2KeyName
     * @return Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig instance
     */
    public function withEc2KeyName($value)
    {
        $this->setEc2KeyName($value);
        return $this;
    }


    /**
     * Checks if Ec2KeyName is set
     * 
     * @return bool true if Ec2KeyName  is set
     */
    public function isSetEc2KeyName()
    {
        return !is_null($this->_fields['Ec2KeyName']['FieldValue']);
    }

    /**
     * Gets the value of the Placement.
     * 
     * @return PlacementType Placement
     */
    public function getPlacement() 
    {
        return $this->_fields['Placement']['FieldValue'];
    }

    /**
     * Sets the value of the Placement.
     * 
     * @param PlacementType Placement
     * @return void
     */
    public function setPlacement($value) 
    {
        $this->_fields['Placement']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Placement  and returns this instance
     * 
     * @param PlacementType $value Placement
     * @return Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig instance
     */
    public function withPlacement($value)
    {
        $this->setPlacement($value);
        return $this;
    }


    /**
     * Checks if Placement  is set
     * 
     * @return bool true if Placement property is set
     */
    public function isSetPlacement()
    {
        return !is_null($this->_fields['Placement']['FieldValue']);

    }

    /**
     * Gets the value of the KeepJobFlowAliveWhenNoSteps property.
     * 
     * @return bool KeepJobFlowAliveWhenNoSteps
     */
    public function getKeepJobFlowAliveWhenNoSteps() 
    {
        return $this->_fields['KeepJobFlowAliveWhenNoSteps']['FieldValue'];
    }

    /**
     * Sets the value of the KeepJobFlowAliveWhenNoSteps property.
     * 
     * @param bool KeepJobFlowAliveWhenNoSteps
     * @return this instance
     */
    public function setKeepJobFlowAliveWhenNoSteps($value) 
    {
        $this->_fields['KeepJobFlowAliveWhenNoSteps']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the KeepJobFlowAliveWhenNoSteps and returns this instance
     * 
     * @param bool $value KeepJobFlowAliveWhenNoSteps
     * @return Amazon_ElasticMapReduce_Model_JobFlowInstancesConfig instance
     */
    public function withKeepJobFlowAliveWhenNoSteps($value)
    {
        $this->setKeepJobFlowAliveWhenNoSteps($value);
        return $this;
    }


    /**
     * Checks if KeepJobFlowAliveWhenNoSteps is set
     * 
     * @return bool true if KeepJobFlowAliveWhenNoSteps  is set
     */
    public function isSetKeepJobFlowAliveWhenNoSteps()
    {
        return !is_null($this->_fields['KeepJobFlowAliveWhenNoSteps']['FieldValue']);
    }




}