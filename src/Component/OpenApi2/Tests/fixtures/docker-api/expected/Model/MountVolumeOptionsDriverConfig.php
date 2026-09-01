<?php

namespace Docker\Api\Model;

class MountVolumeOptionsDriverConfig
{
    /**
     * Name of the driver to use to create the volume.
     *
     * @var string
     */
    public string $name;
    /**
     * key/value map of driver specific options.
     *
     * @var array<string, string>
     */
    public iterable $options;
}