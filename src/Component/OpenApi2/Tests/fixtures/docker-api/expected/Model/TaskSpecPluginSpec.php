<?php

namespace Docker\Api\Model;

class TaskSpecPluginSpec
{
    /**
     * The name or 'alias' to use for the plugin.
     *
     * @var string
     */
    public string $name;
    /**
     * The plugin image reference to use.
     *
     * @var string
     */
    public string $remote;
    /**
     * Disable the plugin once scheduled.
     *
     * @var bool
     */
    public bool $disabled;
    /**
     * @var list<PluginPrivilege>
     */
    public array $pluginPrivilege;
}