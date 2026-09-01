<?php

namespace Docker\Api\Model;

class NodeStatus
{
    /**
     * NodeState represents the state of a node.
     *
     * @var string
     */
    public string $state;
    /**
     * @var string
     */
    public string $message;
    /**
     * IP address of the node.
     *
     * @var string
     */
    public string $addr;
}