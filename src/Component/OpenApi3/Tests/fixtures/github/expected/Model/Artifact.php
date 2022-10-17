<?php

namespace Github\Model;

class Artifact extends \ArrayObject
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
     * @var string
     */
    protected $nodeId;
    /**
     * The name of the artifact.
     *
     * @var string
     */
    protected $name;
    /**
     * The size in bytes of the artifact.
     *
     * @var int
     */
    protected $sizeInBytes;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $archiveDownloadUrl;
    /**
     * Whether or not the artifact has expired.
     *
     * @var bool
     */
    protected $expired;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string
     */
    protected $expiresAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
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
     * The name of the artifact.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the artifact.
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
     * The size in bytes of the artifact.
     *
     * @return int
     */
    public function getSizeInBytes() : int
    {
        return $this->sizeInBytes;
    }
    /**
     * The size in bytes of the artifact.
     *
     * @param int $sizeInBytes
     *
     * @return self
     */
    public function setSizeInBytes(int $sizeInBytes) : self
    {
        $this->sizeInBytes = $sizeInBytes;
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
     * @return string
     */
    public function getArchiveDownloadUrl() : string
    {
        return $this->archiveDownloadUrl;
    }
    /**
     * 
     *
     * @param string $archiveDownloadUrl
     *
     * @return self
     */
    public function setArchiveDownloadUrl(string $archiveDownloadUrl) : self
    {
        $this->archiveDownloadUrl = $archiveDownloadUrl;
        return $this;
    }
    /**
     * Whether or not the artifact has expired.
     *
     * @return bool
     */
    public function getExpired() : bool
    {
        return $this->expired;
    }
    /**
     * Whether or not the artifact has expired.
     *
     * @param bool $expired
     *
     * @return self
     */
    public function setExpired(bool $expired) : self
    {
        $this->expired = $expired;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExpiresAt() : string
    {
        return $this->expiresAt;
    }
    /**
     * 
     *
     * @param string $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(string $expiresAt) : self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}