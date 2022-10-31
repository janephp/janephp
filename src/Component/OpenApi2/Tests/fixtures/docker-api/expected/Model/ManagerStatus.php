<?php

namespace Docker\Api\Model;

class ManagerStatus
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var bool
     */
    protected $leader = false;
    /**
     * Reachability represents the reachability of a node.
     *
     * @var string
     */
    protected $reachability;
    /**
     * The IP address and port at which the manager is reachable.
     *
     * @var string
     */
    protected $addr;
    /**
     * 
     *
     * @return bool
     */
    public function getLeader() : bool
    {
        return $this->leader;
    }
    /**
     * 
     *
     * @param bool $leader
     *
     * @return self
     */
    public function setLeader(bool $leader) : self
    {
        $this->initialized['leader'] = true;
        $this->leader = $leader;
        return $this;
    }
    /**
     * Reachability represents the reachability of a node.
     *
     * @return string
     */
    public function getReachability() : string
    {
        return $this->reachability;
    }
    /**
     * Reachability represents the reachability of a node.
     *
     * @param string $reachability
     *
     * @return self
     */
    public function setReachability(string $reachability) : self
    {
        $this->initialized['reachability'] = true;
        $this->reachability = $reachability;
        return $this;
    }
    /**
     * The IP address and port at which the manager is reachable.
     *
     * @return string
     */
    public function getAddr() : string
    {
        return $this->addr;
    }
    /**
     * The IP address and port at which the manager is reachable.
     *
     * @param string $addr
     *
     * @return self
     */
    public function setAddr(string $addr) : self
    {
        $this->initialized['addr'] = true;
        $this->addr = $addr;
        return $this;
    }
}