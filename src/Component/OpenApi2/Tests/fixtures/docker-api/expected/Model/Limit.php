<?php

namespace Docker\Api\Model;

class Limit
{
    /**
     * @var int
     */
    public int $nanoCPUs;
    /**
     * @var int
     */
    public int $memoryBytes;
    /**
     * Limits the maximum number of PIDs in the container. Set `0` for unlimited.
     * 
     *
     * @var int
     */
    public int $pids = 0;
}