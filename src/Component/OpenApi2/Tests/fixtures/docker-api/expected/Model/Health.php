<?php

namespace Docker\Api\Model;

class Health
{
    /**
     * Status is one of `none`, `starting`, `healthy` or `unhealthy`
     * 
     * - "none"      Indicates there is no healthcheck
     * - "starting"  Starting indicates that the container is not yet ready
     * - "healthy"   Healthy indicates that the container is running correctly
     * - "unhealthy" Unhealthy indicates that the container has a problem
     * 
     *
     * @var string
     */
    public string $status;
    /**
     * FailingStreak is the number of consecutive failures
     *
     * @var int
     */
    public int $failingStreak;
    /**
     * Log contains the last few results (oldest first)
     * 
     *
     * @var list<HealthcheckResult>
     */
    public array $log;
}