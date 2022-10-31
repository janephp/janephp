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
     * @var int[]|null
     */
    protected $requestsPerClient;
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
        $this->initialized['requestsPerClient'] = true;
        $this->requestsPerClient = $requestsPerClient;
        return $this;
    }
}