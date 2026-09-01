<?php

namespace Docker\Api\Model;

class PluginsInfo
{
    /**
     * Names of available volume-drivers, and network-driver plugins.
     *
     * @var list<string>
     */
    public array $volume;
    /**
     * Names of available network-drivers, and network-driver plugins.
     *
     * @var list<string>
     */
    public array $network;
    /**
     * Names of available authorization plugins.
     *
     * @var list<string>
     */
    public array $authorization;
    /**
     * Names of available logging-drivers, and logging-driver plugins.
     *
     * @var list<string>
     */
    public array $log;
}