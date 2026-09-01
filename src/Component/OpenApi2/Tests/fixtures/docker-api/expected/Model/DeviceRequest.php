<?php

namespace Docker\Api\Model;

class DeviceRequest
{
    /**
     * @var string
     */
    public string $driver;
    /**
     * @var int
     */
    public int $count;
    /**
     * @var list<string>
     */
    public array $deviceIDs;
    /**
     * A list of capabilities; an OR list of AND lists of capabilities.
     * 
     *
     * @var list<list<string>>
     */
    public array $capabilities;
    /**
     * Driver-specific options, specified as a key/value pairs. These options
     * are passed directly to the driver.
     * 
     *
     * @var array<string, string>
     */
    public iterable $options;
}