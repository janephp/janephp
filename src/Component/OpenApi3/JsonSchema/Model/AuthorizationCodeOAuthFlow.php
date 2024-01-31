<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class AuthorizationCodeOAuthFlow extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $authorizationUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $tokenUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $refreshUrl;
    /**
     * 
     *
     * @var array<string, string>|null
     */
    protected $scopes;
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthorizationUrl() : ?string
    {
        return $this->authorizationUrl;
    }
    /**
     * 
     *
     * @param string|null $authorizationUrl
     *
     * @return self
     */
    public function setAuthorizationUrl(?string $authorizationUrl) : self
    {
        $this->initialized['authorizationUrl'] = true;
        $this->authorizationUrl = $authorizationUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTokenUrl() : ?string
    {
        return $this->tokenUrl;
    }
    /**
     * 
     *
     * @param string|null $tokenUrl
     *
     * @return self
     */
    public function setTokenUrl(?string $tokenUrl) : self
    {
        $this->initialized['tokenUrl'] = true;
        $this->tokenUrl = $tokenUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRefreshUrl() : ?string
    {
        return $this->refreshUrl;
    }
    /**
     * 
     *
     * @param string|null $refreshUrl
     *
     * @return self
     */
    public function setRefreshUrl(?string $refreshUrl) : self
    {
        $this->initialized['refreshUrl'] = true;
        $this->refreshUrl = $refreshUrl;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, string>|null
     */
    public function getScopes() : ?iterable
    {
        return $this->scopes;
    }
    /**
     * 
     *
     * @param array<string, string>|null $scopes
     *
     * @return self
     */
    public function setScopes(?iterable $scopes) : self
    {
        $this->initialized['scopes'] = true;
        $this->scopes = $scopes;
        return $this;
    }
}