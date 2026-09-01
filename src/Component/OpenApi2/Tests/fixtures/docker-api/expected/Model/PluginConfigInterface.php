<?php

namespace Docker\Api\Model;

class PluginConfigInterface
{
    /**
     * @var list<PluginInterfaceType>
     */
    public array $types;
    /**
     * @var string
     */
    public string $socket;
    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @var string
     */
    public string $protocolScheme;
}