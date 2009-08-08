<?php

require_once 'Zend/Auth/Adapter/Interface.php';

class Killersoft_Auth_Adapter_Twitter implements Zend_Auth_Adapter_Interface
{
    
    /**
     * The identity value being authenticated
     *
     * @var string
     */
    protected $_id = null;

    /**
     * Reference to an implementation of a storage object
     *
     * @var Zend_OpenId_Consumer_Storage
     */
    protected $_storage = null;

    /**
     * The URL to redirect response from server to
     *
     * @var string
     */
    protected $_returnTo = null;

    /**
     * The HTTP URL to identify consumer on server
     *
     * @var string
     */
    protected $_root = null;

    /**
     * Extension object or array of extensions objects
     *
     * @var string
     */
    protected $_extensions = null;

    /**
     * The response object to perform HTTP or HTML form redirection
     *
     * @var Zend_Controller_Response_Abstract
     */
    protected $_response = null;

    /**
     * Enables or disables interaction with user during authentication on
     * OpenID provider.
     *
     * @var bool
     */
    protected $_check_immediate = false;

    /**
     * HTTP client to make HTTP requests
     *
     * @var Zend_Http_Client $_httpClient
     */
    protected $_httpClient = null;
    
    
    protected $_host = null;
    protected $_consumer_key = null;
    protected $_consumer_secret = null;
    protected $_request_token_url = null;
    protected $_authorize_url = null;
    protected $_access_token_url = null;
    
    


    public function __construct($id = null,
                                $host = null,
                                $consumerKey = null,
                                $consumerSecret = null,
                                Killersoft_OAuth_Consumer_Storage $storage = null,
                                $requestTokenUrl = '/oauth/request_token',
                                $authorizeUrl = '/oauth/authorize',
                                $accessTokenUrl = '/oauth/access_token') {
        $this->_id                  = $id;
        $this->_host                = $host;
        $this->_consumer_key        = $consumerKey;
        $this->_consumer_secret     = $consumerSecret;
        $this->_storage             = $storage;
        $this->_request_token_url   = $this->_host . $requestTokenUrl;
        $this->_authorize_url       = $this->_host . $authorizeUrl;
        $this->_access_token_url    = $this->_host . $accessTokenUrl;
    }
    
    public function setToken($token)
    {
        $this->_id = $token;
    }
    
    public function authenticate()
    {
        $id = $this->_id;
        
        $oauth = new OAuth(
            $this->_consumer_key,
            $this->_consumer_secret,
            OAUTH_SIG_METHOD_HMACSHA1,
            OAUTH_AUTH_TYPE_URI
        );
        $oauth->disableSSLChecks();
        $oauth->enableDebug();    
        
        
        if (! empty($id)) {
            // access request
            $oauth->setToken($id, null);
            $access_token_info = $oauth->getAccessToken($this->_access_token_url);
            if (is_array($access_token_info) && isset($access_token_info['user_id'])) {
                $ret = true;
                $msg = 'Authentication successful';
                $info = $access_token_info;
                $oauth->setToken($access_token_info['oauth_token'], $access_token_info['oauth_token_secret']);
                if ($oauth->fetch($this->_host . '/account/verify_credentials.json')) {
                    $vinfo = json_decode($oauth->getLastResponse(), true);
                    $info = array_merge($info, $vinfo);
                }
            } else {
                $ret = false;
                $msg = 'Authentication failed';
                $info = null;
            }
            return new Zend_Auth_Result($ret, $info, array($msg));
        } else {
            
            try {
                $request_token_info = $oauth->getrequestToken($this->_request_token_url);
                header('Location: ' . $this->_authorize_url . '?oauth_token=' . $request_token_info['oauth_token']);
            } catch (OAuthException $e) {
                echo $e->getMessage();
                //var_dump($oauth->getLastResponseInfo());
            }
            
        }
    }
    
}