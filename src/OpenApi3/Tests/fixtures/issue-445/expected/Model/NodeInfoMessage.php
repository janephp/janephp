<?php

namespace PicturePark\API\Model;

class NodeInfoMessage
{
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $retries;
    /**
     * 
     *
     * @var int
     */
    protected $priority;
    /**
     * 
     *
     * @var bool
     */
    protected $deduplicate;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var string|null
     */
    protected $nodeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $hostName;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $lastResponseTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $serviceName;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $productVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $release;
    /**
     * 
     *
     * @var string|null
     */
    protected $logLevel;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRetries() : int
    {
        return $this->retries;
    }
    /**
     * 
     *
     * @param int $retries
     *
     * @return self
     */
    public function setRetries(int $retries) : self
    {
        $this->retries = $retries;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * 
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDeduplicate() : bool
    {
        return $this->deduplicate;
    }
    /**
     * 
     *
     * @param bool $deduplicate
     *
     * @return self
     */
    public function setDeduplicate(bool $deduplicate) : self
    {
        $this->deduplicate = $deduplicate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNodeId() : ?string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string|null $nodeId
     *
     * @return self
     */
    public function setNodeId(?string $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHostName() : ?string
    {
        return $this->hostName;
    }
    /**
     * 
     *
     * @param string|null $hostName
     *
     * @return self
     */
    public function setHostName(?string $hostName) : self
    {
        $this->hostName = $hostName;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getLastResponseTime() : \DateTime
    {
        return $this->lastResponseTime;
    }
    /**
     * 
     *
     * @param \DateTime $lastResponseTime
     *
     * @return self
     */
    public function setLastResponseTime(\DateTime $lastResponseTime) : self
    {
        $this->lastResponseTime = $lastResponseTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getServiceName() : ?string
    {
        return $this->serviceName;
    }
    /**
     * 
     *
     * @param string|null $serviceName
     *
     * @return self
     */
    public function setServiceName(?string $serviceName) : self
    {
        $this->serviceName = $serviceName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileVersion() : ?string
    {
        return $this->fileVersion;
    }
    /**
     * 
     *
     * @param string|null $fileVersion
     *
     * @return self
     */
    public function setFileVersion(?string $fileVersion) : self
    {
        $this->fileVersion = $fileVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProductVersion() : ?string
    {
        return $this->productVersion;
    }
    /**
     * 
     *
     * @param string|null $productVersion
     *
     * @return self
     */
    public function setProductVersion(?string $productVersion) : self
    {
        $this->productVersion = $productVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRelease() : ?string
    {
        return $this->release;
    }
    /**
     * 
     *
     * @param string|null $release
     *
     * @return self
     */
    public function setRelease(?string $release) : self
    {
        $this->release = $release;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLogLevel() : ?string
    {
        return $this->logLevel;
    }
    /**
     * 
     *
     * @param string|null $logLevel
     *
     * @return self
     */
    public function setLogLevel(?string $logLevel) : self
    {
        $this->logLevel = $logLevel;
        return $this;
    }
}