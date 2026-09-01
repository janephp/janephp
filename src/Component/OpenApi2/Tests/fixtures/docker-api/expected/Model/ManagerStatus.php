<?php

namespace Docker\Api\Model;

class ManagerStatus
{
    /**
     * @var bool
     */
    public bool $leader = false;
    /**
     * Reachability represents the reachability of a node.
     *
     * @var string
     */
    public string $reachability;
    /**
     * The IP address and port at which the manager is reachable.
     * 
     *
     * @var string
     */
    public string $addr;
}