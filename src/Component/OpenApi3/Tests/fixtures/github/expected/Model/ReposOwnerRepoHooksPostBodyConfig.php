<?php

namespace Github\Model;

class ReposOwnerRepoHooksPostBodyConfig extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The URL to which the payloads will be delivered.
     *
     * @var string
     */
    protected $url;
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     *
     * @var string
     */
    protected $contentType;
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https://developer.github.com/webhooks/event-payloads/#delivery-headers) header.
     *
     * @var string
     */
    protected $secret;
    /**
     * Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**
     *
     * @var string
     */
    protected $insecureSsl;
    /**
     * 
     *
     * @var string
     */
    protected $token;
    /**
     * 
     *
     * @var string
     */
    protected $digest;
    /**
     * The URL to which the payloads will be delivered.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL to which the payloads will be delivered.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     *
     * @return string
     */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * The media type used to serialize the payloads. Supported values include `json` and `form`. The default is `form`.
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType) : self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https://developer.github.com/webhooks/event-payloads/#delivery-headers) header.
     *
     * @return string
     */
    public function getSecret() : string
    {
        return $this->secret;
    }
    /**
     * If provided, the `secret` will be used as the `key` to generate the HMAC hex digest value in the [`X-Hub-Signature`](https://developer.github.com/webhooks/event-payloads/#delivery-headers) header.
     *
     * @param string $secret
     *
     * @return self
     */
    public function setSecret(string $secret) : self
    {
        $this->initialized['secret'] = true;
        $this->secret = $secret;
        return $this;
    }
    /**
     * Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**
     *
     * @return string
     */
    public function getInsecureSsl() : string
    {
        return $this->insecureSsl;
    }
    /**
     * Determines whether the SSL certificate of the host for `url` will be verified when delivering payloads. Supported values include `0` (verification is performed) and `1` (verification is not performed). The default is `0`. **We strongly recommend not setting this to `1` as you are subject to man-in-the-middle and other attacks.**
     *
     * @param string $insecureSsl
     *
     * @return self
     */
    public function setInsecureSsl(string $insecureSsl) : self
    {
        $this->initialized['insecureSsl'] = true;
        $this->insecureSsl = $insecureSsl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * 
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDigest() : string
    {
        return $this->digest;
    }
    /**
     * 
     *
     * @param string $digest
     *
     * @return self
     */
    public function setDigest(string $digest) : self
    {
        $this->initialized['digest'] = true;
        $this->digest = $digest;
        return $this;
    }
}