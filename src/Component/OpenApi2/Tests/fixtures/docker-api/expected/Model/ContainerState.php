<?php

namespace Docker\Api\Model;

class ContainerState
{
    /**
     * String representation of the container state. Can be one of "created",
     * "running", "paused", "restarting", "removing", "exited", or "dead".
     * 
     *
     * @var string
     */
    public string $status;
    /**
     * Whether this container is running.
     * 
     * Note that a running container can be _paused_. The `Running` and `Paused`
     * booleans are not mutually exclusive:
     * 
     * When pausing a container (on Linux), the freezer cgroup is used to suspend
     * all processes in the container. Freezing the process requires the process to
     * be running. As a result, paused containers are both `Running` _and_ `Paused`.
     * 
     * Use the `Status` field instead to determine if a container's state is "running".
     * 
     *
     * @var bool
     */
    public bool $running;
    /**
     * Whether this container is paused.
     *
     * @var bool
     */
    public bool $paused;
    /**
     * Whether this container is restarting.
     *
     * @var bool
     */
    public bool $restarting;
    /**
     * Whether this container has been killed because it ran out of memory.
     * 
     *
     * @var bool
     */
    public bool $oOMKilled;
    /**
     * @var bool
     */
    public bool $dead;
    /**
     * The process ID of this container
     *
     * @var int
     */
    public int $pid;
    /**
     * The last exit code of this container
     *
     * @var int
     */
    public int $exitCode;
    /**
     * @var string
     */
    public string $error;
    /**
     * The time when this container was last started.
     *
     * @var string
     */
    public string $startedAt;
    /**
     * The time when this container last exited.
     *
     * @var string
     */
    public string $finishedAt;
    /**
     * Health stores information about the container's healthcheck results.
     * 
     *
     * @var Health
     */
    public Health $health;
}