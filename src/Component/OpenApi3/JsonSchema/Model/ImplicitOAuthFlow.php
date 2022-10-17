<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class ImplicitOAuthFlow extends \ArrayObject
{
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
    protected $refreshUrl;
    /**
     * 
     *
     * @var string[]|null
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
        $this->authorizationUrl = $authorizationUrl;
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
        $this->refreshUrl = $refreshUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getScopes() : ?iterable
    {
        return $this->scopes;
    }
    /**
     * 
     *
     * @param string[]|null $scopes
     *
     * @return self
     */
    public function setScopes(?iterable $scopes) : self
    {
        $this->scopes = $scopes;
        return $this;
    }
}