<?php

namespace Docker\Api\Model;

class Driver
{
    /**
     * Name of the driver.
     *
     * @var string
     */
    public string $name;
    /**
     * Key/value map of driver-specific options.
     *
     * @var iterable<string, string>
     */
    public iterable $options;
}