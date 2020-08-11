<?php

namespace Github\Model;

class License
{
    /**
     * 
     *
     * @var string
     */
    protected $key;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $spdxId;
    /**
     * 
     *
     * @var string|null
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $implementation;
    /**
     * 
     *
     * @var string[]
     */
    protected $permissions;
    /**
     * 
     *
     * @var string[]
     */
    protected $conditions;
    /**
     * 
     *
     * @var string[]
     */
    protected $limitations;
    /**
     * 
     *
     * @var string
     */
    protected $body;
    /**
     * 
     *
     * @var bool
     */
    protected $featured;
    /**
     * 
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSpdxId() : ?string
    {
        return $this->spdxId;
    }
    /**
     * 
     *
     * @param string|null $spdxId
     *
     * @return self
     */
    public function setSpdxId(?string $spdxId) : self
    {
        $this->spdxId = $spdxId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImplementation() : string
    {
        return $this->implementation;
    }
    /**
     * 
     *
     * @param string $implementation
     *
     * @return self
     */
    public function setImplementation(string $implementation) : self
    {
        $this->implementation = $implementation;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPermissions() : array
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param string[] $permissions
     *
     * @return self
     */
    public function setPermissions(array $permissions) : self
    {
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getConditions() : array
    {
        return $this->conditions;
    }
    /**
     * 
     *
     * @param string[] $conditions
     *
     * @return self
     */
    public function setConditions(array $conditions) : self
    {
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getLimitations() : array
    {
        return $this->limitations;
    }
    /**
     * 
     *
     * @param string[] $limitations
     *
     * @return self
     */
    public function setLimitations(array $limitations) : self
    {
        $this->limitations = $limitations;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * 
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFeatured() : bool
    {
        return $this->featured;
    }
    /**
     * 
     *
     * @param bool $featured
     *
     * @return self
     */
    public function setFeatured(bool $featured) : self
    {
        $this->featured = $featured;
        return $this;
    }
}