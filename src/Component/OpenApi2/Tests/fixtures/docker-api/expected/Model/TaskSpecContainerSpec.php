<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpec
{
    /**
     * The image name to use for the container
     *
     * @var string
     */
    protected $image;
    /**
     * User-defined key/value data.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * The command to be run in the image.
     *
     * @var string[]
     */
    protected $command;
    /**
     * Arguments to the command.
     *
     * @var string[]
     */
    protected $args;
    /**
    * The hostname to use for the container, as a valid
    [RFC 1123](https://tools.ietf.org/html/rfc1123) hostname.
    
    *
    * @var string
    */
    protected $hostname;
    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @var string[]
     */
    protected $env;
    /**
     * The working directory for commands to run in.
     *
     * @var string
     */
    protected $dir;
    /**
     * The user inside the container.
     *
     * @var string
     */
    protected $user;
    /**
     * A list of additional groups that the container process will run as.
     *
     * @var string[]
     */
    protected $groups;
    /**
     * Security options for the container
     *
     * @var TaskSpecContainerSpecPrivileges
     */
    protected $privileges;
    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @var bool
     */
    protected $tTY;
    /**
     * Open `stdin`
     *
     * @var bool
     */
    protected $openStdin;
    /**
     * Mount the container's root filesystem as read only.
     *
     * @var bool
     */
    protected $readOnly;
    /**
    * Specification for mounts to be added to containers created as part
    of the service.
    
    *
    * @var Mount[]
    */
    protected $mounts;
    /**
     * Signal to stop the container.
     *
     * @var string
     */
    protected $stopSignal;
    /**
    * Amount of time to wait for the container to terminate before
    forcefully killing it.
    
    *
    * @var int
    */
    protected $stopGracePeriod;
    /**
     * A test to perform to check that the container is healthy.
     *
     * @var HealthConfig
     */
    protected $healthCheck;
    /**
    * A list of hostname/IP mappings to add to the container's `hosts`
    file. The format of extra hosts is specified in the
    [hosts(5)](http://man7.org/linux/man-pages/man5/hosts.5.html)
    man page:
    
       IP_address canonical_hostname [aliases...]
    
    *
    * @var string[]
    */
    protected $hosts;
    /**
    * Specification for DNS related configurations in resolver configuration
    file (`resolv.conf`).
    
    *
    * @var TaskSpecContainerSpecDNSConfig
    */
    protected $dNSConfig;
    /**
    * Secrets contains references to zero or more secrets that will be
    exposed to the service.
    
    *
    * @var TaskSpecContainerSpecSecretsItem[]
    */
    protected $secrets;
    /**
    * Configs contains references to zero or more configs that will be
    exposed to the service.
    
    *
    * @var TaskSpecContainerSpecConfigsItem[]
    */
    protected $configs;
    /**
    * Isolation technology of the containers running the service.
    (Windows only)
    
    *
    * @var string
    */
    protected $isolation;
    /**
    * Run an init inside the container that forwards signals and reaps
    processes. This field is omitted if empty, and the default (as
    configured on the daemon) is used.
    
    *
    * @var bool|null
    */
    protected $init;
    /**
    * Set kernel namedspaced parameters (sysctls) in the container.
    The Sysctls option on services accepts the same sysctls as the
    are supported on containers. Note that while the same sysctls are
    supported, no guarantees or checks are made about their
    suitability for a clustered environment, and it's up to the user
    to determine whether a given sysctl will work properly in a
    Service.
    
    *
    * @var string[]
    */
    protected $sysctls;
    /**
    * A list of kernel capabilities to add to the default set
    for the container.
    
    *
    * @var string[]
    */
    protected $capabilityAdd;
    /**
    * A list of kernel capabilities to drop from the default set
    for the container.
    
    *
    * @var string[]
    */
    protected $capabilityDrop;
    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`"
     *
     * @var TaskSpecContainerSpecUlimitsItem[]
     */
    protected $ulimits;
    /**
     * The image name to use for the container
     *
     * @return string
     */
    public function getImage() : string
    {
        return $this->image;
    }
    /**
     * The image name to use for the container
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image) : self
    {
        $this->image = $image;
        return $this;
    }
    /**
     * User-defined key/value data.
     *
     * @return string[]
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value data.
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * The command to be run in the image.
     *
     * @return string[]
     */
    public function getCommand() : array
    {
        return $this->command;
    }
    /**
     * The command to be run in the image.
     *
     * @param string[] $command
     *
     * @return self
     */
    public function setCommand(array $command) : self
    {
        $this->command = $command;
        return $this;
    }
    /**
     * Arguments to the command.
     *
     * @return string[]
     */
    public function getArgs() : array
    {
        return $this->args;
    }
    /**
     * Arguments to the command.
     *
     * @param string[] $args
     *
     * @return self
     */
    public function setArgs(array $args) : self
    {
        $this->args = $args;
        return $this;
    }
    /**
    * The hostname to use for the container, as a valid
    [RFC 1123](https://tools.ietf.org/html/rfc1123) hostname.
    
    *
    * @return string
    */
    public function getHostname() : string
    {
        return $this->hostname;
    }
    /**
    * The hostname to use for the container, as a valid
    [RFC 1123](https://tools.ietf.org/html/rfc1123) hostname.
    
    *
    * @param string $hostname
    *
    * @return self
    */
    public function setHostname(string $hostname) : self
    {
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @return string[]
     */
    public function getEnv() : array
    {
        return $this->env;
    }
    /**
     * A list of environment variables in the form `VAR=value`.
     *
     * @param string[] $env
     *
     * @return self
     */
    public function setEnv(array $env) : self
    {
        $this->env = $env;
        return $this;
    }
    /**
     * The working directory for commands to run in.
     *
     * @return string
     */
    public function getDir() : string
    {
        return $this->dir;
    }
    /**
     * The working directory for commands to run in.
     *
     * @param string $dir
     *
     * @return self
     */
    public function setDir(string $dir) : self
    {
        $this->dir = $dir;
        return $this;
    }
    /**
     * The user inside the container.
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * The user inside the container.
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * A list of additional groups that the container process will run as.
     *
     * @return string[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * A list of additional groups that the container process will run as.
     *
     * @param string[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->groups = $groups;
        return $this;
    }
    /**
     * Security options for the container
     *
     * @return TaskSpecContainerSpecPrivileges
     */
    public function getPrivileges() : TaskSpecContainerSpecPrivileges
    {
        return $this->privileges;
    }
    /**
     * Security options for the container
     *
     * @param TaskSpecContainerSpecPrivileges $privileges
     *
     * @return self
     */
    public function setPrivileges(TaskSpecContainerSpecPrivileges $privileges) : self
    {
        $this->privileges = $privileges;
        return $this;
    }
    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @return bool
     */
    public function getTTY() : bool
    {
        return $this->tTY;
    }
    /**
     * Whether a pseudo-TTY should be allocated.
     *
     * @param bool $tTY
     *
     * @return self
     */
    public function setTTY(bool $tTY) : self
    {
        $this->tTY = $tTY;
        return $this;
    }
    /**
     * Open `stdin`
     *
     * @return bool
     */
    public function getOpenStdin() : bool
    {
        return $this->openStdin;
    }
    /**
     * Open `stdin`
     *
     * @param bool $openStdin
     *
     * @return self
     */
    public function setOpenStdin(bool $openStdin) : self
    {
        $this->openStdin = $openStdin;
        return $this;
    }
    /**
     * Mount the container's root filesystem as read only.
     *
     * @return bool
     */
    public function getReadOnly() : bool
    {
        return $this->readOnly;
    }
    /**
     * Mount the container's root filesystem as read only.
     *
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly) : self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
    * Specification for mounts to be added to containers created as part
    of the service.
    
    *
    * @return Mount[]
    */
    public function getMounts() : array
    {
        return $this->mounts;
    }
    /**
    * Specification for mounts to be added to containers created as part
    of the service.
    
    *
    * @param Mount[] $mounts
    *
    * @return self
    */
    public function setMounts(array $mounts) : self
    {
        $this->mounts = $mounts;
        return $this;
    }
    /**
     * Signal to stop the container.
     *
     * @return string
     */
    public function getStopSignal() : string
    {
        return $this->stopSignal;
    }
    /**
     * Signal to stop the container.
     *
     * @param string $stopSignal
     *
     * @return self
     */
    public function setStopSignal(string $stopSignal) : self
    {
        $this->stopSignal = $stopSignal;
        return $this;
    }
    /**
    * Amount of time to wait for the container to terminate before
    forcefully killing it.
    
    *
    * @return int
    */
    public function getStopGracePeriod() : int
    {
        return $this->stopGracePeriod;
    }
    /**
    * Amount of time to wait for the container to terminate before
    forcefully killing it.
    
    *
    * @param int $stopGracePeriod
    *
    * @return self
    */
    public function setStopGracePeriod(int $stopGracePeriod) : self
    {
        $this->stopGracePeriod = $stopGracePeriod;
        return $this;
    }
    /**
     * A test to perform to check that the container is healthy.
     *
     * @return HealthConfig
     */
    public function getHealthCheck() : HealthConfig
    {
        return $this->healthCheck;
    }
    /**
     * A test to perform to check that the container is healthy.
     *
     * @param HealthConfig $healthCheck
     *
     * @return self
     */
    public function setHealthCheck(HealthConfig $healthCheck) : self
    {
        $this->healthCheck = $healthCheck;
        return $this;
    }
    /**
    * A list of hostname/IP mappings to add to the container's `hosts`
    file. The format of extra hosts is specified in the
    [hosts(5)](http://man7.org/linux/man-pages/man5/hosts.5.html)
    man page:
    
       IP_address canonical_hostname [aliases...]
    
    *
    * @return string[]
    */
    public function getHosts() : array
    {
        return $this->hosts;
    }
    /**
    * A list of hostname/IP mappings to add to the container's `hosts`
    file. The format of extra hosts is specified in the
    [hosts(5)](http://man7.org/linux/man-pages/man5/hosts.5.html)
    man page:
    
       IP_address canonical_hostname [aliases...]
    
    *
    * @param string[] $hosts
    *
    * @return self
    */
    public function setHosts(array $hosts) : self
    {
        $this->hosts = $hosts;
        return $this;
    }
    /**
    * Specification for DNS related configurations in resolver configuration
    file (`resolv.conf`).
    
    *
    * @return TaskSpecContainerSpecDNSConfig
    */
    public function getDNSConfig() : TaskSpecContainerSpecDNSConfig
    {
        return $this->dNSConfig;
    }
    /**
    * Specification for DNS related configurations in resolver configuration
    file (`resolv.conf`).
    
    *
    * @param TaskSpecContainerSpecDNSConfig $dNSConfig
    *
    * @return self
    */
    public function setDNSConfig(TaskSpecContainerSpecDNSConfig $dNSConfig) : self
    {
        $this->dNSConfig = $dNSConfig;
        return $this;
    }
    /**
    * Secrets contains references to zero or more secrets that will be
    exposed to the service.
    
    *
    * @return TaskSpecContainerSpecSecretsItem[]
    */
    public function getSecrets() : array
    {
        return $this->secrets;
    }
    /**
    * Secrets contains references to zero or more secrets that will be
    exposed to the service.
    
    *
    * @param TaskSpecContainerSpecSecretsItem[] $secrets
    *
    * @return self
    */
    public function setSecrets(array $secrets) : self
    {
        $this->secrets = $secrets;
        return $this;
    }
    /**
    * Configs contains references to zero or more configs that will be
    exposed to the service.
    
    *
    * @return TaskSpecContainerSpecConfigsItem[]
    */
    public function getConfigs() : array
    {
        return $this->configs;
    }
    /**
    * Configs contains references to zero or more configs that will be
    exposed to the service.
    
    *
    * @param TaskSpecContainerSpecConfigsItem[] $configs
    *
    * @return self
    */
    public function setConfigs(array $configs) : self
    {
        $this->configs = $configs;
        return $this;
    }
    /**
    * Isolation technology of the containers running the service.
    (Windows only)
    
    *
    * @return string
    */
    public function getIsolation() : string
    {
        return $this->isolation;
    }
    /**
    * Isolation technology of the containers running the service.
    (Windows only)
    
    *
    * @param string $isolation
    *
    * @return self
    */
    public function setIsolation(string $isolation) : self
    {
        $this->isolation = $isolation;
        return $this;
    }
    /**
    * Run an init inside the container that forwards signals and reaps
    processes. This field is omitted if empty, and the default (as
    configured on the daemon) is used.
    
    *
    * @return bool|null
    */
    public function getInit() : ?bool
    {
        return $this->init;
    }
    /**
    * Run an init inside the container that forwards signals and reaps
    processes. This field is omitted if empty, and the default (as
    configured on the daemon) is used.
    
    *
    * @param bool|null $init
    *
    * @return self
    */
    public function setInit(?bool $init) : self
    {
        $this->init = $init;
        return $this;
    }
    /**
    * Set kernel namedspaced parameters (sysctls) in the container.
    The Sysctls option on services accepts the same sysctls as the
    are supported on containers. Note that while the same sysctls are
    supported, no guarantees or checks are made about their
    suitability for a clustered environment, and it's up to the user
    to determine whether a given sysctl will work properly in a
    Service.
    
    *
    * @return string[]
    */
    public function getSysctls() : iterable
    {
        return $this->sysctls;
    }
    /**
    * Set kernel namedspaced parameters (sysctls) in the container.
    The Sysctls option on services accepts the same sysctls as the
    are supported on containers. Note that while the same sysctls are
    supported, no guarantees or checks are made about their
    suitability for a clustered environment, and it's up to the user
    to determine whether a given sysctl will work properly in a
    Service.
    
    *
    * @param string[] $sysctls
    *
    * @return self
    */
    public function setSysctls(iterable $sysctls) : self
    {
        $this->sysctls = $sysctls;
        return $this;
    }
    /**
    * A list of kernel capabilities to add to the default set
    for the container.
    
    *
    * @return string[]
    */
    public function getCapabilityAdd() : array
    {
        return $this->capabilityAdd;
    }
    /**
    * A list of kernel capabilities to add to the default set
    for the container.
    
    *
    * @param string[] $capabilityAdd
    *
    * @return self
    */
    public function setCapabilityAdd(array $capabilityAdd) : self
    {
        $this->capabilityAdd = $capabilityAdd;
        return $this;
    }
    /**
    * A list of kernel capabilities to drop from the default set
    for the container.
    
    *
    * @return string[]
    */
    public function getCapabilityDrop() : array
    {
        return $this->capabilityDrop;
    }
    /**
    * A list of kernel capabilities to drop from the default set
    for the container.
    
    *
    * @param string[] $capabilityDrop
    *
    * @return self
    */
    public function setCapabilityDrop(array $capabilityDrop) : self
    {
        $this->capabilityDrop = $capabilityDrop;
        return $this;
    }
    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`"
     *
     * @return TaskSpecContainerSpecUlimitsItem[]
     */
    public function getUlimits() : array
    {
        return $this->ulimits;
    }
    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`"
     *
     * @param TaskSpecContainerSpecUlimitsItem[] $ulimits
     *
     * @return self
     */
    public function setUlimits(array $ulimits) : self
    {
        $this->ulimits = $ulimits;
        return $this;
    }
}