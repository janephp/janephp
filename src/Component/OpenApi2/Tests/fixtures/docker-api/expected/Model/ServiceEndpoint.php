<?php

namespace Docker\Api\Model;

class ServiceEndpoint
{
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @var EndpointSpec
     */
    public EndpointSpec $spec;
    /**
     * @var list<EndpointPortConfig>
     */
    public array $ports;
    /**
     * @var list<ServiceEndpointVirtualIPsItem>
     */
    public array $virtualIPs;
}