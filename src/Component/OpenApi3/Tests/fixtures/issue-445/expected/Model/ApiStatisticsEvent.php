<?php

namespace PicturePark\API\Model;

class ApiStatisticsEvent extends ApplicationEvent
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
     * @var array<string, int>|null
     */
    protected $requestsPerClient;
    /**
     * 
     *
     * @return array<string, int>|null
     */
    public function getRequestsPerClient() : ?iterable
    {
        return $this->requestsPerClient;
    }
    /**
     * 
     *
     * @param array<string, int>|null $requestsPerClient
     *
     * @return self
     */
    public function setRequestsPerClient(?iterable $requestsPerClient) : self
    {
        $this->initialized['requestsPerClient'] = true;
        $this->requestsPerClient = $requestsPerClient;
        return $this;
    }
}