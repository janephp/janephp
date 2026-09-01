<?php

namespace Docker\Api\Model;

class ServiceSpecModeReplicatedJob
{
    /**
     * The maximum number of replicas to run simultaneously.
     * 
     *
     * @var int
     */
    public int $maxConcurrent = 1;
    /**
     * The total number of replicas desired to reach the Completed
     * state. If unset, will default to the value of `MaxConcurrent`
     * 
     *
     * @var int
     */
    public int $totalCompletions;
}