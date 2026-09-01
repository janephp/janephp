<?php

namespace Docker\Api\Model;

class DeviceMapping
{
    /**
     * @var string
     */
    public string $pathOnHost;
    /**
     * @var string
     */
    public string $pathInContainer;
    /**
     * @var string
     */
    public string $cgroupPermissions;
}