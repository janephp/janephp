<?php

namespace Docker\Api\Model;

class TaskSpecRestartPolicy
{
    /**
     * Condition for restart.
     *
     * @var string
     */
    public string $condition;
    /**
     * Delay between restart attempts.
     *
     * @var int
     */
    public int $delay;
    /**
     * Maximum attempts to restart a given container before giving up
     * (default value is 0, which is ignored).
     * 
     *
     * @var int
     */
    public int $maxAttempts = 0;
    /**
     * Windows is the time window used to evaluate the restart policy
     * (default value is 0, which is unbounded).
     * 
     *
     * @var int
     */
    public int $window = 0;
}