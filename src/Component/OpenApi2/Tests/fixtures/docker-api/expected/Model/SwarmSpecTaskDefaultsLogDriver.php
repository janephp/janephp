<?php

namespace Docker\Api\Model;

class SwarmSpecTaskDefaultsLogDriver
{
    /**
     * The log driver to use as a default for new tasks.
     * 
     *
     * @var string
     */
    public string $name;
    /**
     * Driver-specific options for the selectd log driver, specified
     * as key/value pairs.
     * 
     *
     * @var array<string, string>
     */
    public iterable $options;
}