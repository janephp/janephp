<?php

namespace Github\Model;

class Status extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string|null
     */
    protected $avatarUrl;
    /**
     * 
     *
     * @var int
     */
    protected $id;
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
    protected $state;
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
    protected $targetUrl;
    /**
     * 
     *
     * @var string
     */
    protected $context;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Simple User
     *
     * @var SimpleUser|null
     */
    protected $creator;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getAvatarUrl() : ?string
    {
        return $this->avatarUrl;
    }
    /**
     * 
     *
     * @param string|null $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(?string $avatarUrl) : self
    {
        $this->initialized['avatarUrl'] = true;
        $this->avatarUrl = $avatarUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
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
    public function getTargetUrl() : string
    {
        return $this->targetUrl;
    }
    /**
     * 
     *
     * @param string $targetUrl
     *
     * @return self
     */
    public function setTargetUrl(string $targetUrl) : self
    {
        $this->initialized['targetUrl'] = true;
        $this->targetUrl = $targetUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContext() : string
    {
        return $this->context;
    }
    /**
     * 
     *
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context) : self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Simple User
     *
     * @return SimpleUser|null
     */
    public function getCreator() : ?SimpleUser
    {
        return $this->creator;
    }
    /**
     * Simple User
     *
     * @param SimpleUser|null $creator
     *
     * @return self
     */
    public function setCreator(?SimpleUser $creator) : self
    {
        $this->initialized['creator'] = true;
        $this->creator = $creator;
        return $this;
    }
}