<?php

namespace Docker\Api\Model;

class SwarmSpecDispatcher
{
    /**
     * The delay for an agent to send a heartbeat to the dispatcher.
     * 
     *
     * @var int
     */
    public int $heartbeatPeriod;
}