<?php

namespace Docker\Api\Model;

class ThrottleDevice
{
    /**
     * Device path
     *
     * @var string
     */
    public string $path;
    /**
     * Rate
     *
     * @var int
     */
    public int $rate;
}