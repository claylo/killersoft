<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_FWSOutbound
 *  @copyright   Copyright 2007 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2007-08-02
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon FWS Outbound PHP5 Library
 *  Generated: Wed Mar 19 13:03:03 PDT 2008
 * 
 */

/**
 *  @see Amazon_FWSOutbound_Interface
 */
require_once ('Amazon/FWSOutbound/Interface.php'); 

/**
 * Amazon Web Service used to create and manage outbound shipments from
 * the Amazon Fulfillment Network.
 * 
 * Amazon_FWSOutbound_Client is an implementation of Amazon_FWSOutbound
 *
 */
class Amazon_FWSOutbound_Client implements Amazon_FWSOutbound_Interface
{

    const SERVICE_VERSION = '2007-08-02';

    /** @var string */
    private  $_awsAccessKeyId = null;
    
    /** @var string */
    private  $_awsSecretAccessKey = null;
    
    /** @var array */
    private  $_config = array ('ServiceURL' => 'https://fba-outbound.amazonaws.com', 
                               'UserAgent' => 'Amazon FWSOutbound PHP5 Library',
                               'SignatureVersion' => 1,
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
     * Get Service Status 
     * Gets a brief status message from the service.
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/GetServiceStatus.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_GetServiceStatus request or Amazon_FWSOutbound_Model_GetServiceStatus object itself
     * @see Amazon_FWSOutbound_Model_GetServiceStatus
     * @return Amazon_FWSOutbound_Model_GetServiceStatusResponse Amazon_FWSOutbound_Model_GetServiceStatusResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function getServiceStatus($request) 
    {
        if (!$request instanceof Amazon_FWSOutbound_Model_GetServiceStatus) {
            require_once ('Amazon/FWSOutbound/Model/GetServiceStatus.php');
            $request = new Amazon_FWSOutbound_Model_GetServiceStatus($request);
        }
        require_once ('Amazon/FWSOutbound/Model/GetServiceStatusResponse.php');
        return Amazon_FWSOutbound_Model_GetServiceStatusResponse::fromXML($this->_invoke($this->_convertGetServiceStatus($request)));
    }


            
    /**
     * Create Fulfillment Order 
     * Request for Amazon to send items from the merchant's inventory to a
     * destination address.
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/CreateFulfillmentOrder.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_CreateFulfillmentOrder request or Amazon_FWSOutbound_Model_CreateFulfillmentOrder object itself
     * @see Amazon_FWSOutbound_Model_CreateFulfillmentOrder
     * @return Amazon_FWSOutbound_Model_CreateFulfillmentOrderResponse Amazon_FWSOutbound_Model_CreateFulfillmentOrderResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function createFulfillmentOrder($request) 
    {
        if (!$request instanceof Amazon_FWSOutbound_Model_CreateFulfillmentOrder) {
            require_once ('Amazon/FWSOutbound/Model/CreateFulfillmentOrder.php');
            $request = new Amazon_FWSOutbound_Model_CreateFulfillmentOrder($request);
        }
        require_once ('Amazon/FWSOutbound/Model/CreateFulfillmentOrderResponse.php');
        return Amazon_FWSOutbound_Model_CreateFulfillmentOrderResponse::fromXML($this->_invoke($this->_convertCreateFulfillmentOrder($request)));
    }


            
    /**
     * Cancel Fulfillment Order 
     * Request for Amazon to no longer attempt to fulfill an existing
     * fulfillment order. Amazon will attempt to stop fulfillment of all
     * items that haven't already shipped, but cannot guarantee success.
     * Note: Items that have already shipped cannot be cancelled.
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/CancelFulfillmentOrder.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_CancelFulfillmentOrder request or Amazon_FWSOutbound_Model_CancelFulfillmentOrder object itself
     * @see Amazon_FWSOutbound_Model_CancelFulfillmentOrder
     * @return Amazon_FWSOutbound_Model_CancelFulfillmentOrderResponse Amazon_FWSOutbound_Model_CancelFulfillmentOrderResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function cancelFulfillmentOrder($request) 
    {
        if (!$request instanceof Amazon_FWSOutbound_Model_CancelFulfillmentOrder) {
            require_once ('Amazon/FWSOutbound/Model/CancelFulfillmentOrder.php');
            $request = new Amazon_FWSOutbound_Model_CancelFulfillmentOrder($request);
        }
        require_once ('Amazon/FWSOutbound/Model/CancelFulfillmentOrderResponse.php');
        return Amazon_FWSOutbound_Model_CancelFulfillmentOrderResponse::fromXML($this->_invoke($this->_convertCancelFulfillmentOrder($request)));
    }


            
    /**
     * Get Fulfillment Order 
     * Get detailed information about a FulfillmentOrder.  This includes the
     * original fulfillment order request, the status of the order and its
     * items in Amazon's fulfillment network, and the shipments that have been
     * generated to fulfill the order.
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/GetFulfillmentOrder.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_GetFulfillmentOrder request or Amazon_FWSOutbound_Model_GetFulfillmentOrder object itself
     * @see Amazon_FWSOutbound_Model_GetFulfillmentOrder
     * @return Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function getFulfillmentOrder($request) 
    {
        if (!$request instanceof Amazon_FWSOutbound_Model_GetFulfillmentOrder) {
            require_once ('Amazon/FWSOutbound/Model/GetFulfillmentOrder.php');
            $request = new Amazon_FWSOutbound_Model_GetFulfillmentOrder($request);
        }
        require_once ('Amazon/FWSOutbound/Model/GetFulfillmentOrderResponse.php');
        return Amazon_FWSOutbound_Model_GetFulfillmentOrderResponse::fromXML($this->_invoke($this->_convertGetFulfillmentOrder($request)));
    }


            
    /**
     * List All Fulfillment Orders 
     * Gets the first set of fulfillment orders that are currently being
     * fulfilled or that were being fulfilled at some time in the past
     * (as specified by the query parameters). Also returns a NextToken
     * which can be used iterate through the remaining fulfillment orders
     * (via the ListAllFulfillmentOrdersByNextToken operation).
     * The service will return between 0 and 'MaxCount' fulfillment orders.
     * Please check the value of 'HasNext' to determine whether there may be
     * additional fulfillment orders to list.
     * If the QueryStartDateTime is set, the results will include all orders
     * currently being fulfilled, and all orders that were being fulfilled
     * since that date and time. If it is not set, it defaults to 72 hours
     * prior to "now".
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/ListAllFulfillmentOrders.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_ListAllFulfillmentOrders request or Amazon_FWSOutbound_Model_ListAllFulfillmentOrders object itself
     * @see Amazon_FWSOutbound_Model_ListAllFulfillmentOrders
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function listAllFulfillmentOrders($request) 
    {
        if (!$request instanceof Amazon_FWSOutbound_Model_ListAllFulfillmentOrders) {
            require_once ('Amazon/FWSOutbound/Model/ListAllFulfillmentOrders.php');
            $request = new Amazon_FWSOutbound_Model_ListAllFulfillmentOrders($request);
        }
        require_once ('Amazon/FWSOutbound/Model/ListAllFulfillmentOrdersResponse.php');
        return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersResponse::fromXML($this->_invoke($this->_convertListAllFulfillmentOrders($request)));
    }


            
    /**
     * List All Fulfillment Orders By Next Token 
     * Gets the next set of fulfillment orders that are currently being
     * being fulfilled or that were being fulfilled at some time in the
     * past.
     * The service will return between 0 and 'MaxCount' fulfillment orders.
     * Please check the value of 'HasNext' to determine whether there may be
     * additional fulfillment orders to list.
     *   
     * @see http://docs.amazonwebservices.com/FWSOutbound/2007-08-02/DG/ListAllFulfillmentOrdersByNextToken.html      
     * @param mixed $request array of parameters for Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextToken request or Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextToken object itself
     * @see Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextToken
     * @return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextTokenResponse Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextTokenResponse
     *
     * @throws Amazon_FWSOutbound_Exception
     */
    public function listAllFulfillmentOrdersByNextToken($request) 
    {
        if (!$request instanceof Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextToken) {
            require_once ('Amazon/FWSOutbound/Model/ListAllFulfillmentOrdersByNextToken.php');
            $request = new Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextToken($request);
        }
        require_once ('Amazon/FWSOutbound/Model/ListAllFulfillmentOrdersByNextTokenResponse.php');
        return Amazon_FWSOutbound_Model_ListAllFulfillmentOrdersByNextTokenResponse::fromXML($this->_invoke($this->_convertListAllFulfillmentOrdersByNextToken($request)));
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
                    require_once ('Amazon/FWSOutbound/Exception.php');
                    if ($e instanceof Amazon_FWSOutbound_Exception) {
                        throw $e;
                    } else {
                        require_once ('Amazon/FWSOutbound/Exception.php');
                        throw new Amazon_FWSOutbound_Exception(array('Exception' => $e, 'Message' => $e->getMessage()));   
                    }
                }

            } while ($shouldRetry);

        } catch (Amazon_FWSOutbound_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Amazon_FWSOutbound_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
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

                require_once ('Amazon/FWSOutbound/Exception.php');
                $ex = new Amazon_FWSOutbound_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code, 
                                                           'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));

            } elseif (preg_match('@<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?.*<RequestID>(.*)</RequestID>@mi',
                $responseBody, $errorMatcherTwo)) {
                                
                $code = $errorMatcherTwo[1];  
                $message = $errorMatcherTwo[2];  
                $requestId = $errorMatcherTwo[4];   
                require_once ('Amazon/FWSOutbound/Exception.php');
                $ex = new Amazon_FWSOutbound_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code, 
                                                              'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));
            } elseif (preg_match('@<Error><Type>(.*)</Type><Code>(.*)</Code><Message>(.*)</Message>.*</Error>.*(<Error>)?.*<RequestId>(.*)</RequestId>@mi',
                $responseBody, $errorMatcherThree)) {
                
                $type = $errorMatcherTwo[1];
                $code = $errorMatcherTwo[2];  
                $message = $errorMatcherTwo[3];  
                $requestId = $errorMatcherTwo[5];   
                require_once ('Amazon/FWSOutbound/Exception.php');
                $ex = new Amazon_FWSOutbound_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code, 
                                                              'ErrorType' => $type, 'RequestId' => $requestId, 'XML' => $responseBody));
            
            } else {
                require_once ('Amazon/FWSOutbound/Exception.php');
                $ex = new Amazon_FWSOutbound_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
            }
        } else {
            require_once ('Amazon/FWSOutbound/Exception.php');
            $ex = new Amazon_FWSOutbound_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
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
        
        $port = $url['port'];
        $scheme = '';
        
        switch ($url['scheme']) {
            case 'https':
                $scheme = 'ssl://';
                $port = $port === null ? 443 : $port;
                break;
            default:
                $scheme = '';
                $port = 80;   
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
        return array ('Status' => (int)$code, 'ResponseBody' => $responseBody);
    }

    /**
     * Exponential sleep on failed request
     * @param retries current retry
     * @throws Amazon_FWSOutbound_Exception if maximum number of retries has been reached
     */
    private function _pauseOnRetry($retries, $status)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000) ;
            usleep($delay);
        } else {
            require_once ('Amazon/FWSOutbound/Exception.php');
            throw new Amazon_FWSOutbound_Exception (array ('Message' => "Maximum number of retry attempts reached :  $retries", 'StatusCode' => $status));
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
            $queryParameters[] = $key . '=' . urlencode($value);
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
      */
    private function _signParameters(array $parameters, $key)
    {
        $signatureVersion = $parameters['SignatureVersion'];
        $data = '';

        if (0 === $signatureVersion) {
            $data .=  $parameters['Action'] .  $parameters['Timestamp'];
        } elseif (1 === $signatureVersion) {
            uksort($parameters, 'strcasecmp');
            unset ($parameters['Signature']);
                
            foreach ($parameters as $parameterName => $parameterValue) {
                $data .= $parameterName . $parameterValue;
            }
        } else {
            throw new Exception("Invalid Signature Version specified");
        }
        return $this->_sign($data, $key);
    }


    /**
     * Computes RFC 2104-compliant HMAC signature.
     */
    private function _sign($data, $key)
    {
        return base64_encode (
            pack("H*", sha1((str_pad($key, 64, chr(0x00))
            ^(str_repeat(chr(0x5c), 64))) .
            pack("H*", sha1((str_pad($key, 64, chr(0x00))
            ^(str_repeat(chr(0x36), 64))) . $data))))
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
     * Convert GetServiceStatus to name value pairs
     */
    private function _convertGetServiceStatus($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetServiceStatus';

        return $parameters;
    }
        
                        
    /**
     * Convert CreateFulfillmentOrder to name value pairs
     */
    private function _convertCreateFulfillmentOrder($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateFulfillmentOrder';
        if ($request->isSetMerchantFulfillmentOrderId()) {
            $parameters['MerchantFulfillmentOrderId'] =  $request->getMerchantFulfillmentOrderId();
        }
        if ($request->isSetDisplayableOrderId()) {
            $parameters['DisplayableOrderId'] =  $request->getDisplayableOrderId();
        }
        if ($request->isSetDisplayableOrderDateTime()) {
            $parameters['DisplayableOrderDateTime'] =  $request->getDisplayableOrderDateTime();
        }
        if ($request->isSetDisplayableOrderComment()) {
            $parameters['DisplayableOrderComment'] =  $request->getDisplayableOrderComment();
        }
        if ($request->isSetShippingSpeedCategory()) {
            $parameters['ShippingSpeedCategory'] =  $request->getShippingSpeedCategory();
        }
        if ($request->isSetDestinationAddress()) {
            $destinationAddress = $request->getDestinationAddress();
            if ($destinationAddress->isSetName()) {
                $parameters['DestinationAddress' . '.' . 'Name'] =  $destinationAddress->getName();
            }
            if ($destinationAddress->isSetLine1()) {
                $parameters['DestinationAddress' . '.' . 'Line1'] =  $destinationAddress->getLine1();
            }
            if ($destinationAddress->isSetLine2()) {
                $parameters['DestinationAddress' . '.' . 'Line2'] =  $destinationAddress->getLine2();
            }
            if ($destinationAddress->isSetLine3()) {
                $parameters['DestinationAddress' . '.' . 'Line3'] =  $destinationAddress->getLine3();
            }
            if ($destinationAddress->isSetCity()) {
                $parameters['DestinationAddress' . '.' . 'City'] =  $destinationAddress->getCity();
            }
            if ($destinationAddress->isSetStateOrProvinceCode()) {
                $parameters['DestinationAddress' . '.' . 'StateOrProvinceCode'] =  $destinationAddress->getStateOrProvinceCode();
            }
            if ($destinationAddress->isSetCountryCode()) {
                $parameters['DestinationAddress' . '.' . 'CountryCode'] =  $destinationAddress->getCountryCode();
            }
            if ($destinationAddress->isSetPostalCode()) {
                $parameters['DestinationAddress' . '.' . 'PostalCode'] =  $destinationAddress->getPostalCode();
            }
            if ($destinationAddress->isSetPhoneNumber()) {
                $parameters['DestinationAddress' . '.' . 'PhoneNumber'] =  $destinationAddress->getPhoneNumber();
            }
        }
        foreach ($request->getItem() as $itemIndex => $item) {
            if ($item->isSetMerchantSKU()) {
                $parameters['Item' . '.'  . ($itemIndex + 1) . '.' . 'MerchantSKU'] =  $item->getMerchantSKU();
            }
            if ($item->isSetMerchantFulfillmentOrderItemId()) {
                $parameters['Item' . '.'  . ($itemIndex + 1) . '.' . 'MerchantFulfillmentOrderItemId'] =  $item->getMerchantFulfillmentOrderItemId();
            }
            if ($item->isSetQuantity()) {
                $parameters['Item' . '.'  . ($itemIndex + 1) . '.' . 'Quantity'] =  $item->getQuantity();
            }
            if ($item->isSetGiftMessage()) {
                $parameters['Item' . '.'  . ($itemIndex + 1) . '.' . 'GiftMessage'] =  $item->getGiftMessage();
            }
            if ($item->isSetDisplayableComment()) {
                $parameters['Item' . '.'  . ($itemIndex + 1) . '.' . 'DisplayableComment'] =  $item->getDisplayableComment();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert CancelFulfillmentOrder to name value pairs
     */
    private function _convertCancelFulfillmentOrder($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CancelFulfillmentOrder';
        if ($request->isSetMerchantFulfillmentOrderId()) {
            $parameters['MerchantFulfillmentOrderId'] =  $request->getMerchantFulfillmentOrderId();
        }

        return $parameters;
    }
        
                        
    /**
     * Convert GetFulfillmentOrder to name value pairs
     */
    private function _convertGetFulfillmentOrder($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetFulfillmentOrder';
        if ($request->isSetMerchantFulfillmentOrderId()) {
            $parameters['MerchantFulfillmentOrderId'] =  $request->getMerchantFulfillmentOrderId();
        }

        return $parameters;
    }
        
                        
    /**
     * Convert ListAllFulfillmentOrders to name value pairs
     */
    private function _convertListAllFulfillmentOrders($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListAllFulfillmentOrders';
        if ($request->isSetNumberOfResultsRequested()) {
            $parameters['NumberOfResultsRequested'] =  $request->getNumberOfResultsRequested();
        }
        if ($request->isSetQueryStartDateTime()) {
            $parameters['QueryStartDateTime'] =  $request->getQueryStartDateTime();
        }

        return $parameters;
    }
        
                        
    /**
     * Convert ListAllFulfillmentOrdersByNextToken to name value pairs
     */
    private function _convertListAllFulfillmentOrdersByNextToken($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListAllFulfillmentOrdersByNextToken';
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }
        
                                                                                                                                

}