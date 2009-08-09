<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_FPS
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2008-09-17
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon FPS PHP5 Library
 *  Generated: Mon Jun 15 05:21:26 PDT 2009
 * 
 */

/**
 *  Sample for generating CBUI Request for single use pipeline 
 *
 */
include_once ('.config.inc.php');

/************************************************************************
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants
 * are defined in the .config.inc.php located in the same
 * directory as this sample
 ***********************************************************************/

function getURLForSingleUseToken()
{
    $obj = new Amazon_FPS_CBUIUtils(AWS_ACCESS_KEY_ID,AWS_SECRET_ACCESS_KEY);
    $obj->setMandatoryParams("SingleUse", "<Your Return URL>");
    $obj->setCallerReference("<some unique id to identify the request>");
    $obj->setTransactionAmount("<transaction amount>");
    $obj->setPaymentReason("<payment reason>");
    $qs = $obj->getURL();
    echo "query is $qs\n";
}
//getURLForSingleUseToken();

function validateQueryString()
{
    echo "validing the query string now\n";
    $querystring = "< query string returned by CBUI >";
    $obj = new Amazon_FPS_CBUIUtils(AWS_ACCESS_KEY_ID,AWS_SECRET_ACCESS_KEY);
    //Original signature received in response from Amazon FPS should be specified.
    $signatureMatched = $obj->validateQueryString($querystring,urldecode("< signature parameter returned in the query string>"));

    if($signatureMatched)
        echo "signature matched \n";
    else
        echo "Signature did not match \n";
}
//validateQueryString();

function validateNameValuePairs()
{
    echo "validing the signature now\n";
    $obj = new Amazon_FPS_SignatureUtils(AWS_ACCESS_KEY_ID,AWS_SECRET_ACCESS_KEY);
    $obj->add("expiry","<expiry parameter returned in the query string>");
    $obj->add("tokenID","<tokenID parameter returned in the query string>");
    $obj->add("status","<status parameter returned in the query string>");
    $obj->add("callerReference","<callerReference parameter returned in the query string>");
    //Original signature received in response from Amazon FPS should be specified.
    $signatureMatched = $obj->validate(urldecode("<signature parameter returned in the query string>"));

    if($signatureMatched)
        echo "signature matched \n";
    else
        echo "Signature did not match \n";
}
//validateNameValuePairs();
