<?php

namespace Docker\Api\Model;

class HealthConfig
{
    /**
     * The test to perform. Possible values are:
     * 
     * - `[]` inherit healthcheck from image or parent image
     * - `["NONE"]` disable healthcheck
     * - `["CMD", args...]` exec arguments directly
     * - `["CMD-SHELL", command]` run command with system's default shell
     * 
     *
     * @var list<string>
     */
    public array $test;
    /**
     * The time to wait between checks in nanoseconds. It should be 0 or at
     * least 1000000 (1 ms). 0 means inherit.
     * 
     *
     * @var int
     */
    public int $interval;
    /**
     * The time to wait before considering the check to have hung. It should
     * be 0 or at least 1000000 (1 ms). 0 means inherit.
     * 
     *
     * @var int
     */
    public int $timeout;
    /**
     * The number of consecutive failures needed to consider a container as
     * unhealthy. 0 means inherit.
     * 
     *
     * @var int
     */
    public int $retries;
    /**
     * Start period for the container to initialize before starting
     * health-retries countdown in nanoseconds. It should be 0 or at least
     * 1000000 (1 ms). 0 means inherit.
     * 
     *
     * @var int
     */
    public int $startPeriod;
}