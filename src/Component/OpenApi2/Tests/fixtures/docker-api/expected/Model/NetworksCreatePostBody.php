<?php

namespace Docker\Api\Model;

class NetworksCreatePostBody
{
    /**
     * The network's name.
     *
     * @var string
     */
    public string $name;
    /**
     * Check for networks with duplicate names. Since Network is
     * primarily keyed based on a random ID and not on the name, and
     * network name is strictly a user-friendly alias to the network
     * which is uniquely identified using ID, there is no guaranteed
     * way to check for duplicates. CheckDuplicate is there to provide
     * a best effort checking of any networks which has the same name
     * but it is not guaranteed to catch all name collisions.
     * 
     *
     * @var bool
     */
    public bool $checkDuplicate;
    /**
     * Name of the network driver plugin to use.
     *
     * @var string
     */
    public string $driver = 'bridge';
    /**
     * Restrict external access to the network.
     *
     * @var bool
     */
    public bool $internal;
    /**
     * Globally scoped network is manually attachable by regular
     * containers from workers in swarm mode.
     * 
     *
     * @var bool
     */
    public bool $attachable;
    /**
     * Ingress network is the network which provides the routing-mesh
     * in swarm mode.
     * 
     *
     * @var bool
     */
    public bool $ingress;
    /**
     * @var IPAM
     */
    public IPAM $iPAM;
    /**
     * Enable IPv6 on the network.
     *
     * @var bool
     */
    public bool $enableIPv6;
    /**
     * Network specific options to be used by the drivers.
     *
     * @var array<string, string>
     */
    public iterable $options;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    public iterable $labels;
}