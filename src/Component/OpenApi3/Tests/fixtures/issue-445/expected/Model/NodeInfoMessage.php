<?php

namespace PicturePark\API\Model;

class NodeInfoMessage extends Message
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
        $this->initialized['nodeId'] = true;
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
        $this->initialized['hostName'] = true;
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
        $this->initialized['lastResponseTime'] = true;
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
        $this->initialized['serviceName'] = true;
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
        $this->initialized['fileVersion'] = true;
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
        $this->initialized['productVersion'] = true;
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
        $this->initialized['release'] = true;
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
        $this->initialized['logLevel'] = true;
        $this->logLevel = $logLevel;
        return $this;
    }
}