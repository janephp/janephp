<?php

namespace Docker\Api\Model;

class TaskStatusContainerStatus
{
    /**
     * @var string
     */
    public string $containerID;
    /**
     * @var int
     */
    public int $pID;
    /**
     * @var int
     */
    public int $exitCode;
}