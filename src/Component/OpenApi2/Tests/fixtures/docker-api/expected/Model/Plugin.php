<?php

namespace Docker\Api\Model;

class Plugin
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * True if the plugin is running. False if the plugin is not running, only installed.
     *
     * @var bool
     */
    public bool $enabled;
    /**
     * Settings that can be modified by users.
     *
     * @var PluginSettings
     */
    public PluginSettings $settings;
    /**
     * plugin remote reference used to push/pull the plugin
     *
     * @var string
     */
    public string $pluginReference;
    /**
     * The config of a plugin.
     *
     * @var PluginConfig
     */
    public PluginConfig $config;
}