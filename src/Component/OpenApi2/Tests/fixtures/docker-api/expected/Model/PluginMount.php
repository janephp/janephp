<?php

namespace Docker\Api\Model;

class PluginMount
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
    public string $source;
    /**
     * @var string
     */
    public string $destination;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var list<string>
     */
    public array $options;
}