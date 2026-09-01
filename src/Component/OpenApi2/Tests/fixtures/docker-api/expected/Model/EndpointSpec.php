<?php

namespace Docker\Api\Model;

class EndpointSpec
{
    /**
     * The mode of resolution to use for internal load balancing between tasks.
     * 
     *
     * @var string
     */
    public string $mode = 'vip';
    /**
     * List of exposed ports that this service is accessible on from the
     * outside. Ports can only be provided if `vip` resolution mode is used.
     * 
     *
     * @var list<EndpointPortConfig>
     */
    public array $ports;
}