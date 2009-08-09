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
 * Describe Job Flows  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon ElasticMapReduce
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_ElasticMapReduce_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_ElasticMapReduce
 * responses without calling Amazon_ElasticMapReduce service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/ElasticMapReduce/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_ElasticMapReduce_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Describe Job Flows Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest
 // object or array of parameters
 // invokeDescribeJobFlows($service, $request);

                        
/**
  * Describe Job Flows Action Sample
  
  * @param Amazon_ElasticMapReduce_Interface $service instance of Amazon_ElasticMapReduce_Interface
  * @param mixed $request Amazon_ElasticMapReduce_Model_DescribeJobFlows or array of parameters
  */
  function invokeDescribeJobFlows(Amazon_ElasticMapReduce_Interface $service, $request) 
  {
      try {
              $response = $service->describeJobFlows($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeJobFlowsResponse\n");
                if ($response->isSetDescribeJobFlowsResult()) { 
                    echo("            DescribeJobFlowsResult\n");
                    $describeJobFlowsResult = $response->getDescribeJobFlowsResult();
                    $jobFlowsList = $describeJobFlowsResult->getJobFlows();
                    foreach ($jobFlowsList as $jobFlows) {
                        echo("                JobFlows\n");
                        if ($jobFlows->isSetJobFlowId()) 
                        {
                            echo("                    JobFlowId\n");
                            echo("                        " . $jobFlows->getJobFlowId() . "\n");
                        }
                        if ($jobFlows->isSetName()) 
                        {
                            echo("                    Name\n");
                            echo("                        " . $jobFlows->getName() . "\n");
                        }
                        if ($jobFlows->isSetLogUri()) 
                        {
                            echo("                    LogUri\n");
                            echo("                        " . $jobFlows->getLogUri() . "\n");
                        }
                        if ($jobFlows->isSetExecutionStatusDetail()) { 
                            echo("                    ExecutionStatusDetail\n");
                            $executionStatusDetail = $jobFlows->getExecutionStatusDetail();
                            if ($executionStatusDetail->isSetState()) 
                            {
                                echo("                        State\n");
                                echo("                            " . $executionStatusDetail->getState() . "\n");
                            }
                            if ($executionStatusDetail->isSetCreationDateTime()) 
                            {
                                echo("                        CreationDateTime\n");
                                echo("                            " . $executionStatusDetail->getCreationDateTime() . "\n");
                            }
                            if ($executionStatusDetail->isSetStartDateTime()) 
                            {
                                echo("                        StartDateTime\n");
                                echo("                            " . $executionStatusDetail->getStartDateTime() . "\n");
                            }
                            if ($executionStatusDetail->isSetEndDateTime()) 
                            {
                                echo("                        EndDateTime\n");
                                echo("                            " . $executionStatusDetail->getEndDateTime() . "\n");
                            }
                            if ($executionStatusDetail->isSetLastStateChangeReason()) 
                            {
                                echo("                        LastStateChangeReason\n");
                                echo("                            " . $executionStatusDetail->getLastStateChangeReason() . "\n");
                            }
                        } 
                        if ($jobFlows->isSetInstances()) { 
                            echo("                    Instances\n");
                            $instances = $jobFlows->getInstances();
                            if ($instances->isSetMasterInstanceType()) 
                            {
                                echo("                        MasterInstanceType\n");
                                echo("                            " . $instances->getMasterInstanceType() . "\n");
                            }
                            if ($instances->isSetMasterPublicDnsName()) 
                            {
                                echo("                        MasterPublicDnsName\n");
                                echo("                            " . $instances->getMasterPublicDnsName() . "\n");
                            }
                            if ($instances->isSetMasterInstanceId()) 
                            {
                                echo("                        MasterInstanceId\n");
                                echo("                            " . $instances->getMasterInstanceId() . "\n");
                            }
                            if ($instances->isSetSlaveInstanceType()) 
                            {
                                echo("                        SlaveInstanceType\n");
                                echo("                            " . $instances->getSlaveInstanceType() . "\n");
                            }
                            if ($instances->isSetInstanceCount()) 
                            {
                                echo("                        InstanceCount\n");
                                echo("                            " . $instances->getInstanceCount() . "\n");
                            }
                            if ($instances->isSetEc2KeyName()) 
                            {
                                echo("                        Ec2KeyName\n");
                                echo("                            " . $instances->getEc2KeyName() . "\n");
                            }
                            if ($instances->isSetPlacement()) { 
                                echo("                        Placement\n");
                                $placement = $instances->getPlacement();
                                if ($placement->isSetAvailabilityZone()) 
                                {
                                    echo("                            AvailabilityZone\n");
                                    echo("                                " . $placement->getAvailabilityZone() . "\n");
                                }
                            } 
                            if ($instances->isSetKeepJobFlowAliveWhenNoSteps()) 
                            {
                                echo("                        KeepJobFlowAliveWhenNoSteps\n");
                                echo("                            " . $instances->getKeepJobFlowAliveWhenNoSteps() . "\n");
                            }
                        } 
                        $stepsList = $jobFlows->getSteps();
                        foreach ($stepsList as $steps) {
                            echo("                    Steps\n");
                            if ($steps->isSetStepConfig()) { 
                                echo("                        StepConfig\n");
                                $stepConfig = $steps->getStepConfig();
                                if ($stepConfig->isSetName()) 
                                {
                                    echo("                            Name\n");
                                    echo("                                " . $stepConfig->getName() . "\n");
                                }
                                if ($stepConfig->isSetActionOnFailure()) 
                                {
                                    echo("                            ActionOnFailure\n");
                                    echo("                                " . $stepConfig->getActionOnFailure() . "\n");
                                }
                                if ($stepConfig->isSetHadoopJarStep()) { 
                                    echo("                            HadoopJarStep\n");
                                    $hadoopJarStep = $stepConfig->getHadoopJarStep();
                                    $propertiesList = $hadoopJarStep->getProperties();
                                    foreach ($propertiesList as $properties) {
                                        echo("                                Properties\n");
                                        if ($properties->isSetKey()) 
                                        {
                                            echo("                                    Key\n");
                                            echo("                                        " . $properties->getKey() . "\n");
                                        }
                                        if ($properties->isSetValue()) 
                                        {
                                            echo("                                    Value\n");
                                            echo("                                        " . $properties->getValue() . "\n");
                                        }
                                    }
                                    if ($hadoopJarStep->isSetJar()) 
                                    {
                                        echo("                                Jar\n");
                                        echo("                                    " . $hadoopJarStep->getJar() . "\n");
                                    }
                                    if ($hadoopJarStep->isSetMainClass()) 
                                    {
                                        echo("                                MainClass\n");
                                        echo("                                    " . $hadoopJarStep->getMainClass() . "\n");
                                    }
                                    $argsList  =  $hadoopJarStep->getArgs();
                                    foreach ($argsList as $args) { 
                                        echo("                                Args\n");
                                        echo("                                    " . $args);
                                    }	
                                } 
                            } 
                            if ($steps->isSetExecutionStatusDetail()) { 
                                echo("                        ExecutionStatusDetail\n");
                                $executionStatusDetail1 = $steps->getExecutionStatusDetail();
                                if ($executionStatusDetail1->isSetState()) 
                                {
                                    echo("                            State\n");
                                    echo("                                " . $executionStatusDetail1->getState() . "\n");
                                }
                                if ($executionStatusDetail1->isSetCreationDateTime()) 
                                {
                                    echo("                            CreationDateTime\n");
                                    echo("                                " . $executionStatusDetail1->getCreationDateTime() . "\n");
                                }
                                if ($executionStatusDetail1->isSetStartDateTime()) 
                                {
                                    echo("                            StartDateTime\n");
                                    echo("                                " . $executionStatusDetail1->getStartDateTime() . "\n");
                                }
                                if ($executionStatusDetail1->isSetEndDateTime()) 
                                {
                                    echo("                            EndDateTime\n");
                                    echo("                                " . $executionStatusDetail1->getEndDateTime() . "\n");
                                }
                                if ($executionStatusDetail1->isSetLastStateChangeReason()) 
                                {
                                    echo("                            LastStateChangeReason\n");
                                    echo("                                " . $executionStatusDetail1->getLastStateChangeReason() . "\n");
                                }
                            } 
                        }
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

     } catch (Amazon_ElasticMapReduce_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
        