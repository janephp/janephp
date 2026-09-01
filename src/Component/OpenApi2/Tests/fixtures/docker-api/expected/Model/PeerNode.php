<?php

namespace Docker\Api\Model;

class PeerNode
{
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @var string
     */
    public string $nodeID;
    /**
     * IP address and ports at which this node can be reached.
     * 
     *
     * @var string
     */
    public string $addr;
}