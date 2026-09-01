<?php

namespace Docker\Api\Model;

class PluginEnv
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
    public string $value;
}