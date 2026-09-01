<?php

namespace Docker\Api\Model;

class PluginDevice
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var list<string>
     */
    public array $settable;
    /**
     * @var string
     */
    public string $path;
}