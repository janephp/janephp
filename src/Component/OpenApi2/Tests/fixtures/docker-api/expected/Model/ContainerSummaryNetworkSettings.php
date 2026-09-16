<?php

namespace Docker\Api\Model;

class ContainerSummaryNetworkSettings
{
    /**
     * @var iterable<string, EndpointSettings>
     */
    public iterable $networks;
}