<?php

namespace Docker\Api\Model;

class PluginConfigLinux
{
    /**
     * @var list<string>
     */
    public array $capabilities;
    /**
     * @var bool
     */
    public bool $allowAllDevices;
    /**
     * @var list<PluginDevice>
     */
    public array $devices;
}