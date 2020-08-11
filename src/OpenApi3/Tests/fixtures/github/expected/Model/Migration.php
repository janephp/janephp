<?php

namespace Github\Model;

class Migration
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var MigrationOwner|null
     */
    protected $owner;
    /**
     * 
     *
     * @var string
     */
    protected $guid;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var bool
     */
    protected $lockRepositories;
    /**
     * 
     *
     * @var bool
     */
    protected $excludeAttachments;
    /**
     * 
     *
     * @var Repository[]
     */
    protected $repositories;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
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
    protected $archiveUrl;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $exclude;
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
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return MigrationOwner|null
     */
    public function getOwner() : ?MigrationOwner
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param MigrationOwner|null $owner
     *
     * @return self
     */
    public function setOwner(?MigrationOwner $owner) : self
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGuid() : string
    {
        return $this->guid;
    }
    /**
     * 
     *
     * @param string $guid
     *
     * @return self
     */
    public function setGuid(string $guid) : self
    {
        $this->guid = $guid;
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
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getLockRepositories() : bool
    {
        return $this->lockRepositories;
    }
    /**
     * 
     *
     * @param bool $lockRepositories
     *
     * @return self
     */
    public function setLockRepositories(bool $lockRepositories) : self
    {
        $this->lockRepositories = $lockRepositories;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getExcludeAttachments() : bool
    {
        return $this->excludeAttachments;
    }
    /**
     * 
     *
     * @param bool $excludeAttachments
     *
     * @return self
     */
    public function setExcludeAttachments(bool $excludeAttachments) : self
    {
        $this->excludeAttachments = $excludeAttachments;
        return $this;
    }
    /**
     * 
     *
     * @return Repository[]
     */
    public function getRepositories() : array
    {
        return $this->repositories;
    }
    /**
     * 
     *
     * @param Repository[] $repositories
     *
     * @return self
     */
    public function setRepositories(array $repositories) : self
    {
        $this->repositories = $repositories;
        return $this;
    }
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
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
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
    public function getArchiveUrl() : string
    {
        return $this->archiveUrl;
    }
    /**
     * 
     *
     * @param string $archiveUrl
     *
     * @return self
     */
    public function setArchiveUrl(string $archiveUrl) : self
    {
        $this->archiveUrl = $archiveUrl;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getExclude() : array
    {
        return $this->exclude;
    }
    /**
     * 
     *
     * @param mixed[] $exclude
     *
     * @return self
     */
    public function setExclude(array $exclude) : self
    {
        $this->exclude = $exclude;
        return $this;
    }
}