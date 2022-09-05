<?php

namespace PicturePark\API\Model;

class ApiStatisticsEvent extends ApplicationEvent
{
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
        $this->requestsPerClient = $requestsPerClient;
        return $this;
    }
}