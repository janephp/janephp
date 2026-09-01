<?php

namespace Docker\Api\Model;

class TaskStatus
{
    /**
     * @var string
     */
    public string $timestamp;
    /**
     * @var string
     */
    public string $state;
    /**
     * @var string
     */
    public string $message;
    /**
     * @var string
     */
    public string $err;
    /**
     * @var TaskStatusContainerStatus
     */
    public TaskStatusContainerStatus $containerStatus;
}