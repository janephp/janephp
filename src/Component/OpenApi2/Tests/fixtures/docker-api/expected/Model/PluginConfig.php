<?php

namespace Docker\Api\Model;

class PluginConfig
{
    /**
     * Docker Version used to create the plugin
     *
     * @var string
     */
    public string $dockerVersion;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $documentation;
    /**
     * The interface between Docker and the plugin
     *
     * @var PluginConfigInterface
     */
    public PluginConfigInterface $interface;
    /**
     * @var list<string>
     */
    public array $entrypoint;
    /**
     * @var string
     */
    public string $workDir;
    /**
     * @var PluginConfigUser
     */
    public PluginConfigUser $user;
    /**
     * @var PluginConfigNetwork
     */
    public PluginConfigNetwork $network;
    /**
     * @var PluginConfigLinux
     */
    public PluginConfigLinux $linux;
    /**
     * @var string
     */
    public string $propagatedMount;
    /**
     * @var bool
     */
    public bool $ipcHost;
    /**
     * @var bool
     */
    public bool $pidHost;
    /**
     * @var list<PluginMount>
     */
    public array $mounts;
    /**
     * @var list<PluginEnv>
     */
    public array $env;
    /**
     * @var PluginConfigArgs
     */
    public PluginConfigArgs $args;
    /**
     * @var PluginConfigRootfs
     */
    public PluginConfigRootfs $rootfs;
}