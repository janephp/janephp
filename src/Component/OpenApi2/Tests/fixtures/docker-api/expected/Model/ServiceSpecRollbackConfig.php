<?php

namespace Docker\Api\Model;

class ServiceSpecRollbackConfig
{
    /**
     * Maximum number of tasks to be rolled back in one iteration (0 means
     * unlimited parallelism).
     * 
     *
     * @var int
     */
    public int $parallelism;
    /**
     * Amount of time between rollback iterations, in nanoseconds.
     * 
     *
     * @var int
     */
    public int $delay;
    /**
     * Action to take if an rolled back task fails to run, or stops
     * running during the rollback.
     * 
     *
     * @var string
     */
    public string $failureAction;
    /**
     * Amount of time to monitor each rolled back task for failures, in
     * nanoseconds.
     * 
     *
     * @var int
     */
    public int $monitor;
    /**
     * The fraction of tasks that may fail during a rollback before the
     * failure action is invoked, specified as a floating point number
     * between 0 and 1.
     * 
     *
     * @var float
     */
    public float $maxFailureRatio = 0;
    /**
     * The order of operations when rolling back a task. Either the old
     * task is shut down before the new task is started, or the new task
     * is started before the old task is shut down.
     * 
     *
     * @var string
     */
    public string $order;
}