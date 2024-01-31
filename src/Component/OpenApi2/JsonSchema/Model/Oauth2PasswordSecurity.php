<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class Oauth2PasswordSecurity extends \ArrayObject
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
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $flow;
    /**
     * 
     *
     * @var array<string, string>|null
     */
    protected $scopes;
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
    protected $description;
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFlow() : ?string
    {
        return $this->flow;
    }
    /**
     * 
     *
     * @param string|null $flow
     *
     * @return self
     */
    public function setFlow(?string $flow) : self
    {
        $this->initialized['flow'] = true;
        $this->flow = $flow;
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
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}