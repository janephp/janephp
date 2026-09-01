<?php

namespace Docker\Api\Model;

class VolumesCreatePostBody
{
    /**
     * The new volume's name. If not specified, Docker generates a name.
     * 
     *
     * @var string
     */
    public string $name;
    /**
     * Name of the volume driver to use.
     *
     * @var string
     */
    public string $driver = 'local';
    /**
     * A mapping of driver options and values. These options are
     * passed directly to the driver and are driver specific.
     * 
     *
     * @var array<string, string>
     */
    public iterable $driverOpts;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    public iterable $labels;
}