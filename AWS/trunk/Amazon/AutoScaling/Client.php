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
 *  @see Amazon_AutoScaling_Interface
 */
require_once ('Amazon/AutoScaling/Interface.php');

/**

 * Amazon_AutoScaling_Client is an implementation of Amazon_AutoScaling
 *
 */
class Amazon_AutoScaling_Client implements Amazon_AutoScaling_Interface
{

    const SERVICE_VERSION = '2009-05-15';

    /** @var string */
    private  $_awsAccessKeyId = null;

    /** @var string */
    private  $_awsSecretAccessKey = null;

    /** @var array */
    private  $_config = array ('ServiceURL' => 'https://autoscaling.amazonaws.com',
                               'UserAgent' => 'Amazon AutoScaling PHP5 Library',
                               'SignatureVersion' => 2,
                               'SignatureMethod' => 'HmacSHA256',
                               'ProxyHost' => null,
                               'ProxyPort' => -1,
                               'MaxErrorRetry' => 3
                               );

    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct($awsAccessKeyId, $awsSecretAccessKey, $config = null)
    {
        iconv_set_encoding('output_encoding', 'UTF-8');
        iconv_set_encoding('input_encoding', 'UTF-8');
        iconv_set_encoding('internal_encoding', 'UTF-8');

        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) $this->_config = array_merge($this->_config, $config);
    }

    // Public API ------------------------------------------------------------//


        
    /**
     * Delete Launch Configuration 

     * @see http://docs.amazonwebservices.com/${docPath}DeleteLaunchConfiguration.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DeleteLaunchConfigurationRequest request
     * or Amazon_AutoScaling_Model_DeleteLaunchConfigurationRequest object itself
     * @see Amazon_AutoScaling_Model_DeleteLaunchConfiguration
     * @return Amazon_AutoScaling_Model_DeleteLaunchConfigurationResponse Amazon_AutoScaling_Model_DeleteLaunchConfigurationResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function deleteLaunchConfiguration($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_DeleteLaunchConfigurationRequest) {
            require_once ('Amazon/AutoScaling/Model/DeleteLaunchConfigurationRequest.php');
            $request = new Amazon_AutoScaling_Model_DeleteLaunchConfigurationRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/DeleteLaunchConfigurationResponse.php');
        return Amazon_AutoScaling_Model_DeleteLaunchConfigurationResponse::fromXML($this->_invoke($this->_convertDeleteLaunchConfiguration($request)));
    }


        
    /**
     * Describe Triggers 

     * @see http://docs.amazonwebservices.com/${docPath}DescribeTriggers.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeTriggersRequest request
     * or Amazon_AutoScaling_Model_DescribeTriggersRequest object itself
     * @see Amazon_AutoScaling_Model_DescribeTriggers
     * @return Amazon_AutoScaling_Model_DescribeTriggersResponse Amazon_AutoScaling_Model_DescribeTriggersResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeTriggers($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_DescribeTriggersRequest) {
            require_once ('Amazon/AutoScaling/Model/DescribeTriggersRequest.php');
            $request = new Amazon_AutoScaling_Model_DescribeTriggersRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/DescribeTriggersResponse.php');
        return Amazon_AutoScaling_Model_DescribeTriggersResponse::fromXML($this->_invoke($this->_convertDescribeTriggers($request)));
    }


        
    /**
     * Update Auto Scaling Group 

     * @see http://docs.amazonwebservices.com/${docPath}UpdateAutoScalingGroup.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest request
     * or Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest object itself
     * @see Amazon_AutoScaling_Model_UpdateAutoScalingGroup
     * @return Amazon_AutoScaling_Model_UpdateAutoScalingGroupResponse Amazon_AutoScaling_Model_UpdateAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function updateAutoScalingGroup($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest) {
            require_once ('Amazon/AutoScaling/Model/UpdateAutoScalingGroupRequest.php');
            $request = new Amazon_AutoScaling_Model_UpdateAutoScalingGroupRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/UpdateAutoScalingGroupResponse.php');
        return Amazon_AutoScaling_Model_UpdateAutoScalingGroupResponse::fromXML($this->_invoke($this->_convertUpdateAutoScalingGroup($request)));
    }


        
    /**
     * Create Auto Scaling Group 

     * @see http://docs.amazonwebservices.com/${docPath}CreateAutoScalingGroup.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_CreateAutoScalingGroupRequest request
     * or Amazon_AutoScaling_Model_CreateAutoScalingGroupRequest object itself
     * @see Amazon_AutoScaling_Model_CreateAutoScalingGroup
     * @return Amazon_AutoScaling_Model_CreateAutoScalingGroupResponse Amazon_AutoScaling_Model_CreateAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function createAutoScalingGroup($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_CreateAutoScalingGroupRequest) {
            require_once ('Amazon/AutoScaling/Model/CreateAutoScalingGroupRequest.php');
            $request = new Amazon_AutoScaling_Model_CreateAutoScalingGroupRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/CreateAutoScalingGroupResponse.php');
        return Amazon_AutoScaling_Model_CreateAutoScalingGroupResponse::fromXML($this->_invoke($this->_convertCreateAutoScalingGroup($request)));
    }


        
    /**
     * Delete Trigger 

     * @see http://docs.amazonwebservices.com/${docPath}DeleteTrigger.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DeleteTriggerRequest request
     * or Amazon_AutoScaling_Model_DeleteTriggerRequest object itself
     * @see Amazon_AutoScaling_Model_DeleteTrigger
     * @return Amazon_AutoScaling_Model_DeleteTriggerResponse Amazon_AutoScaling_Model_DeleteTriggerResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function deleteTrigger($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_DeleteTriggerRequest) {
            require_once ('Amazon/AutoScaling/Model/DeleteTriggerRequest.php');
            $request = new Amazon_AutoScaling_Model_DeleteTriggerRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/DeleteTriggerResponse.php');
        return Amazon_AutoScaling_Model_DeleteTriggerResponse::fromXML($this->_invoke($this->_convertDeleteTrigger($request)));
    }


        
    /**
     * Terminate Instance In Auto Scaling Group 

     * @see http://docs.amazonwebservices.com/${docPath}TerminateInstanceInAutoScalingGroup.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest request
     * or Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest object itself
     * @see Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroup
     * @return Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function terminateInstanceInAutoScalingGroup($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest) {
            require_once ('Amazon/AutoScaling/Model/TerminateInstanceInAutoScalingGroupRequest.php');
            $request = new Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/TerminateInstanceInAutoScalingGroupResponse.php');
        return Amazon_AutoScaling_Model_TerminateInstanceInAutoScalingGroupResponse::fromXML($this->_invoke($this->_convertTerminateInstanceInAutoScalingGroup($request)));
    }


        
    /**
     * Create Or Update Scaling Trigger 

     * @see http://docs.amazonwebservices.com/${docPath}CreateOrUpdateScalingTrigger.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerRequest request
     * or Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerRequest object itself
     * @see Amazon_AutoScaling_Model_CreateOrUpdateScalingTrigger
     * @return Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerResponse Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function createOrUpdateScalingTrigger($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerRequest) {
            require_once ('Amazon/AutoScaling/Model/CreateOrUpdateScalingTriggerRequest.php');
            $request = new Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/CreateOrUpdateScalingTriggerResponse.php');
        return Amazon_AutoScaling_Model_CreateOrUpdateScalingTriggerResponse::fromXML($this->_invoke($this->_convertCreateOrUpdateScalingTrigger($request)));
    }


        
    /**
     * Describe Auto Scaling Groups 

     * @see http://docs.amazonwebservices.com/${docPath}DescribeAutoScalingGroups.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest request
     * or Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest object itself
     * @see Amazon_AutoScaling_Model_DescribeAutoScalingGroups
     * @return Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeAutoScalingGroups($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest) {
            require_once ('Amazon/AutoScaling/Model/DescribeAutoScalingGroupsRequest.php');
            $request = new Amazon_AutoScaling_Model_DescribeAutoScalingGroupsRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/DescribeAutoScalingGroupsResponse.php');
        return Amazon_AutoScaling_Model_DescribeAutoScalingGroupsResponse::fromXML($this->_invoke($this->_convertDescribeAutoScalingGroups($request)));
    }


        
    /**
     * Create Launch Configuration 

     * @see http://docs.amazonwebservices.com/${docPath}CreateLaunchConfiguration.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest request
     * or Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest object itself
     * @see Amazon_AutoScaling_Model_CreateLaunchConfiguration
     * @return Amazon_AutoScaling_Model_CreateLaunchConfigurationResponse Amazon_AutoScaling_Model_CreateLaunchConfigurationResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function createLaunchConfiguration($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest) {
            require_once ('Amazon/AutoScaling/Model/CreateLaunchConfigurationRequest.php');
            $request = new Amazon_AutoScaling_Model_CreateLaunchConfigurationRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/CreateLaunchConfigurationResponse.php');
        return Amazon_AutoScaling_Model_CreateLaunchConfigurationResponse::fromXML($this->_invoke($this->_convertCreateLaunchConfiguration($request)));
    }


        
    /**
     * Describe Launch Configurations 

     * @see http://docs.amazonwebservices.com/${docPath}DescribeLaunchConfigurations.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest request
     * or Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest object itself
     * @see Amazon_AutoScaling_Model_DescribeLaunchConfigurations
     * @return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeLaunchConfigurations($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest) {
            require_once ('Amazon/AutoScaling/Model/DescribeLaunchConfigurationsRequest.php');
            $request = new Amazon_AutoScaling_Model_DescribeLaunchConfigurationsRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/DescribeLaunchConfigurationsResponse.php');
        return Amazon_AutoScaling_Model_DescribeLaunchConfigurationsResponse::fromXML($this->_invoke($this->_convertDescribeLaunchConfigurations($request)));
    }


        
    /**
     * Describe Scaling Activities 

     * @see http://docs.amazonwebservices.com/${docPath}DescribeScalingActivities.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest request
     * or Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest object itself
     * @see Amazon_AutoScaling_Model_DescribeScalingActivities
     * @return Amazon_AutoScaling_Model_DescribeScalingActivitiesResponse Amazon_AutoScaling_Model_DescribeScalingActivitiesResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function describeScalingActivities($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest) {
            require_once ('Amazon/AutoScaling/Model/DescribeScalingActivitiesRequest.php');
            $request = new Amazon_AutoScaling_Model_DescribeScalingActivitiesRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/DescribeScalingActivitiesResponse.php');
        return Amazon_AutoScaling_Model_DescribeScalingActivitiesResponse::fromXML($this->_invoke($this->_convertDescribeScalingActivities($request)));
    }


        
    /**
     * Set Desired Capacity 

     * @see http://docs.amazonwebservices.com/${docPath}SetDesiredCapacity.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_SetDesiredCapacityRequest request
     * or Amazon_AutoScaling_Model_SetDesiredCapacityRequest object itself
     * @see Amazon_AutoScaling_Model_SetDesiredCapacity
     * @return Amazon_AutoScaling_Model_SetDesiredCapacityResponse Amazon_AutoScaling_Model_SetDesiredCapacityResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function setDesiredCapacity($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_SetDesiredCapacityRequest) {
            require_once ('Amazon/AutoScaling/Model/SetDesiredCapacityRequest.php');
            $request = new Amazon_AutoScaling_Model_SetDesiredCapacityRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/SetDesiredCapacityResponse.php');
        return Amazon_AutoScaling_Model_SetDesiredCapacityResponse::fromXML($this->_invoke($this->_convertSetDesiredCapacity($request)));
    }


        
    /**
     * Delete Auto Scaling Group 

     * @see http://docs.amazonwebservices.com/${docPath}DeleteAutoScalingGroup.html
     * @param mixed $request array of parameters for Amazon_AutoScaling_Model_DeleteAutoScalingGroupRequest request
     * or Amazon_AutoScaling_Model_DeleteAutoScalingGroupRequest object itself
     * @see Amazon_AutoScaling_Model_DeleteAutoScalingGroup
     * @return Amazon_AutoScaling_Model_DeleteAutoScalingGroupResponse Amazon_AutoScaling_Model_DeleteAutoScalingGroupResponse
     *
     * @throws Amazon_AutoScaling_Exception
     */
    public function deleteAutoScalingGroup($request)
    {
        if (!$request instanceof Amazon_AutoScaling_Model_DeleteAutoScalingGroupRequest) {
            require_once ('Amazon/AutoScaling/Model/DeleteAutoScalingGroupRequest.php');
            $request = new Amazon_AutoScaling_Model_DeleteAutoScalingGroupRequest($request);
        }
        require_once ('Amazon/AutoScaling/Model/DeleteAutoScalingGroupResponse.php');
        return Amazon_AutoScaling_Model_DeleteAutoScalingGroupResponse::fromXML($this->_invoke($this->_convertDeleteAutoScalingGroup($request)));
    }

        // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        $actionName = $parameters["Action"];
        $response = array();
        $responseBody = null;
        $statusCode = 200;

        /* Submit the request and read response body */
        try {

            /* Add required request parameters */
            $parameters = $this->_addRequiredParameters($parameters);

            $shouldRetry = true;
            $retries = 0;
            do {
                try {
                        $response = $this->_httpPost($parameters);
                        if ($response['Status'] === 200) {
                            $shouldRetry = false;
                        } else {
                            if ($response['Status'] === 500 || $response['Status'] === 503) {
                                $shouldRetry = true;
                                $this->_pauseOnRetry(++$retries, $response['Status']);
                            } else {
                                throw $this->_reportAnyErrors($response['ResponseBody'], $response['Status']);
                            }
                       }
                /* Rethrow on deserializer error */
                } catch (Exception $e) {
                    require_once ('Amazon/AutoScaling/Exception.php');
                    if ($e instanceof Amazon_AutoScaling_Exception) {
                        throw $e;
                    } else {
                        require_once ('Amazon/AutoScaling/Exception.php');
                        throw new Amazon_AutoScaling_Exception(array('Exception' => $e, 'Message' => $e->getMessage()));
                    }
                }

            } while ($shouldRetry);

        } catch (Amazon_AutoScaling_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Amazon_AutoScaling_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }

        return $response['ResponseBody'];
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function _reportAnyErrors($responseBody, $status, Exception $e =  null)
    {
        $ex = null;
        if (!is_null($responseBody) && strpos($responseBody, '<') === 0) {
            if (preg_match('@<RequestId>(.*)</RequestId>.*<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?@mi',
                $responseBody, $errorMatcherOne)) {

                $requestId = $errorMatcherOne[1];
                $code = $errorMatcherOne[2];
                $message = $errorMatcherOne[3];

                require_once ('Amazon/AutoScaling/Exception.php');
                $ex = new Amazon_AutoScaling_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                           'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));

            } elseif (preg_match('@<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?.*<RequestID>(.*)</RequestID>@mi',
                $responseBody, $errorMatcherTwo)) {

                $code = $errorMatcherTwo[1];
                $message = $errorMatcherTwo[2];
                $requestId = $errorMatcherTwo[4];
                require_once ('Amazon/AutoScaling/Exception.php');
                $ex = new Amazon_AutoScaling_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));
            } elseif (preg_match('@<Error><Type>(.*)</Type><Code>(.*)</Code><Message>(.*)</Message>.*</Error>.*(<Error>)?.*<RequestId>(.*)</RequestId>@mi',
                $responseBody, $errorMatcherThree)) {

                $type = $errorMatcherThree[1];
                $code = $errorMatcherThree[2];
                $message = $errorMatcherThree[3];
                $requestId = $errorMatcherThree[5];
                require_once ('Amazon/AutoScaling/Exception.php');
                $ex = new Amazon_AutoScaling_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => $type, 'RequestId' => $requestId, 'XML' => $responseBody));

            } else {
                require_once ('Amazon/AutoScaling/Exception.php');
                $ex = new Amazon_AutoScaling_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
            }
        } else {
            require_once ('Amazon/AutoScaling/Exception.php');
            $ex = new Amazon_AutoScaling_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
        }
        return $ex;
    }



    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     *
     */
    private function _httpPost(array $parameters)
    {

        $query = $this->_getParametersAsString($parameters);
        $url = parse_url ($this->_config['ServiceURL']);
        $post  = "POST / HTTP/1.0\r\n";
        $post .= "Host: " . $url['host'] . "\r\n";
        $post .= "Content-Type: application/x-www-form-urlencoded; charset=utf-8\r\n";
        $post .= "Content-Length: " . strlen($query) . "\r\n";
        $post .= "User-Agent: " . $this->_config['UserAgent'] . "\r\n";
        $post .= "\r\n";
        $post .= $query;
        $port = array_key_exists('port',$url) ? $url['port'] : null;
        $scheme = '';

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'ssl://';
                $port = $port === null ? 443 : $port;
                break;
            default:
                $scheme = '';
                $port = $port === null ? 80 : $port;
        }

        $response = '';
        if ($socket = @fsockopen($scheme . $url['host'], $port, $errno, $errstr, 10)) {

            fwrite($socket, $post);

            while (!feof($socket)) {
                $response .= fgets($socket, 1160);
            }
            fclose($socket);

            list($other, $responseBody) = explode("\r\n\r\n", $response, 2);
            $other = preg_split("/\r\n|\n|\r/", $other);
            list($protocol, $code, $text) = explode(' ', trim(array_shift($other)), 3);
        } else {
            throw new Exception ("Unable to establish connection to host " . $url['host'] . " $errstr");
        }

        $actionResponseMatch =  "<" .  $parameters['Action'] . "Response";
        if (preg_match("/$actionResponseMatch/", $responseBody)) {
            $responseDoc = new DomDocument;
            $responseDoc->loadXML($responseBody);
            $xsltProcessor = new XsltProcessor();
            $xslTemplate = new DomDocument;
            $xslTemplate->loadXML(file_get_contents('Amazon/AutoScaling/Model/' . 'ResponseTransformer.xslt', /** search include path */ TRUE));
            $xsltProcessor->importStylesheet($xslTemplate);
            $responseBody = $xsltProcessor->transformToXML($responseDoc);
        }



        return array ('Status' => (int)$code, 'ResponseBody' => $responseBody);
    }

    /**
     * Exponential sleep on failed request
     * @param retries current retry
     * @throws Amazon_AutoScaling_Exception if maximum number of retries has been reached
     */
    private function _pauseOnRetry($retries, $status)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000) ;
            usleep($delay);
        } else {
            require_once ('Amazon/AutoScaling/Exception.php');
            throw new Amazon_AutoScaling_Exception (array ('Message' => "Maximum number of retry attempts reached :  $retries", 'StatusCode' => $status));
        }
    }

    /**
     * Add authentication related and version parameters
     */
    private function _addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId'] = $this->_awsAccessKeyId;
        $parameters['Timestamp'] = $this->_getFormattedTimestamp();
        $parameters['Version'] = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->_config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $this->_awsSecretAccessKey);

        return $parameters;
    }

    /**
     * Convert paremeters to Url encoded query string
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = array();
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . $this->_urlencode($value);
        }
        return implode('&', $queryParameters);
    }


    /**
     * Computes RFC 2104-compliant HMAC signature for request parameters
     * Implements AWS Signature, as per following spec:
     *
     * If Signature Version is 0, it signs concatenated Action and Timestamp
     *
     * If Signature Version is 1, it performs the following:
     *
     * Sorts all  parameters (including SignatureVersion and excluding Signature,
     * the value of which is being created), ignoring case.
     *
     * Iterate over the sorted list and append the parameter name (in original case)
     * and then its value. It will not URL-encode the parameter values before
     * constructing this string. There are no separators.
     *
     * If Signature Version is 2, string to sign is based on following:
     *
     *    1. The HTTP Request Method followed by an ASCII newline (%0A)
     *    2. The HTTP Host header in the form of lowercase host, followed by an ASCII newline.
     *    3. The URL encoded HTTP absolute path component of the URI
     *       (up to but not including the query string parameters);
     *       if this is empty use a forward '/'. This parameter is followed by an ASCII newline.
     *    4. The concatenation of all query string components (names and values)
     *       as UTF-8 characters which are URL encoded as per RFC 3986
     *       (hex characters MUST be uppercase), sorted using lexicographic byte ordering.
     *       Parameter names are separated from their values by the '=' character
     *       (ASCII character 61), even if the value is empty.
     *       Pairs of parameter and values are separated by the '&' character (ASCII code 38).
     *
     */
    private function _signParameters(array $parameters, $key) {
        $signatureVersion = $parameters['SignatureVersion'];
        $algorithm = "HmacSHA1";
        $stringToSign = null;
        if (0 === $signatureVersion) {
            $stringToSign = $this->_calculateStringToSignV0($parameters);
        } else if (1 === $signatureVersion) {
            $stringToSign = $this->_calculateStringToSignV1($parameters);
        } else if (2 === $signatureVersion) {
            $algorithm = $this->_config['SignatureMethod'];
            $parameters['SignatureMethod'] = $algorithm;
            $stringToSign = $this->_calculateStringToSignV2($parameters);
        } else {
            throw new Exception("Invalid Signature Version specified");
        }
        return $this->_sign($stringToSign, $key, $algorithm);
    }

    /**
     * Calculate String to Sign for SignatureVersion 0
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV0(array $parameters) {
        return $parameters['Action'] .  $parameters['Timestamp'];
    }

    /**
     * Calculate String to Sign for SignatureVersion 1
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV1(array $parameters) {
        $data = '';
        uksort($parameters, 'strcasecmp');
        foreach ($parameters as $parameterName => $parameterValue) {
            $data .= $parameterName . $parameterValue;
        }
        return $data;
    }

    /**
     * Calculate String to Sign for SignatureVersion 2
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV2(array $parameters) {
        $data = 'POST';
        $data .= "\n";
        $endpoint = parse_url ($this->_config['ServiceURL']);
        $data .= $endpoint['host'];
        $data .= "\n";
        $uri = array_key_exists('path', $endpoint) ? $endpoint['path'] : null;
        if (!isset ($uri)) {
        	$uri = "/";
        }
		$uriencoded = implode("/", array_map(array($this, "_urlencode"), explode("/", $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);
        return $data;
    }

    private function _urlencode($value) {
		return str_replace('%7E', '~', rawurlencode($value));
    }


    /**
     * Computes RFC 2104-compliant HMAC signature.
     */
    private function _sign($data, $key, $algorithm)
    {
        if ($algorithm === 'HmacSHA1') {
            $hash = 'sha1';
        } else if ($algorithm === 'HmacSHA256') {
            $hash = 'sha256';
        } else {
            throw new Exception ("Non-supported signing method specified");
        }
        return base64_encode(
            hash_hmac($hash, $data, $key, true)
        );
    }


    /**
     * Formats date as ISO 8601 timestamp
     */
    private function _getFormattedTimestamp()
    {
        return gmdate("Y-m-d\TH:i:s.\\0\\0\\0\\Z", time());
    }


                                                
    /**
     * Convert DeleteLaunchConfigurationRequest to name value pairs
     */
    private function _convertDeleteLaunchConfiguration($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteLaunchConfiguration';
        if ($request->isSetLaunchConfigurationName()) {
            $parameters['LaunchConfigurationName'] =  $request->getLaunchConfigurationName();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeTriggersRequest to name value pairs
     */
    private function _convertDescribeTriggers($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeTriggers';
        if ($request->isSetAutoScalingGroupName()) {
            $parameters['AutoScalingGroupName'] =  $request->getAutoScalingGroupName();
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert UpdateAutoScalingGroupRequest to name value pairs
     */
    private function _convertUpdateAutoScalingGroup($request) {
        
        $parameters = array();
        $parameters['Action'] = 'UpdateAutoScalingGroup';
        if ($request->isSetAutoScalingGroupName()) {
            $parameters['AutoScalingGroupName'] =  $request->getAutoScalingGroupName();
        }
        if ($request->isSetLaunchConfigurationName()) {
            $parameters['LaunchConfigurationName'] =  $request->getLaunchConfigurationName();
        }
        if ($request->isSetMinSize()) {
            $parameters['MinSize'] =  $request->getMinSize();
        }
        if ($request->isSetMaxSize()) {
            $parameters['MaxSize'] =  $request->getMaxSize();
        }
        if ($request->isSetCooldown()) {
            $parameters['Cooldown'] =  $request->getCooldown();
        }
        foreach  ($request->getAvailabilityZones() as $availabilityZonesupdateAutoScalingGroupRequestIndex => $availabilityZonesupdateAutoScalingGroupRequest) {
            $parameters['AvailabilityZones' . '.member.'  . ($availabilityZonesupdateAutoScalingGroupRequestIndex + 1)] =  $availabilityZonesupdateAutoScalingGroupRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CreateAutoScalingGroupRequest to name value pairs
     */
    private function _convertCreateAutoScalingGroup($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateAutoScalingGroup';
        if ($request->isSetAutoScalingGroupName()) {
            $parameters['AutoScalingGroupName'] =  $request->getAutoScalingGroupName();
        }
        if ($request->isSetLaunchConfigurationName()) {
            $parameters['LaunchConfigurationName'] =  $request->getLaunchConfigurationName();
        }
        if ($request->isSetMinSize()) {
            $parameters['MinSize'] =  $request->getMinSize();
        }
        if ($request->isSetMaxSize()) {
            $parameters['MaxSize'] =  $request->getMaxSize();
        }
        if ($request->isSetCooldown()) {
            $parameters['Cooldown'] =  $request->getCooldown();
        }
        foreach  ($request->getAvailabilityZones() as $availabilityZonescreateAutoScalingGroupRequestIndex => $availabilityZonescreateAutoScalingGroupRequest) {
            $parameters['AvailabilityZones' . '.member.'  . ($availabilityZonescreateAutoScalingGroupRequestIndex + 1)] =  $availabilityZonescreateAutoScalingGroupRequest;
        }
        foreach  ($request->getLoadBalancerNames() as $loadBalancerNamescreateAutoScalingGroupRequestIndex => $loadBalancerNamescreateAutoScalingGroupRequest) {
            $parameters['LoadBalancerNames' . '.member.'  . ($loadBalancerNamescreateAutoScalingGroupRequestIndex + 1)] =  $loadBalancerNamescreateAutoScalingGroupRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteTriggerRequest to name value pairs
     */
    private function _convertDeleteTrigger($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteTrigger';
        if ($request->isSetAutoScalingGroupName()) {
            $parameters['AutoScalingGroupName'] =  $request->getAutoScalingGroupName();
        }
        if ($request->isSetTriggerName()) {
            $parameters['TriggerName'] =  $request->getTriggerName();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert TerminateInstanceInAutoScalingGroupRequest to name value pairs
     */
    private function _convertTerminateInstanceInAutoScalingGroup($request) {
        
        $parameters = array();
        $parameters['Action'] = 'TerminateInstanceInAutoScalingGroup';
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }
        if ($request->isSetShouldDecrementDesiredCapacity()) {
            $parameters['ShouldDecrementDesiredCapacity'] =  $request->getShouldDecrementDesiredCapacity() ? "true" : "false";
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert CreateOrUpdateScalingTriggerRequest to name value pairs
     */
    private function _convertCreateOrUpdateScalingTrigger($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateOrUpdateScalingTrigger';
        if ($request->isSetTriggerName()) {
            $parameters['TriggerName'] =  $request->getTriggerName();
        }
        if ($request->isSetAutoScalingGroupName()) {
            $parameters['AutoScalingGroupName'] =  $request->getAutoScalingGroupName();
        }
        if ($request->isSetMeasureName()) {
            $parameters['MeasureName'] =  $request->getMeasureName();
        }
        if ($request->isSetStatistic()) {
            $parameters['Statistic'] =  $request->getStatistic();
        }
        foreach ($request->getDimensions() as $dimensionscreateOrUpdateScalingTriggerRequestIndex => $dimensionscreateOrUpdateScalingTriggerRequest) {
            if ($dimensionscreateOrUpdateScalingTriggerRequest->isSetName()) {
                $parameters['Dimensions' . '.member.'  . ($dimensionscreateOrUpdateScalingTriggerRequestIndex + 1) . '.' . 'Name'] =  $dimensionscreateOrUpdateScalingTriggerRequest->getName();
            }
            if ($dimensionscreateOrUpdateScalingTriggerRequest->isSetValue()) {
                $parameters['Dimensions' . '.member.'  . ($dimensionscreateOrUpdateScalingTriggerRequestIndex + 1) . '.' . 'Value'] =  $dimensionscreateOrUpdateScalingTriggerRequest->getValue();
            }

        }
        if ($request->isSetPeriod()) {
            $parameters['Period'] =  $request->getPeriod();
        }
        if ($request->isSetUnit()) {
            $parameters['Unit'] =  $request->getUnit();
        }
        if ($request->isSetCustomUnit()) {
            $parameters['CustomUnit'] =  $request->getCustomUnit();
        }
        if ($request->isSetNamespace()) {
            $parameters['Namespace'] =  $request->getNamespace();
        }
        if ($request->isSetLowerThreshold()) {
            $parameters['LowerThreshold'] =  $request->getLowerThreshold();
        }
        if ($request->isSetLowerBreachScaleIncrement()) {
            $parameters['LowerBreachScaleIncrement'] =  $request->getLowerBreachScaleIncrement();
        }
        if ($request->isSetUpperThreshold()) {
            $parameters['UpperThreshold'] =  $request->getUpperThreshold();
        }
        if ($request->isSetUpperBreachScaleIncrement()) {
            $parameters['UpperBreachScaleIncrement'] =  $request->getUpperBreachScaleIncrement();
        }
        if ($request->isSetBreachDuration()) {
            $parameters['BreachDuration'] =  $request->getBreachDuration();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeAutoScalingGroupsRequest to name value pairs
     */
    private function _convertDescribeAutoScalingGroups($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeAutoScalingGroups';
        foreach  ($request->getAutoScalingGroupNames() as $autoScalingGroupNamesdescribeAutoScalingGroupsRequestIndex => $autoScalingGroupNamesdescribeAutoScalingGroupsRequest) {
            $parameters['AutoScalingGroupNames' . '.member.'  . ($autoScalingGroupNamesdescribeAutoScalingGroupsRequestIndex + 1)] =  $autoScalingGroupNamesdescribeAutoScalingGroupsRequest;
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert CreateLaunchConfigurationRequest to name value pairs
     */
    private function _convertCreateLaunchConfiguration($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateLaunchConfiguration';
        if ($request->isSetLaunchConfigurationName()) {
            $parameters['LaunchConfigurationName'] =  $request->getLaunchConfigurationName();
        }
        if ($request->isSetImageId()) {
            $parameters['ImageId'] =  $request->getImageId();
        }
        if ($request->isSetKeyName()) {
            $parameters['KeyName'] =  $request->getKeyName();
        }
        foreach  ($request->getSecurityGroups() as $securityGroupscreateLaunchConfigurationRequestIndex => $securityGroupscreateLaunchConfigurationRequest) {
            $parameters['SecurityGroups' . '.member.'  . ($securityGroupscreateLaunchConfigurationRequestIndex + 1)] =  $securityGroupscreateLaunchConfigurationRequest;
        }
        if ($request->isSetUserData()) {
            $parameters['UserData'] =  $request->getUserData();
        }
        if ($request->isSetInstanceType()) {
            $parameters['InstanceType'] =  $request->getInstanceType();
        }
        if ($request->isSetKernelId()) {
            $parameters['KernelId'] =  $request->getKernelId();
        }
        if ($request->isSetRamdiskId()) {
            $parameters['RamdiskId'] =  $request->getRamdiskId();
        }
        foreach ($request->getBlockDeviceMappings() as $blockDeviceMappingscreateLaunchConfigurationRequestIndex => $blockDeviceMappingscreateLaunchConfigurationRequest) {
            if ($blockDeviceMappingscreateLaunchConfigurationRequest->isSetVirtualName()) {
                $parameters['BlockDeviceMappings' . '.member.'  . ($blockDeviceMappingscreateLaunchConfigurationRequestIndex + 1) . '.' . 'VirtualName'] =  $blockDeviceMappingscreateLaunchConfigurationRequest->getVirtualName();
            }
            if ($blockDeviceMappingscreateLaunchConfigurationRequest->isSetDeviceName()) {
                $parameters['BlockDeviceMappings' . '.member.'  . ($blockDeviceMappingscreateLaunchConfigurationRequestIndex + 1) . '.' . 'DeviceName'] =  $blockDeviceMappingscreateLaunchConfigurationRequest->getDeviceName();
            }

        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeLaunchConfigurationsRequest to name value pairs
     */
    private function _convertDescribeLaunchConfigurations($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeLaunchConfigurations';
        foreach  ($request->getLaunchConfigurationNames() as $launchConfigurationNamesdescribeLaunchConfigurationsRequestIndex => $launchConfigurationNamesdescribeLaunchConfigurationsRequest) {
            $parameters['LaunchConfigurationNames' . '.member.'  . ($launchConfigurationNamesdescribeLaunchConfigurationsRequestIndex + 1)] =  $launchConfigurationNamesdescribeLaunchConfigurationsRequest;
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }
        if ($request->isSetMaxRecords()) {
            $parameters['MaxRecords'] =  $request->getMaxRecords();
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert DescribeScalingActivitiesRequest to name value pairs
     */
    private function _convertDescribeScalingActivities($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeScalingActivities';
        foreach  ($request->getActivityIds() as $activityIdsdescribeScalingActivitiesRequestIndex => $activityIdsdescribeScalingActivitiesRequest) {
            $parameters['ActivityIds' . '.member.'  . ($activityIdsdescribeScalingActivitiesRequestIndex + 1)] =  $activityIdsdescribeScalingActivitiesRequest;
        }
        if ($request->isSetAutoScalingGroupName()) {
            $parameters['AutoScalingGroupName'] =  $request->getAutoScalingGroupName();
        }
        if ($request->isSetMaxRecords()) {
            $parameters['MaxRecords'] =  $request->getMaxRecords();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert SetDesiredCapacityRequest to name value pairs
     */
    private function _convertSetDesiredCapacity($request) {
        
        $parameters = array();
        $parameters['Action'] = 'SetDesiredCapacity';
        if ($request->isSetAutoScalingGroupName()) {
            $parameters['AutoScalingGroupName'] =  $request->getAutoScalingGroupName();
        }
        if ($request->isSetDesiredCapacity()) {
            $parameters['DesiredCapacity'] =  $request->getDesiredCapacity();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteAutoScalingGroupRequest to name value pairs
     */
    private function _convertDeleteAutoScalingGroup($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteAutoScalingGroup';
        if ($request->isSetAutoScalingGroupName()) {
            $parameters['AutoScalingGroupName'] =  $request->getAutoScalingGroupName();
        }

        return $parameters;
    }
        
                                                                        
}