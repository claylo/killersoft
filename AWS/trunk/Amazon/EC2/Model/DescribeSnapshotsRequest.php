<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_EC2
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-04-04
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon EC2 PHP5 Library
 *  Generated: Sun May 17 15:45:30 PDT 2009
 * 
 */

/**
 *  @see Amazon_EC2_Model
 */
require_once ('Amazon/EC2/Model.php');  

    

/**
 * Amazon_EC2_Model_DescribeSnapshotsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SnapshotId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSnapshotsRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSnapshotsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SnapshotId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SnapshotId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SnapshotId .
     * 
     * @return array of string SnapshotId
     */
    public function getSnapshotId() 
    {
        return $this->_fields['SnapshotId']['FieldValue'];
    }

    /**
     * Sets the value of the SnapshotId.
     * 
     * @param string or an array of string SnapshotId
     * @return this instance
     */
    public function setSnapshotId($snapshotId) 
    {
        if (!$this->_isNumericArray($snapshotId)) {
            $snapshotId =  array ($snapshotId);    
        }
        $this->_fields['SnapshotId']['FieldValue'] = $snapshotId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of SnapshotId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSnapshotId($snapshotId1, $snapshotId2)</code>
     * 
     * @param string  $stringArgs one or more SnapshotId
     * @return Amazon_EC2_Model_DescribeSnapshotsRequest  instance
     */
    public function withSnapshotId($stringArgs)
    {
        foreach (func_get_args() as $snapshotId) {
            $this->_fields['SnapshotId']['FieldValue'][] = $snapshotId;
        }
        return $this;
    }  
      

    /**
     * Checks if SnapshotId list is non-empty
     * 
     * @return bool true if SnapshotId list is non-empty
     */
    public function isSetSnapshotId()
    {
        return count ($this->_fields['SnapshotId']['FieldValue']) > 0;
    }




}