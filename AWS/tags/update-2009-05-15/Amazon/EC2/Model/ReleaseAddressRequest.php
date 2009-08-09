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
 * Amazon_EC2_Model_ReleaseAddressRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>PublicIp: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_ReleaseAddressRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_ReleaseAddressRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>PublicIp: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'PublicIp' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the PublicIp property.
     * 
     * @return string PublicIp
     */
    public function getPublicIp() 
    {
        return $this->_fields['PublicIp']['FieldValue'];
    }

    /**
     * Sets the value of the PublicIp property.
     * 
     * @param string PublicIp
     * @return this instance
     */
    public function setPublicIp($value) 
    {
        $this->_fields['PublicIp']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the PublicIp and returns this instance
     * 
     * @param string $value PublicIp
     * @return Amazon_EC2_Model_ReleaseAddressRequest instance
     */
    public function withPublicIp($value)
    {
        $this->setPublicIp($value);
        return $this;
    }


    /**
     * Checks if PublicIp is set
     * 
     * @return bool true if PublicIp  is set
     */
    public function isSetPublicIp()
    {
        return !is_null($this->_fields['PublicIp']['FieldValue']);
    }




}