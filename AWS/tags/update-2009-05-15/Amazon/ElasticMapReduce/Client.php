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
 *  @see Amazon_ElasticMapReduce_Interface
 */
require_once ('Amazon/ElasticMapReduce/Interface.php');

/**

 * Amazon_ElasticMapReduce_Client is an implementation of Amazon_ElasticMapReduce
 *
 */
class Amazon_ElasticMapReduce_Client implements Amazon_ElasticMapReduce_Interface
{

    const SERVICE_VERSION = '2009-03-31';

    /** @var string */
    private  $_awsAccessKeyId = null;

    /** @var string */
    private  $_awsSecretAccessKey = null;

    /** @var array */
    private  $_config = array ('ServiceURL' => 'https://elasticmapreduce.amazonaws.com/',
                               'UserAgent' => 'Amazon ElasticMapReduce PHP5 Library',
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
     * Add Job Flow Steps 

     * @see http://docs.amazonwebservices.com/${docPath}AddJobFlowSteps.html
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest request
     * or Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest object itself
     * @see Amazon_ElasticMapReduce_Model_AddJobFlowSteps
     * @return Amazon_ElasticMapReduce_Model_AddJobFlowStepsResponse Amazon_ElasticMapReduce_Model_AddJobFlowStepsResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function addJobFlowSteps($request)
    {
        if (!$request instanceof Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest) {
            require_once ('Amazon/ElasticMapReduce/Model/AddJobFlowStepsRequest.php');
            $request = new Amazon_ElasticMapReduce_Model_AddJobFlowStepsRequest($request);
        }
        require_once ('Amazon/ElasticMapReduce/Model/AddJobFlowStepsResponse.php');
        return Amazon_ElasticMapReduce_Model_AddJobFlowStepsResponse::fromXML($this->_invoke($this->_convertAddJobFlowSteps($request)));
    }


        
    /**
     * Terminate Job Flows 

     * @see http://docs.amazonwebservices.com/${docPath}TerminateJobFlows.html
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_TerminateJobFlowsRequest request
     * or Amazon_ElasticMapReduce_Model_TerminateJobFlowsRequest object itself
     * @see Amazon_ElasticMapReduce_Model_TerminateJobFlows
     * @return Amazon_ElasticMapReduce_Model_TerminateJobFlowsResponse Amazon_ElasticMapReduce_Model_TerminateJobFlowsResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function terminateJobFlows($request)
    {
        if (!$request instanceof Amazon_ElasticMapReduce_Model_TerminateJobFlowsRequest) {
            require_once ('Amazon/ElasticMapReduce/Model/TerminateJobFlowsRequest.php');
            $request = new Amazon_ElasticMapReduce_Model_TerminateJobFlowsRequest($request);
        }
        require_once ('Amazon/ElasticMapReduce/Model/TerminateJobFlowsResponse.php');
        return Amazon_ElasticMapReduce_Model_TerminateJobFlowsResponse::fromXML($this->_invoke($this->_convertTerminateJobFlows($request)));
    }


        
    /**
     * Describe Job Flows 

     * @see http://docs.amazonwebservices.com/${docPath}DescribeJobFlows.html
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest request
     * or Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest object itself
     * @see Amazon_ElasticMapReduce_Model_DescribeJobFlows
     * @return Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function describeJobFlows($request)
    {
        if (!$request instanceof Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest) {
            require_once ('Amazon/ElasticMapReduce/Model/DescribeJobFlowsRequest.php');
            $request = new Amazon_ElasticMapReduce_Model_DescribeJobFlowsRequest($request);
        }
        require_once ('Amazon/ElasticMapReduce/Model/DescribeJobFlowsResponse.php');
        return Amazon_ElasticMapReduce_Model_DescribeJobFlowsResponse::fromXML($this->_invoke($this->_convertDescribeJobFlows($request)));
    }


        
    /**
     * Run Job Flow 

     * @see http://docs.amazonwebservices.com/${docPath}RunJobFlow.html
     * @param mixed $request array of parameters for Amazon_ElasticMapReduce_Model_RunJobFlowRequest request
     * or Amazon_ElasticMapReduce_Model_RunJobFlowRequest object itself
     * @see Amazon_ElasticMapReduce_Model_RunJobFlow
     * @return Amazon_ElasticMapReduce_Model_RunJobFlowResponse Amazon_ElasticMapReduce_Model_RunJobFlowResponse
     *
     * @throws Amazon_ElasticMapReduce_Exception
     */
    public function runJobFlow($request)
    {
        if (!$request instanceof Amazon_ElasticMapReduce_Model_RunJobFlowRequest) {
            require_once ('Amazon/ElasticMapReduce/Model/RunJobFlowRequest.php');
            $request = new Amazon_ElasticMapReduce_Model_RunJobFlowRequest($request);
        }
        require_once ('Amazon/ElasticMapReduce/Model/RunJobFlowResponse.php');
        return Amazon_ElasticMapReduce_Model_RunJobFlowResponse::fromXML($this->_invoke($this->_convertRunJobFlow($request)));
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
                    require_once ('Amazon/ElasticMapReduce/Exception.php');
                    if ($e instanceof Amazon_ElasticMapReduce_Exception) {
                        throw $e;
                    } else {
                        require_once ('Amazon/ElasticMapReduce/Exception.php');
                        throw new Amazon_ElasticMapReduce_Exception(array('Exception' => $e, 'Message' => $e->getMessage()));
                    }
                }

            } while ($shouldRetry);

        } catch (Amazon_ElasticMapReduce_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Amazon_ElasticMapReduce_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
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

                require_once ('Amazon/ElasticMapReduce/Exception.php');
                $ex = new Amazon_ElasticMapReduce_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                           'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));

            } elseif (preg_match('@<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?.*<RequestID>(.*)</RequestID>@mi',
                $responseBody, $errorMatcherTwo)) {

                $code = $errorMatcherTwo[1];
                $message = $errorMatcherTwo[2];
                $requestId = $errorMatcherTwo[4];
                require_once ('Amazon/ElasticMapReduce/Exception.php');
                $ex = new Amazon_ElasticMapReduce_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));
            } elseif (preg_match('@<Error><Type>(.*)</Type><Code>(.*)</Code><Message>(.*)</Message>.*</Error>.*(<Error>)?.*<RequestId>(.*)</RequestId>@mi',
                $responseBody, $errorMatcherThree)) {

                $type = $errorMatcherThree[1];
                $code = $errorMatcherThree[2];
                $message = $errorMatcherThree[3];
                $requestId = $errorMatcherThree[5];
                require_once ('Amazon/ElasticMapReduce/Exception.php');
                $ex = new Amazon_ElasticMapReduce_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => $type, 'RequestId' => $requestId, 'XML' => $responseBody));

            } else {
                require_once ('Amazon/ElasticMapReduce/Exception.php');
                $ex = new Amazon_ElasticMapReduce_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
            }
        } else {
            require_once ('Amazon/ElasticMapReduce/Exception.php');
            $ex = new Amazon_ElasticMapReduce_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
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
            $xslTemplate->loadXML(file_get_contents('Amazon/ElasticMapReduce/Model/' . 'ResponseTransformer.xslt', /** search include path */ TRUE));
            $xsltProcessor->importStylesheet($xslTemplate);
            $responseBody = $xsltProcessor->transformToXML($responseDoc);
        }



        return array ('Status' => (int)$code, 'ResponseBody' => $responseBody);
    }

    /**
     * Exponential sleep on failed request
     * @param retries current retry
     * @throws Amazon_ElasticMapReduce_Exception if maximum number of retries has been reached
     */
    private function _pauseOnRetry($retries, $status)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000) ;
            usleep($delay);
        } else {
            require_once ('Amazon/ElasticMapReduce/Exception.php');
            throw new Amazon_ElasticMapReduce_Exception (array ('Message' => "Maximum number of retry attempts reached :  $retries", 'StatusCode' => $status));
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
     * Convert AddJobFlowStepsRequest to name value pairs
     */
    private function _convertAddJobFlowSteps($request) {
        
        $parameters = array();
        $parameters['Action'] = 'AddJobFlowSteps';
        if ($request->isSetJobFlowId()) {
            $parameters['JobFlowId'] =  $request->getJobFlowId();
        }
        foreach ($request->getSteps() as $stepsaddJobFlowStepsRequestIndex => $stepsaddJobFlowStepsRequest) {
            if ($stepsaddJobFlowStepsRequest->isSetName()) {
                $parameters['Steps' . '.member.'  . ($stepsaddJobFlowStepsRequestIndex + 1) . '.' . 'Name'] =  $stepsaddJobFlowStepsRequest->getName();
            }
            if ($stepsaddJobFlowStepsRequest->isSetActionOnFailure()) {
                $parameters['Steps' . '.member.'  . ($stepsaddJobFlowStepsRequestIndex + 1) . '.' . 'ActionOnFailure'] =  $stepsaddJobFlowStepsRequest->getActionOnFailure();
            }
            if ($stepsaddJobFlowStepsRequest->isSetHadoopJarStep()) {
                $hadoopJarStepsteps = $stepsaddJobFlowStepsRequest->getHadoopJarStep();
                foreach ($hadoopJarStepsteps->getProperties() as $propertieshadoopJarStepIndex => $propertieshadoopJarStep) {
                    if ($propertieshadoopJarStep->isSetKey()) {
                        $parameters['Steps' . '.member.'  . ($stepsaddJobFlowStepsRequestIndex + 1) . '.' . 'HadoopJarStep' . '.' . 'Properties' . '.member.'  . ($propertieshadoopJarStepIndex + 1) . '.' . 'Key'] =  $propertieshadoopJarStep->getKey();
                    }
                    if ($propertieshadoopJarStep->isSetValue()) {
                        $parameters['Steps' . '.member.'  . ($stepsaddJobFlowStepsRequestIndex + 1) . '.' . 'HadoopJarStep' . '.' . 'Properties' . '.member.'  . ($propertieshadoopJarStepIndex + 1) . '.' . 'Value'] =  $propertieshadoopJarStep->getValue();
                    }

                }
                if ($hadoopJarStepsteps->isSetJar()) {
                    $parameters['Steps' . '.member.'  . ($stepsaddJobFlowStepsRequestIndex + 1) . '.' . 'HadoopJarStep' . '.' . 'Jar'] =  $hadoopJarStepsteps->getJar();
                }
                if ($hadoopJarStepsteps->isSetMainClass()) {
                    $parameters['Steps' . '.member.'  . ($stepsaddJobFlowStepsRequestIndex + 1) . '.' . 'HadoopJarStep' . '.' . 'MainClass'] =  $hadoopJarStepsteps->getMainClass();
                }
                foreach  ($hadoopJarStepsteps->getArgs() as $argshadoopJarStepIndex => $argshadoopJarStep) {
                    $parameters['Steps' . '.member.'  . ($stepsIndex + 1) . '.' . 'HadoopJarStep' . '.' . 'Args' . '.member.'  . ($argshadoopJarStepIndex + 1)] =  $argshadoopJarStep;
                }
            }

        }

        return $parameters;
    }
        
                                        
    /**
     * Convert TerminateJobFlowsRequest to name value pairs
     */
    private function _convertTerminateJobFlows($request) {
        
        $parameters = array();
        $parameters['Action'] = 'TerminateJobFlows';
        foreach  ($request->getJobFlowIds() as $jobFlowIdsterminateJobFlowsRequestIndex => $jobFlowIdsterminateJobFlowsRequest) {
            $parameters['JobFlowIds' . '.member.'  . ($jobFlowIdsterminateJobFlowsRequestIndex + 1)] =  $jobFlowIdsterminateJobFlowsRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeJobFlowsRequest to name value pairs
     */
    private function _convertDescribeJobFlows($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeJobFlows';
        if ($request->isSetCreatedAfter()) {
            $parameters['CreatedAfter'] =  $request->getCreatedAfter();
        }
        if ($request->isSetCreatedBefore()) {
            $parameters['CreatedBefore'] =  $request->getCreatedBefore();
        }
        foreach  ($request->getJobFlowIds() as $jobFlowIdsdescribeJobFlowsRequestIndex => $jobFlowIdsdescribeJobFlowsRequest) {
            $parameters['JobFlowIds' . '.member.'  . ($jobFlowIdsdescribeJobFlowsRequestIndex + 1)] =  $jobFlowIdsdescribeJobFlowsRequest;
        }
        foreach  ($request->getJobFlowStates() as $jobFlowStatesdescribeJobFlowsRequestIndex => $jobFlowStatesdescribeJobFlowsRequest) {
            $parameters['JobFlowStates' . '.member.'  . ($jobFlowStatesdescribeJobFlowsRequestIndex + 1)] =  $jobFlowStatesdescribeJobFlowsRequest;
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert RunJobFlowRequest to name value pairs
     */
    private function _convertRunJobFlow($request) {
        
        $parameters = array();
        $parameters['Action'] = 'RunJobFlow';
        if ($request->isSetName()) {
            $parameters['Name'] =  $request->getName();
        }
        if ($request->isSetLogUri()) {
            $parameters['LogUri'] =  $request->getLogUri();
        }
        if ($request->isSetInstances()) {
            $instancesrunJobFlowRequest = $request->getInstances();
            if ($instancesrunJobFlowRequest->isSetMasterInstanceType()) {
                $parameters['Instances' . '.' . 'MasterInstanceType'] =  $instancesrunJobFlowRequest->getMasterInstanceType();
            }
            if ($instancesrunJobFlowRequest->isSetSlaveInstanceType()) {
                $parameters['Instances' . '.' . 'SlaveInstanceType'] =  $instancesrunJobFlowRequest->getSlaveInstanceType();
            }
            if ($instancesrunJobFlowRequest->isSetInstanceCount()) {
                $parameters['Instances' . '.' . 'InstanceCount'] =  $instancesrunJobFlowRequest->getInstanceCount();
            }
            if ($instancesrunJobFlowRequest->isSetEc2KeyName()) {
                $parameters['Instances' . '.' . 'Ec2KeyName'] =  $instancesrunJobFlowRequest->getEc2KeyName();
            }
            if ($instancesrunJobFlowRequest->isSetPlacement()) {
                $placementinstances = $instancesrunJobFlowRequest->getPlacement();
                if ($placementinstances->isSetAvailabilityZone()) {
                    $parameters['Instances' . '.' . 'Placement' . '.' . 'AvailabilityZone'] =  $placementinstances->getAvailabilityZone();
                }
            }
            if ($instancesrunJobFlowRequest->isSetKeepJobFlowAliveWhenNoSteps()) {
                $parameters['Instances' . '.' . 'KeepJobFlowAliveWhenNoSteps'] =  $instancesrunJobFlowRequest->getKeepJobFlowAliveWhenNoSteps() ? "true" : "false";
            }
        }
        foreach ($request->getSteps() as $stepsrunJobFlowRequestIndex => $stepsrunJobFlowRequest) {
            if ($stepsrunJobFlowRequest->isSetName()) {
                $parameters['Steps' . '.member.'  . ($stepsrunJobFlowRequestIndex + 1) . '.' . 'Name'] =  $stepsrunJobFlowRequest->getName();
            }
            if ($stepsrunJobFlowRequest->isSetActionOnFailure()) {
                $parameters['Steps' . '.member.'  . ($stepsrunJobFlowRequestIndex + 1) . '.' . 'ActionOnFailure'] =  $stepsrunJobFlowRequest->getActionOnFailure();
            }
            if ($stepsrunJobFlowRequest->isSetHadoopJarStep()) {
                $hadoopJarStepsteps = $stepsrunJobFlowRequest->getHadoopJarStep();
                foreach ($hadoopJarStepsteps->getProperties() as $propertieshadoopJarStepIndex => $propertieshadoopJarStep) {
                    if ($propertieshadoopJarStep->isSetKey()) {
                        $parameters['Steps' . '.member.'  . ($stepsrunJobFlowRequestIndex + 1) . '.' . 'HadoopJarStep' . '.' . 'Properties' . '.member.'  . ($propertieshadoopJarStepIndex + 1) . '.' . 'Key'] =  $propertieshadoopJarStep->getKey();
                    }
                    if ($propertieshadoopJarStep->isSetValue()) {
                        $parameters['Steps' . '.member.'  . ($stepsrunJobFlowRequestIndex + 1) . '.' . 'HadoopJarStep' . '.' . 'Properties' . '.member.'  . ($propertieshadoopJarStepIndex + 1) . '.' . 'Value'] =  $propertieshadoopJarStep->getValue();
                    }

                }
                if ($hadoopJarStepsteps->isSetJar()) {
                    $parameters['Steps' . '.member.'  . ($stepsrunJobFlowRequestIndex + 1) . '.' . 'HadoopJarStep' . '.' . 'Jar'] =  $hadoopJarStepsteps->getJar();
                }
                if ($hadoopJarStepsteps->isSetMainClass()) {
                    $parameters['Steps' . '.member.'  . ($stepsrunJobFlowRequestIndex + 1) . '.' . 'HadoopJarStep' . '.' . 'MainClass'] =  $hadoopJarStepsteps->getMainClass();
                }
                foreach  ($hadoopJarStepsteps->getArgs() as $argshadoopJarStepIndex => $argshadoopJarStep) {
                    $parameters['Steps' . '.member.'  . ($stepsIndex + 1) . '.' . 'HadoopJarStep' . '.' . 'Args' . '.member.'  . ($argshadoopJarStepIndex + 1)] =  $argshadoopJarStep;
                }
            }

        }

        return $parameters;
    }
        
                                                                                                        
}