<?php
require_once 'Zend/Auth/Adapter/Interface.php';

class Killersoft_Auth_Adapter_Rpx implements Zend_Auth_Adapter_Interface
{
    private $_api_key;
    private $_base_url;
    private $_token;
    
    public function __construct($api_key, $base_url)
    {
        $this->_base_url = rtrim($base_url, '/');
        $this->_api_key = $api_key;
    }
    
    public function setToken($token)
    {
        $this->_token = $token;
    }
    
    public function authenticate()
    {
        $token = $this->_token;
        echo "TOKEN: $token";
        if (! empty($token)) {
            $info = $this->_auth_info();
            if (! is_array($info)) {
                $ret = false;
                $msg = 'Authentication failed';
            } else {
                $ret = true;
                $msg = 'Authentication successful';
            }
        }
        return new Zend_Auth_Result($ret, $info, array($msg));
    }
    
    protected function _auth_info($current_url = null)
    {
        $args = array('token' => $this->_token, 'extended' => 'true');
        if ($current_url !== null) {
            $args['currentUrl'] = $current_url;
        }
        return $this->_apiCall('auth_info', $args);
    }
    
    protected function _apiCall($method_name, $args)
    {
        $args['format'] = 'json';
        $args['apiKey'] = $this->_api_key;
        
        $q = http_build_query($args);
        echo "post: $q";
        
        $ch = curl_init();
        
        $url = $this->_base_url . '/api/v2/' . $method_name;
        echo $url;
        
        $opts = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $q,
            CURLOPT_FRESH_CONNECT => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYPEER  => false,
            CURLOPT_SSL_VERIFYHOST  => false,            
        );
        curl_setopt_array($ch, $opts);
        
        $response = curl_exec($ch);
        var_dump($response);
        
        curl_close($ch);
        
        return json_decode($response, true);
    }
        
}