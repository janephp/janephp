<?php

namespace Docker\Api\Model;

class PluginConfig
{
    /**
     * Docker Version used to create the plugin
     *
     * @var string
     */
    protected $dockerVersion;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $documentation;
    /**
     * The interface between Docker and the plugin
     *
     * @var PluginConfigInterface
     */
    protected $interface;
    /**
     * 
     *
     * @var string[]
     */
    protected $entrypoint;
    /**
     * 
     *
     * @var string
     */
    protected $workDir;
    /**
     * 
     *
     * @var PluginConfigUser
     */
    protected $user;
    /**
     * 
     *
     * @var PluginConfigNetwork
     */
    protected $network;
    /**
     * 
     *
     * @var PluginConfigLinux
     */
    protected $linux;
    /**
     * 
     *
     * @var string
     */
    protected $propagatedMount;
    /**
     * 
     *
     * @var bool
     */
    protected $ipcHost;
    /**
     * 
     *
     * @var bool
     */
    protected $pidHost;
    /**
     * 
     *
     * @var PluginMount[]
     */
    protected $mounts;
    /**
     * 
     *
     * @var PluginEnv[]
     */
    protected $env;
    /**
     * 
     *
     * @var PluginConfigArgs
     */
    protected $args;
    /**
     * 
     *
     * @var PluginConfigRootfs
     */
    protected $rootfs;
    /**
     * Docker Version used to create the plugin
     *
     * @return string
     */
    public function getDockerVersion() : string
    {
        return $this->dockerVersion;
    }
    /**
     * Docker Version used to create the plugin
     *
     * @param string $dockerVersion
     *
     * @return self
     */
    public function setDockerVersion(string $dockerVersion) : self
    {
        $this->dockerVersion = $dockerVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDocumentation() : string
    {
        return $this->documentation;
    }
    /**
     * 
     *
     * @param string $documentation
     *
     * @return self
     */
    public function setDocumentation(string $documentation) : self
    {
        $this->documentation = $documentation;
        return $this;
    }
    /**
     * The interface between Docker and the plugin
     *
     * @return PluginConfigInterface
     */
    public function getInterface() : PluginConfigInterface
    {
        return $this->interface;
    }
    /**
     * The interface between Docker and the plugin
     *
     * @param PluginConfigInterface $interface
     *
     * @return self
     */
    public function setInterface(PluginConfigInterface $interface) : self
    {
        $this->interface = $interface;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getEntrypoint() : array
    {
        return $this->entrypoint;
    }
    /**
     * 
     *
     * @param string[] $entrypoint
     *
     * @return self
     */
    public function setEntrypoint(array $entrypoint) : self
    {
        $this->entrypoint = $entrypoint;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWorkDir() : string
    {
        return $this->workDir;
    }
    /**
     * 
     *
     * @param string $workDir
     *
     * @return self
     */
    public function setWorkDir(string $workDir) : self
    {
        $this->workDir = $workDir;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigUser
     */
    public function getUser() : PluginConfigUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param PluginConfigUser $user
     *
     * @return self
     */
    public function setUser(PluginConfigUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigNetwork
     */
    public function getNetwork() : PluginConfigNetwork
    {
        return $this->network;
    }
    /**
     * 
     *
     * @param PluginConfigNetwork $network
     *
     * @return self
     */
    public function setNetwork(PluginConfigNetwork $network) : self
    {
        $this->network = $network;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigLinux
     */
    public function getLinux() : PluginConfigLinux
    {
        return $this->linux;
    }
    /**
     * 
     *
     * @param PluginConfigLinux $linux
     *
     * @return self
     */
    public function setLinux(PluginConfigLinux $linux) : self
    {
        $this->linux = $linux;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPropagatedMount() : string
    {
        return $this->propagatedMount;
    }
    /**
     * 
     *
     * @param string $propagatedMount
     *
     * @return self
     */
    public function setPropagatedMount(string $propagatedMount) : self
    {
        $this->propagatedMount = $propagatedMount;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIpcHost() : bool
    {
        return $this->ipcHost;
    }
    /**
     * 
     *
     * @param bool $ipcHost
     *
     * @return self
     */
    public function setIpcHost(bool $ipcHost) : self
    {
        $this->ipcHost = $ipcHost;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPidHost() : bool
    {
        return $this->pidHost;
    }
    /**
     * 
     *
     * @param bool $pidHost
     *
     * @return self
     */
    public function setPidHost(bool $pidHost) : self
    {
        $this->pidHost = $pidHost;
        return $this;
    }
    /**
     * 
     *
     * @return PluginMount[]
     */
    public function getMounts() : array
    {
        return $this->mounts;
    }
    /**
     * 
     *
     * @param PluginMount[] $mounts
     *
     * @return self
     */
    public function setMounts(array $mounts) : self
    {
        $this->mounts = $mounts;
        return $this;
    }
    /**
     * 
     *
     * @return PluginEnv[]
     */
    public function getEnv() : array
    {
        return $this->env;
    }
    /**
     * 
     *
     * @param PluginEnv[] $env
     *
     * @return self
     */
    public function setEnv(array $env) : self
    {
        $this->env = $env;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigArgs
     */
    public function getArgs() : PluginConfigArgs
    {
        return $this->args;
    }
    /**
     * 
     *
     * @param PluginConfigArgs $args
     *
     * @return self
     */
    public function setArgs(PluginConfigArgs $args) : self
    {
        $this->args = $args;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigRootfs
     */
    public function getRootfs() : PluginConfigRootfs
    {
        return $this->rootfs;
    }
    /**
     * 
     *
     * @param PluginConfigRootfs $rootfs
     *
     * @return self
     */
    public function setRootfs(PluginConfigRootfs $rootfs) : self
    {
        $this->rootfs = $rootfs;
        return $this;
    }
}