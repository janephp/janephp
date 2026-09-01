<?php

namespace Docker\Api\Model;

class PluginConfigArgs
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
     * @var list<string>
     */
    public array $value;
}