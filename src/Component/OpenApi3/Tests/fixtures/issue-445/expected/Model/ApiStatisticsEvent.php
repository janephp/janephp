<?php

namespace PicturePark\API\Model;

class ApiStatisticsEvent extends ApplicationEvent
{
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var int[]|null
     */
    protected $requestsPerClient;
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->timestamp = $timestamp;
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
     * @return int[]|null
     */
    public function getRequestsPerClient() : ?iterable
    {
        return $this->requestsPerClient;
    }
    /**
     * 
     *
     * @param int[]|null $requestsPerClient
     *
     * @return self
     */
    public function setRequestsPerClient(?iterable $requestsPerClient) : self
    {
        $this->requestsPerClient = $requestsPerClient;
        return $this;
    }
}