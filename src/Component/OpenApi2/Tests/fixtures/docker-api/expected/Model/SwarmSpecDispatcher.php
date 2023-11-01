<?php

namespace Docker\Api\Model;

class SwarmSpecDispatcher
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
     * The delay for an agent to send a heartbeat to the dispatcher.
     *
     * @var int
     */
    protected $heartbeatPeriod;
    /**
     * The delay for an agent to send a heartbeat to the dispatcher.
     *
     * @return int
     */
    public function getHeartbeatPeriod() : int
    {
        return $this->heartbeatPeriod;
    }
    /**
     * The delay for an agent to send a heartbeat to the dispatcher.
     *
     * @param int $heartbeatPeriod
     *
     * @return self
     */
    public function setHeartbeatPeriod(int $heartbeatPeriod) : self
    {
        $this->initialized['heartbeatPeriod'] = true;
        $this->heartbeatPeriod = $heartbeatPeriod;
        return $this;
    }
}