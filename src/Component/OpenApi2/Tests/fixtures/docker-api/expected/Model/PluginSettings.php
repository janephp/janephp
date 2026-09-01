<?php

namespace Docker\Api\Model;

class PluginSettings
{
    /**
     * @var list<PluginMount>
     */
    public array $mounts;
    /**
     * @var list<string>
     */
    public array $env;
    /**
     * @var list<string>
     */
    public array $args;
    /**
     * @var list<PluginDevice>
     */
    public array $devices;
}