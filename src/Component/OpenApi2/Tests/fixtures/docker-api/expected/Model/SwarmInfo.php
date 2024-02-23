<?php

namespace Docker\Api\Model;

class SwarmInfo
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @var string
     */
    protected $nodeID = '';
    /**
    * IP address at which this node can be reached by other nodes in the
    swarm.
    
    *
    * @var string
    */
    protected $nodeAddr = '';
    /**
     * Current local status of this node.
     *
     * @var string
     */
    protected $localNodeState = '';
    /**
     * 
     *
     * @var bool
     */
    protected $controlAvailable = false;
    /**
     * 
     *
     * @var string
     */
    protected $error = '';
    /**
     * List of ID's and addresses of other managers in the swarm.
     *
     * @var list<PeerNode>|null
     */
    protected $remoteManagers;
    /**
     * Total number of nodes in the swarm.
     *
     * @var int|null
     */
    protected $nodes;
    /**
     * Total number of managers in the swarm.
     *
     * @var int|null
     */
    protected $managers;
    /**
    * ClusterInfo represents information about the swarm as is returned by the
    "/info" endpoint. Join-tokens are not included.
    
    *
    * @var ClusterInfo|null
    */
    protected $cluster;
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @return string
     */
    public function getNodeID() : string
    {
        return $this->nodeID;
    }
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @param string $nodeID
     *
     * @return self
     */
    public function setNodeID(string $nodeID) : self
    {
        $this->initialized['nodeID'] = true;
        $this->nodeID = $nodeID;
        return $this;
    }
    /**
    * IP address at which this node can be reached by other nodes in the
    swarm.
    
    *
    * @return string
    */
    public function getNodeAddr() : string
    {
        return $this->nodeAddr;
    }
    /**
    * IP address at which this node can be reached by other nodes in the
    swarm.
    
    *
    * @param string $nodeAddr
    *
    * @return self
    */
    public function setNodeAddr(string $nodeAddr) : self
    {
        $this->initialized['nodeAddr'] = true;
        $this->nodeAddr = $nodeAddr;
        return $this;
    }
    /**
     * Current local status of this node.
     *
     * @return string
     */
    public function getLocalNodeState() : string
    {
        return $this->localNodeState;
    }
    /**
     * Current local status of this node.
     *
     * @param string $localNodeState
     *
     * @return self
     */
    public function setLocalNodeState(string $localNodeState) : self
    {
        $this->initialized['localNodeState'] = true;
        $this->localNodeState = $localNodeState;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getControlAvailable() : bool
    {
        return $this->controlAvailable;
    }
    /**
     * 
     *
     * @param bool $controlAvailable
     *
     * @return self
     */
    public function setControlAvailable(bool $controlAvailable) : self
    {
        $this->initialized['controlAvailable'] = true;
        $this->controlAvailable = $controlAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getError() : string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * List of ID's and addresses of other managers in the swarm.
     *
     * @return list<PeerNode>|null
     */
    public function getRemoteManagers() : ?array
    {
        return $this->remoteManagers;
    }
    /**
     * List of ID's and addresses of other managers in the swarm.
     *
     * @param list<PeerNode>|null $remoteManagers
     *
     * @return self
     */
    public function setRemoteManagers(?array $remoteManagers) : self
    {
        $this->initialized['remoteManagers'] = true;
        $this->remoteManagers = $remoteManagers;
        return $this;
    }
    /**
     * Total number of nodes in the swarm.
     *
     * @return int|null
     */
    public function getNodes() : ?int
    {
        return $this->nodes;
    }
    /**
     * Total number of nodes in the swarm.
     *
     * @param int|null $nodes
     *
     * @return self
     */
    public function setNodes(?int $nodes) : self
    {
        $this->initialized['nodes'] = true;
        $this->nodes = $nodes;
        return $this;
    }
    /**
     * Total number of managers in the swarm.
     *
     * @return int|null
     */
    public function getManagers() : ?int
    {
        return $this->managers;
    }
    /**
     * Total number of managers in the swarm.
     *
     * @param int|null $managers
     *
     * @return self
     */
    public function setManagers(?int $managers) : self
    {
        $this->initialized['managers'] = true;
        $this->managers = $managers;
        return $this;
    }
    /**
    * ClusterInfo represents information about the swarm as is returned by the
    "/info" endpoint. Join-tokens are not included.
    
    *
    * @return ClusterInfo|null
    */
    public function getCluster() : ?ClusterInfo
    {
        return $this->cluster;
    }
    /**
    * ClusterInfo represents information about the swarm as is returned by the
    "/info" endpoint. Join-tokens are not included.
    
    *
    * @param ClusterInfo|null $cluster
    *
    * @return self
    */
    public function setCluster(?ClusterInfo $cluster) : self
    {
        $this->initialized['cluster'] = true;
        $this->cluster = $cluster;
        return $this;
    }
}