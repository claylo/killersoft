<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_ElasticLoadBalancing
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
 *  Amazon Elastic Load Balancing PHP5 Library
 *  Generated: Sun May 17 01:27:31 PDT 2009
 * 
 */

/**
 *  @see Amazon_ElasticLoadBalancing_Interface
 */
require_once ('Amazon/ElasticLoadBalancing/Interface.php');

/**

 * Amazon_ElasticLoadBalancing_Client is an implementation of Amazon_ElasticLoadBalancing
 *
 */
class Amazon_ElasticLoadBalancing_Client implements Amazon_ElasticLoadBalancing_Interface
{

    const SERVICE_VERSION = '2009-05-15';

    /** @var string */
    private  $_awsAccessKeyId = null;

    /** @var string */
    private  $_awsSecretAccessKey = null;

    /** @var array */
    private  $_config = array ('ServiceURL' => 'https://elasticloadbalancing.amazonaws.com/',
                               'UserAgent' => 'Amazon ElasticLoadBalancing PHP5 Library',
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
     * Deregister Instances From Load Balancer 

     * @see http://docs.amazonwebservices.com/${docPath}DeregisterInstancesFromLoadBalancer.html
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function deregisterInstancesFromLoadBalancer($request)
    {
        if (!$request instanceof Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerRequest) {
            require_once ('Amazon/ElasticLoadBalancing/Model/DeregisterInstancesFromLoadBalancerRequest.php');
            $request = new Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerRequest($request);
        }
        require_once ('Amazon/ElasticLoadBalancing/Model/DeregisterInstancesFromLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_DeregisterInstancesFromLoadBalancerResponse::fromXML($this->_invoke($this->_convertDeregisterInstancesFromLoadBalancer($request)));
    }


        
    /**
     * Configure Health Check 

     * @see http://docs.amazonwebservices.com/${docPath}ConfigureHealthCheck.html
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckRequest request
     * or Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheck
     * @return Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function configureHealthCheck($request)
    {
        if (!$request instanceof Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckRequest) {
            require_once ('Amazon/ElasticLoadBalancing/Model/ConfigureHealthCheckRequest.php');
            $request = new Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckRequest($request);
        }
        require_once ('Amazon/ElasticLoadBalancing/Model/ConfigureHealthCheckResponse.php');
        return Amazon_ElasticLoadBalancing_Model_ConfigureHealthCheckResponse::fromXML($this->_invoke($this->_convertConfigureHealthCheck($request)));
    }


        
    /**
     * Delete Load Balancer 

     * @see http://docs.amazonwebservices.com/${docPath}DeleteLoadBalancer.html
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function deleteLoadBalancer($request)
    {
        if (!$request instanceof Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerRequest) {
            require_once ('Amazon/ElasticLoadBalancing/Model/DeleteLoadBalancerRequest.php');
            $request = new Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerRequest($request);
        }
        require_once ('Amazon/ElasticLoadBalancing/Model/DeleteLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_DeleteLoadBalancerResponse::fromXML($this->_invoke($this->_convertDeleteLoadBalancer($request)));
    }


        
    /**
     * Register Instances With Load Balancer 

     * @see http://docs.amazonwebservices.com/${docPath}RegisterInstancesWithLoadBalancer.html
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function registerInstancesWithLoadBalancer($request)
    {
        if (!$request instanceof Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest) {
            require_once ('Amazon/ElasticLoadBalancing/Model/RegisterInstancesWithLoadBalancerRequest.php');
            $request = new Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerRequest($request);
        }
        require_once ('Amazon/ElasticLoadBalancing/Model/RegisterInstancesWithLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_RegisterInstancesWithLoadBalancerResponse::fromXML($this->_invoke($this->_convertRegisterInstancesWithLoadBalancer($request)));
    }


        
    /**
     * Create Load Balancer 

     * @see http://docs.amazonwebservices.com/${docPath}CreateLoadBalancer.html
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_CreateLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function createLoadBalancer($request)
    {
        if (!$request instanceof Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest) {
            require_once ('Amazon/ElasticLoadBalancing/Model/CreateLoadBalancerRequest.php');
            $request = new Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerRequest($request);
        }
        require_once ('Amazon/ElasticLoadBalancing/Model/CreateLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_CreateLoadBalancerResponse::fromXML($this->_invoke($this->_convertCreateLoadBalancer($request)));
    }


        
    /**
     * Enable Availability Zones For Load Balancer 

     * @see http://docs.amazonwebservices.com/${docPath}EnableAvailabilityZonesForLoadBalancer.html
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function enableAvailabilityZonesForLoadBalancer($request)
    {
        if (!$request instanceof Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerRequest) {
            require_once ('Amazon/ElasticLoadBalancing/Model/EnableAvailabilityZonesForLoadBalancerRequest.php');
            $request = new Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerRequest($request);
        }
        require_once ('Amazon/ElasticLoadBalancing/Model/EnableAvailabilityZonesForLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_EnableAvailabilityZonesForLoadBalancerResponse::fromXML($this->_invoke($this->_convertEnableAvailabilityZonesForLoadBalancer($request)));
    }


        
    /**
     * Disable Availability Zones For Load Balancer 

     * @see http://docs.amazonwebservices.com/${docPath}DisableAvailabilityZonesForLoadBalancer.html
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerRequest request
     * or Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancer
     * @return Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResponse Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function disableAvailabilityZonesForLoadBalancer($request)
    {
        if (!$request instanceof Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerRequest) {
            require_once ('Amazon/ElasticLoadBalancing/Model/DisableAvailabilityZonesForLoadBalancerRequest.php');
            $request = new Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerRequest($request);
        }
        require_once ('Amazon/ElasticLoadBalancing/Model/DisableAvailabilityZonesForLoadBalancerResponse.php');
        return Amazon_ElasticLoadBalancing_Model_DisableAvailabilityZonesForLoadBalancerResponse::fromXML($this->_invoke($this->_convertDisableAvailabilityZonesForLoadBalancer($request)));
    }


        
    /**
     * Describe Instance Health 

     * @see http://docs.amazonwebservices.com/${docPath}DescribeInstanceHealth.html
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthRequest request
     * or Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealth
     * @return Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResponse Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function describeInstanceHealth($request)
    {
        if (!$request instanceof Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthRequest) {
            require_once ('Amazon/ElasticLoadBalancing/Model/DescribeInstanceHealthRequest.php');
            $request = new Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthRequest($request);
        }
        require_once ('Amazon/ElasticLoadBalancing/Model/DescribeInstanceHealthResponse.php');
        return Amazon_ElasticLoadBalancing_Model_DescribeInstanceHealthResponse::fromXML($this->_invoke($this->_convertDescribeInstanceHealth($request)));
    }


        
    /**
     * Describe Load Balancers 

     * @see http://docs.amazonwebservices.com/${docPath}DescribeLoadBalancers.html
     * @param mixed $request array of parameters for Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersRequest request
     * or Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersRequest object itself
     * @see Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancers
     * @return Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResponse Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResponse
     *
     * @throws Amazon_ElasticLoadBalancing_Exception
     */
    public function describeLoadBalancers($request)
    {
        if (!$request instanceof Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersRequest) {
            require_once ('Amazon/ElasticLoadBalancing/Model/DescribeLoadBalancersRequest.php');
            $request = new Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersRequest($request);
        }
        require_once ('Amazon/ElasticLoadBalancing/Model/DescribeLoadBalancersResponse.php');
        return Amazon_ElasticLoadBalancing_Model_DescribeLoadBalancersResponse::fromXML($this->_invoke($this->_convertDescribeLoadBalancers($request)));
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
                    require_once ('Amazon/ElasticLoadBalancing/Exception.php');
                    if ($e instanceof Amazon_ElasticLoadBalancing_Exception) {
                        throw $e;
                    } else {
                        require_once ('Amazon/ElasticLoadBalancing/Exception.php');
                        throw new Amazon_ElasticLoadBalancing_Exception(array('Exception' => $e, 'Message' => $e->getMessage()));
                    }
                }

            } while ($shouldRetry);

        } catch (Amazon_ElasticLoadBalancing_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Amazon_ElasticLoadBalancing_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
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

                require_once ('Amazon/ElasticLoadBalancing/Exception.php');
                $ex = new Amazon_ElasticLoadBalancing_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                           'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));

            } elseif (preg_match('@<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?.*<RequestID>(.*)</RequestID>@mi',
                $responseBody, $errorMatcherTwo)) {

                $code = $errorMatcherTwo[1];
                $message = $errorMatcherTwo[2];
                $requestId = $errorMatcherTwo[4];
                require_once ('Amazon/ElasticLoadBalancing/Exception.php');
                $ex = new Amazon_ElasticLoadBalancing_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));
            } elseif (preg_match('@<Error><Type>(.*)</Type><Code>(.*)</Code><Message>(.*)</Message>.*</Error>.*(<Error>)?.*<RequestId>(.*)</RequestId>@mi',
                $responseBody, $errorMatcherThree)) {

                $type = $errorMatcherThree[1];
                $code = $errorMatcherThree[2];
                $message = $errorMatcherThree[3];
                $requestId = $errorMatcherThree[5];
                require_once ('Amazon/ElasticLoadBalancing/Exception.php');
                $ex = new Amazon_ElasticLoadBalancing_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => $type, 'RequestId' => $requestId, 'XML' => $responseBody));

            } else {
                require_once ('Amazon/ElasticLoadBalancing/Exception.php');
                $ex = new Amazon_ElasticLoadBalancing_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
            }
        } else {
            require_once ('Amazon/ElasticLoadBalancing/Exception.php');
            $ex = new Amazon_ElasticLoadBalancing_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
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
            $xslTemplate->loadXML(file_get_contents('Amazon/ElasticLoadBalancing/Model/' . 'ResponseTransformer.xslt', /** search include path */ TRUE));
            $xsltProcessor->importStylesheet($xslTemplate);
            $responseBody = $xsltProcessor->transformToXML($responseDoc);
        }



        return array ('Status' => (int)$code, 'ResponseBody' => $responseBody);
    }

    /**
     * Exponential sleep on failed request
     * @param retries current retry
     * @throws Amazon_ElasticLoadBalancing_Exception if maximum number of retries has been reached
     */
    private function _pauseOnRetry($retries, $status)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000) ;
            usleep($delay);
        } else {
            require_once ('Amazon/ElasticLoadBalancing/Exception.php');
            throw new Amazon_ElasticLoadBalancing_Exception (array ('Message' => "Maximum number of retry attempts reached :  $retries", 'StatusCode' => $status));
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
     * Convert DeregisterInstancesFromLoadBalancerRequest to name value pairs
     */
    private function _convertDeregisterInstancesFromLoadBalancer($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeregisterInstancesFromLoadBalancer';
        if ($request->isSetLoadBalancerName()) {
            $parameters['LoadBalancerName'] =  $request->getLoadBalancerName();
        }
        foreach ($request->getInstances() as $instancesderegisterInstancesFromLoadBalancerRequestIndex => $instancesderegisterInstancesFromLoadBalancerRequest) {
            if ($instancesderegisterInstancesFromLoadBalancerRequest->isSetInstanceId()) {
                $parameters['Instances' . '.member.'  . ($instancesderegisterInstancesFromLoadBalancerRequestIndex + 1) . '.' . 'InstanceId'] =  $instancesderegisterInstancesFromLoadBalancerRequest->getInstanceId();
            }

        }

        return $parameters;
    }
        
                                                
    /**
     * Convert ConfigureHealthCheckRequest to name value pairs
     */
    private function _convertConfigureHealthCheck($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ConfigureHealthCheck';
        if ($request->isSetLoadBalancerName()) {
            $parameters['LoadBalancerName'] =  $request->getLoadBalancerName();
        }
        if ($request->isSetHealthCheck()) {
            $healthCheckconfigureHealthCheckRequest = $request->getHealthCheck();
            if ($healthCheckconfigureHealthCheckRequest->isSetTarget()) {
                $parameters['HealthCheck' . '.' . 'Target'] =  $healthCheckconfigureHealthCheckRequest->getTarget();
            }
            if ($healthCheckconfigureHealthCheckRequest->isSetInterval()) {
                $parameters['HealthCheck' . '.' . 'Interval'] =  $healthCheckconfigureHealthCheckRequest->getInterval();
            }
            if ($healthCheckconfigureHealthCheckRequest->isSetTimeout()) {
                $parameters['HealthCheck' . '.' . 'Timeout'] =  $healthCheckconfigureHealthCheckRequest->getTimeout();
            }
            if ($healthCheckconfigureHealthCheckRequest->isSetUnhealthyThreshold()) {
                $parameters['HealthCheck' . '.' . 'UnhealthyThreshold'] =  $healthCheckconfigureHealthCheckRequest->getUnhealthyThreshold();
            }
            if ($healthCheckconfigureHealthCheckRequest->isSetHealthyThreshold()) {
                $parameters['HealthCheck' . '.' . 'HealthyThreshold'] =  $healthCheckconfigureHealthCheckRequest->getHealthyThreshold();
            }
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert DeleteLoadBalancerRequest to name value pairs
     */
    private function _convertDeleteLoadBalancer($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteLoadBalancer';
        if ($request->isSetLoadBalancerName()) {
            $parameters['LoadBalancerName'] =  $request->getLoadBalancerName();
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert RegisterInstancesWithLoadBalancerRequest to name value pairs
     */
    private function _convertRegisterInstancesWithLoadBalancer($request) {
        
        $parameters = array();
        $parameters['Action'] = 'RegisterInstancesWithLoadBalancer';
        if ($request->isSetLoadBalancerName()) {
            $parameters['LoadBalancerName'] =  $request->getLoadBalancerName();
        }
        foreach ($request->getInstances() as $instancesregisterInstancesWithLoadBalancerRequestIndex => $instancesregisterInstancesWithLoadBalancerRequest) {
            if ($instancesregisterInstancesWithLoadBalancerRequest->isSetInstanceId()) {
                $parameters['Instances' . '.member.'  . ($instancesregisterInstancesWithLoadBalancerRequestIndex + 1) . '.' . 'InstanceId'] =  $instancesregisterInstancesWithLoadBalancerRequest->getInstanceId();
            }

        }

        return $parameters;
    }
        
                                                
    /**
     * Convert CreateLoadBalancerRequest to name value pairs
     */
    private function _convertCreateLoadBalancer($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateLoadBalancer';
        if ($request->isSetLoadBalancerName()) {
            $parameters['LoadBalancerName'] =  $request->getLoadBalancerName();
        }
        foreach ($request->getListeners() as $listenerscreateLoadBalancerRequestIndex => $listenerscreateLoadBalancerRequest) {
            if ($listenerscreateLoadBalancerRequest->isSetProtocol()) {
                $parameters['Listeners' . '.member.'  . ($listenerscreateLoadBalancerRequestIndex + 1) . '.' . 'Protocol'] =  $listenerscreateLoadBalancerRequest->getProtocol();
            }
            if ($listenerscreateLoadBalancerRequest->isSetLoadBalancerPort()) {
                $parameters['Listeners' . '.member.'  . ($listenerscreateLoadBalancerRequestIndex + 1) . '.' . 'LoadBalancerPort'] =  $listenerscreateLoadBalancerRequest->getLoadBalancerPort();
            }
            if ($listenerscreateLoadBalancerRequest->isSetInstancePort()) {
                $parameters['Listeners' . '.member.'  . ($listenerscreateLoadBalancerRequestIndex + 1) . '.' . 'InstancePort'] =  $listenerscreateLoadBalancerRequest->getInstancePort();
            }

        }
        foreach  ($request->getAvailabilityZones() as $availabilityZonescreateLoadBalancerRequestIndex => $availabilityZonescreateLoadBalancerRequest) {
            $parameters['AvailabilityZones' . '.member.'  . ($availabilityZonescreateLoadBalancerRequestIndex + 1)] =  $availabilityZonescreateLoadBalancerRequest;
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert EnableAvailabilityZonesForLoadBalancerRequest to name value pairs
     */
    private function _convertEnableAvailabilityZonesForLoadBalancer($request) {
        
        $parameters = array();
        $parameters['Action'] = 'EnableAvailabilityZonesForLoadBalancer';
        if ($request->isSetLoadBalancerName()) {
            $parameters['LoadBalancerName'] =  $request->getLoadBalancerName();
        }
        foreach  ($request->getAvailabilityZones() as $availabilityZonesenableAvailabilityZonesForLoadBalancerRequestIndex => $availabilityZonesenableAvailabilityZonesForLoadBalancerRequest) {
            $parameters['AvailabilityZones' . '.member.'  . ($availabilityZonesenableAvailabilityZonesForLoadBalancerRequestIndex + 1)] =  $availabilityZonesenableAvailabilityZonesForLoadBalancerRequest;
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert DisableAvailabilityZonesForLoadBalancerRequest to name value pairs
     */
    private function _convertDisableAvailabilityZonesForLoadBalancer($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DisableAvailabilityZonesForLoadBalancer';
        if ($request->isSetLoadBalancerName()) {
            $parameters['LoadBalancerName'] =  $request->getLoadBalancerName();
        }
        foreach  ($request->getAvailabilityZones() as $availabilityZonesdisableAvailabilityZonesForLoadBalancerRequestIndex => $availabilityZonesdisableAvailabilityZonesForLoadBalancerRequest) {
            $parameters['AvailabilityZones' . '.member.'  . ($availabilityZonesdisableAvailabilityZonesForLoadBalancerRequestIndex + 1)] =  $availabilityZonesdisableAvailabilityZonesForLoadBalancerRequest;
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert DescribeInstanceHealthRequest to name value pairs
     */
    private function _convertDescribeInstanceHealth($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeInstanceHealth';
        if ($request->isSetLoadBalancerName()) {
            $parameters['LoadBalancerName'] =  $request->getLoadBalancerName();
        }
        foreach ($request->getInstances() as $instancesdescribeInstanceHealthRequestIndex => $instancesdescribeInstanceHealthRequest) {
            if ($instancesdescribeInstanceHealthRequest->isSetInstanceId()) {
                $parameters['Instances' . '.member.'  . ($instancesdescribeInstanceHealthRequestIndex + 1) . '.' . 'InstanceId'] =  $instancesdescribeInstanceHealthRequest->getInstanceId();
            }

        }

        return $parameters;
    }
        
                                                
    /**
     * Convert DescribeLoadBalancersRequest to name value pairs
     */
    private function _convertDescribeLoadBalancers($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeLoadBalancers';
        foreach  ($request->getLoadBalancerNames() as $loadBalancerNamesdescribeLoadBalancersRequestIndex => $loadBalancerNamesdescribeLoadBalancersRequest) {
            $parameters['LoadBalancerNames' . '.member.'  . ($loadBalancerNamesdescribeLoadBalancersRequestIndex + 1)] =  $loadBalancerNamesdescribeLoadBalancersRequest;
        }

        return $parameters;
    }
        
                                                                
}