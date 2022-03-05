<?php

namespace Docker\Api\Model;

class PluginConfigInterface
{
    /**
     * 
     *
     * @var PluginInterfaceType[]
     */
    protected $types;
    /**
     * 
     *
     * @var string
     */
    protected $socket;
    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @var string
     */
    protected $protocolScheme;
    /**
     * 
     *
     * @return PluginInterfaceType[]
     */
    public function getTypes() : array
    {
        return $this->types;
    }
    /**
     * 
     *
     * @param PluginInterfaceType[] $types
     *
     * @return self
     */
    public function setTypes(array $types) : self
    {
        $this->types = $types;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSocket() : string
    {
        return $this->socket;
    }
    /**
     * 
     *
     * @param string $socket
     *
     * @return self
     */
    public function setSocket(string $socket) : self
    {
        $this->socket = $socket;
        return $this;
    }
    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @return string
     */
    public function getProtocolScheme() : string
    {
        return $this->protocolScheme;
    }
    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @param string $protocolScheme
     *
     * @return self
     */
    public function setProtocolScheme(string $protocolScheme) : self
    {
        $this->protocolScheme = $protocolScheme;
        return $this;
    }
}