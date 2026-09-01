<?php

namespace Docker\Api\Model;

class PluginPrivilege
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
    public array $value;
}