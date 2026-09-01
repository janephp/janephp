<?php

namespace Docker\Api\Model;

class ServiceUpdateStatus
{
    /**
     * @var string
     */
    public string $state;
    /**
     * @var string
     */
    public string $startedAt;
    /**
     * @var string
     */
    public string $completedAt;
    /**
     * @var string
     */
    public string $message;
}