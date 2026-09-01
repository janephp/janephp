<?php

namespace Docker\Api\Model;

class SwarmInfo
{
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @var string
     */
    public string $nodeID = '';
    /**
     * IP address at which this node can be reached by other nodes in the
     * swarm.
     * 
     *
     * @var string
     */
    public string $nodeAddr = '';
    /**
     * Current local status of this node.
     *
     * @var string
     */
    public string $localNodeState = '';
    /**
     * @var bool
     */
    public bool $controlAvailable = false;
    /**
     * @var string
     */
    public string $error = '';
    /**
     * List of ID's and addresses of other managers in the swarm.
     * 
     *
     * @var list<PeerNode>|null
     */
    public ?array $remoteManagers;
    /**
     * Total number of nodes in the swarm.
     *
     * @var int|null
     */
    public ?int $nodes;
    /**
     * Total number of managers in the swarm.
     *
     * @var int|null
     */
    public ?int $managers;
    /**
     * ClusterInfo represents information about the swarm as is returned by the
     * "/info" endpoint. Join-tokens are not included.
     * 
     *
     * @var ClusterInfo|null
     */
    public ?ClusterInfo $cluster;
}