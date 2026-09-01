<?php

namespace Docker\Api\Model;

class ServiceSpecUpdateConfig
{
    /**
     * Maximum number of tasks to be updated in one iteration (0 means
     * unlimited parallelism).
     * 
     *
     * @var int
     */
    public int $parallelism;
    /**
     * Amount of time between updates, in nanoseconds.
     *
     * @var int
     */
    public int $delay;
    /**
     * Action to take if an updated task fails to run, or stops running
     * during the update.
     * 
     *
     * @var string
     */
    public string $failureAction;
    /**
     * Amount of time to monitor each updated task for failures, in
     * nanoseconds.
     * 
     *
     * @var int
     */
    public int $monitor;
    /**
     * The fraction of tasks that may fail during an update before the
     * failure action is invoked, specified as a floating point number
     * between 0 and 1.
     * 
     *
     * @var float
     */
    public float $maxFailureRatio = 0;
    /**
     * The order of operations when rolling out an updated task. Either
     * the old task is shut down before the new task is started, or the
     * new task is started before the old task is shut down.
     * 
     *
     * @var string
     */
    public string $order;
}