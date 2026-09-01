<?php

namespace Docker\Api\Model;

class NetworksIdDisconnectPostBody
{
    /**
     * The ID or name of the container to disconnect from the network.
     * 
     *
     * @var string
     */
    public string $container;
    /**
     * Force the container to disconnect from the network.
     * 
     *
     * @var bool
     */
    public bool $force;
}