<?php

namespace Docker\Api\Model;

class NetworkAttachmentConfig
{
    /**
     * The target network for attachment. Must be a network name or ID.
     * 
     *
     * @var string
     */
    public string $target;
    /**
     * Discoverable alternate names for the service on this network.
     * 
     *
     * @var list<string>
     */
    public array $aliases;
    /**
     * Driver attachment options for the network target.
     * 
     *
     * @var array<string, string>
     */
    public iterable $driverOpts;
}