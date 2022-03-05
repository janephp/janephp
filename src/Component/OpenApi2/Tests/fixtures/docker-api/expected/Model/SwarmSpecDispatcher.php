<?php

namespace Docker\Api\Model;

class SwarmSpecDispatcher
{
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
        $this->heartbeatPeriod = $heartbeatPeriod;
        return $this;
    }
}