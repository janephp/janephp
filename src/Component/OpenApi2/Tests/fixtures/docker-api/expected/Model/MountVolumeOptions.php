<?php

namespace Docker\Api\Model;

class MountVolumeOptions
{
    /**
     * Populate volume with data from the target.
     *
     * @var bool
     */
    public bool $noCopy = false;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    public iterable $labels;
    /**
     * Map of driver specific options
     *
     * @var MountVolumeOptionsDriverConfig
     */
    public MountVolumeOptionsDriverConfig $driverConfig;
}