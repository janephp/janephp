<?php

namespace Docker\Api\Model;

class PeerNode
{
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @var string
     */
    protected $nodeID;
    /**
     * IP address and ports at which this node can be reached.
     *
     * @var string
     */
    protected $addr;
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
        $this->nodeID = $nodeID;
        return $this;
    }
    /**
     * IP address and ports at which this node can be reached.
     *
     * @return string
     */
    public function getAddr() : string
    {
        return $this->addr;
    }
    /**
     * IP address and ports at which this node can be reached.
     *
     * @param string $addr
     *
     * @return self
     */
    public function setAddr(string $addr) : self
    {
        $this->addr = $addr;
        return $this;
    }
}