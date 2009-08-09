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
 * Describe Launch Configurations  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon AutoScaling
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_AutoScaling_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_AutoScaling
 * responses without calling Amazon_AutoScaling service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/AutoScaling/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_AutoScaling_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Describe Launch Configurations Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest
 // object or array of parameters
 // invokeDescribeLaunchConfigurations($service, $request);

                                                    
/**
  * Describe Launch Configurations Action Sample
  
  * @param Amazon_AutoScaling_Interface $service instance of Amazon_AutoScaling_Interface
  * @param mixed $request Amazon_AutoScaling_Model_DescribeLaunchConfigurations or array of parameters
  */
  function invokeDescribeLaunchConfigurations(Amazon_AutoScaling_Interface $service, $request) 
  {
      try {
              $response = $service->describeLaunchConfigurations($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeLaunchConfigurationsResponse\n");
                if ($response->isSetDescribeLaunchConfigurationsResult()) { 
                    echo("            DescribeLaunchConfigurationsResult\n");
                    $describeLaunchConfigurationsResult = $response->getDescribeLaunchConfigurationsResult();
                    $launchConfigurationsList = $describeLaunchConfigurationsResult->getLaunchConfigurations();
                    foreach ($launchConfigurationsList as $launchConfigurations) {
                        echo("                LaunchConfigurations\n");
                        if ($launchConfigurations->isSetLaunchConfigurationName()) 
                        {
                            echo("                    LaunchConfigurationName\n");
                            echo("                        " . $launchConfigurations->getLaunchConfigurationName() . "\n");
                        }
                        if ($launchConfigurations->isSetImageId()) 
                        {
                            echo("                    ImageId\n");
                            echo("                        " . $launchConfigurations->getImageId() . "\n");
                        }
                        if ($launchConfigurations->isSetKeyName()) 
                        {
                            echo("                    KeyName\n");
                            echo("                        " . $launchConfigurations->getKeyName() . "\n");
                        }
                        $securityGroupsList  =  $launchConfigurations->getSecurityGroups();
                        foreach ($securityGroupsList as $securityGroups) { 
                            echo("                    SecurityGroups\n");
                            echo("                        " . $securityGroups);
                        }	
                        if ($launchConfigurations->isSetUserData()) 
                        {
                            echo("                    UserData\n");
                            echo("                        " . $launchConfigurations->getUserData() . "\n");
                        }
                        if ($launchConfigurations->isSetInstanceType()) 
                        {
                            echo("                    InstanceType\n");
                            echo("                        " . $launchConfigurations->getInstanceType() . "\n");
                        }
                        if ($launchConfigurations->isSetKernelId()) 
                        {
                            echo("                    KernelId\n");
                            echo("                        " . $launchConfigurations->getKernelId() . "\n");
                        }
                        if ($launchConfigurations->isSetRamdiskId()) 
                        {
                            echo("                    RamdiskId\n");
                            echo("                        " . $launchConfigurations->getRamdiskId() . "\n");
                        }
                        $blockDeviceMappingsList = $launchConfigurations->getBlockDeviceMappings();
                        foreach ($blockDeviceMappingsList as $blockDeviceMappings) {
                            echo("                    BlockDeviceMappings\n");
                            if ($blockDeviceMappings->isSetVirtualName()) 
                            {
                                echo("                        VirtualName\n");
                                echo("                            " . $blockDeviceMappings->getVirtualName() . "\n");
                            }
                            if ($blockDeviceMappings->isSetDeviceName()) 
                            {
                                echo("                        DeviceName\n");
                                echo("                            " . $blockDeviceMappings->getDeviceName() . "\n");
                            }
                        }
                        if ($launchConfigurations->isSetCreatedTime()) 
                        {
                            echo("                    CreatedTime\n");
                            echo("                        " . $launchConfigurations->getCreatedTime() . "\n");
                        }
                    }
                    if ($describeLaunchConfigurationsResult->isSetNextToken()) 
                    {
                        echo("                NextToken\n");
                        echo("                    " . $describeLaunchConfigurationsResult->getNextToken() . "\n");
                    }
                } 
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

     } catch (Amazon_AutoScaling_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
                