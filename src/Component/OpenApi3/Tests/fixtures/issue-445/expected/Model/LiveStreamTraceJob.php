<?php

namespace PicturePark\API\Model;

class LiveStreamTraceJob
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
    protected $traceJobId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ipAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $apiClientId;
    /**
     * 
     *
     * @return string|null
     */
    public function getTraceJobId() : ?string
    {
        return $this->traceJobId;
    }
    /**
     * 
     *
     * @param string|null $traceJobId
     *
     * @return self
     */
    public function setTraceJobId(?string $traceJobId) : self
    {
        $this->initialized['traceJobId'] = true;
        $this->traceJobId = $traceJobId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIpAddress() : ?string
    {
        return $this->ipAddress;
    }
    /**
     * 
     *
     * @param string|null $ipAddress
     *
     * @return self
     */
    public function setIpAddress(?string $ipAddress) : self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getApiClientId() : ?string
    {
        return $this->apiClientId;
    }
    /**
     * 
     *
     * @param string|null $apiClientId
     *
     * @return self
     */
    public function setApiClientId(?string $apiClientId) : self
    {
        $this->initialized['apiClientId'] = true;
        $this->apiClientId = $apiClientId;
        return $this;
    }
}