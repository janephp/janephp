<?php

namespace Docker\Api\Model;

class ResourcesUlimitsItem
{
    /**
     * Name of ulimit
     *
     * @var string
     */
    public string $name;
    /**
     * Soft limit
     *
     * @var int
     */
    public int $soft;
    /**
     * Hard limit
     *
     * @var int
     */
    public int $hard;
}