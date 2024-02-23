<?php

namespace Github\Model;

class License extends \ArrayObject
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
     * @var list<string>
     */
    protected $permissions;
    /**
     * 
     *
     * @var list<string>
     */
    protected $conditions;
    /**
     * 
     *
     * @var list<string>
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
        $this->initialized['key'] = true;
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
        $this->initialized['name'] = true;
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
        $this->initialized['spdxId'] = true;
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
        $this->initialized['url'] = true;
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
        $this->initialized['nodeId'] = true;
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
        $this->initialized['htmlUrl'] = true;
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
        $this->initialized['description'] = true;
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
        $this->initialized['implementation'] = true;
        $this->implementation = $implementation;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getPermissions() : array
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param list<string> $permissions
     *
     * @return self
     */
    public function setPermissions(array $permissions) : self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getConditions() : array
    {
        return $this->conditions;
    }
    /**
     * 
     *
     * @param list<string> $conditions
     *
     * @return self
     */
    public function setConditions(array $conditions) : self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getLimitations() : array
    {
        return $this->limitations;
    }
    /**
     * 
     *
     * @param list<string> $limitations
     *
     * @return self
     */
    public function setLimitations(array $limitations) : self
    {
        $this->initialized['limitations'] = true;
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
        $this->initialized['body'] = true;
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
        $this->initialized['featured'] = true;
        $this->featured = $featured;
        return $this;
    }
}