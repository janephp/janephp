<?php

namespace Docker\Api\Model;

class ContainerSummaryNetworkSettings
{
    /**
     * @var array<string, EndpointSettings>
     */
    public iterable $networks;
}