<?php

namespace Docker\Api\Model;

class JoinTokens
{
    /**
     * The token workers can use to join the swarm.
     * 
     *
     * @var string
     */
    public string $worker;
    /**
     * The token managers can use to join the swarm.
     * 
     *
     * @var string
     */
    public string $manager;
}