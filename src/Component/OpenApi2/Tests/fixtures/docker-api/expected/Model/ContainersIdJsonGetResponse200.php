<?php

namespace Docker\Api\Model;

class ContainersIdJsonGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ID of the container
     *
     * @var string
     */
    protected $id;
    /**
     * The time the container was created
     *
     * @var string
     */
    protected $created;
    /**
     * The path to the command being run
     *
     * @var string
     */
    protected $path;
    /**
     * The arguments to the command being run
     *
     * @var string[]
     */
    protected $args;
    /**
    * ContainerState stores container's running state. It's part of ContainerJSONBase
    and will be returned by the "inspect" command.
    
    *
    * @var ContainerState
    */
    protected $state;
    /**
     * The container's image ID
     *
     * @var string
     */
    protected $image;
    /**
     * 
     *
     * @var string
     */
    protected $resolvConfPath;
    /**
     * 
     *
     * @var string
     */
    protected $hostnamePath;
    /**
     * 
     *
     * @var string
     */
    protected $hostsPath;
    /**
     * 
     *
     * @var string
     */
    protected $logPath;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $restartCount;
    /**
     * 
     *
     * @var string
     */
    protected $driver;
    /**
     * 
     *
     * @var string
     */
    protected $platform;
    /**
     * 
     *
     * @var string
     */
    protected $mountLabel;
    /**
     * 
     *
     * @var string
     */
    protected $processLabel;
    /**
     * 
     *
     * @var string
     */
    protected $appArmorProfile;
    /**
     * IDs of exec instances that are running in the container.
     *
     * @var string[]|null
     */
    protected $execIDs;
    /**
     * Container configuration that depends on the host we are running on
     *
     * @var HostConfig
     */
    protected $hostConfig;
    /**
     * Information about a container's graph driver.
     *
     * @var GraphDriverData
     */
    protected $graphDriver;
    /**
    * The size of files that have been created or changed by this
    container.
    
    *
    * @var int
    */
    protected $sizeRw;
    /**
     * The total size of all the files in this container.
     *
     * @var int
     */
    protected $sizeRootFs;
    /**
     * 
     *
     * @var MountPoint[]
     */
    protected $mounts;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var ContainerConfig
     */
    protected $config;
    /**
     * NetworkSettings exposes the network settings in the API
     *
     * @var NetworkSettings
     */
    protected $networkSettings;
    /**
     * The ID of the container
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The ID of the container
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The time the container was created
     *
     * @return string
     */
    public function getCreated() : string
    {
        return $this->created;
    }
    /**
     * The time the container was created
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(string $created) : self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * The path to the command being run
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The path to the command being run
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * The arguments to the command being run
     *
     * @return string[]
     */
    public function getArgs() : array
    {
        return $this->args;
    }
    /**
     * The arguments to the command being run
     *
     * @param string[] $args
     *
     * @return self
     */
    public function setArgs(array $args) : self
    {
        $this->initialized['args'] = true;
        $this->args = $args;
        return $this;
    }
    /**
    * ContainerState stores container's running state. It's part of ContainerJSONBase
    and will be returned by the "inspect" command.
    
    *
    * @return ContainerState
    */
    public function getState() : ContainerState
    {
        return $this->state;
    }
    /**
    * ContainerState stores container's running state. It's part of ContainerJSONBase
    and will be returned by the "inspect" command.
    
    *
    * @param ContainerState $state
    *
    * @return self
    */
    public function setState(ContainerState $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * The container's image ID
     *
     * @return string
     */
    public function getImage() : string
    {
        return $this->image;
    }
    /**
     * The container's image ID
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResolvConfPath() : string
    {
        return $this->resolvConfPath;
    }
    /**
     * 
     *
     * @param string $resolvConfPath
     *
     * @return self
     */
    public function setResolvConfPath(string $resolvConfPath) : self
    {
        $this->initialized['resolvConfPath'] = true;
        $this->resolvConfPath = $resolvConfPath;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHostnamePath() : string
    {
        return $this->hostnamePath;
    }
    /**
     * 
     *
     * @param string $hostnamePath
     *
     * @return self
     */
    public function setHostnamePath(string $hostnamePath) : self
    {
        $this->initialized['hostnamePath'] = true;
        $this->hostnamePath = $hostnamePath;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHostsPath() : string
    {
        return $this->hostsPath;
    }
    /**
     * 
     *
     * @param string $hostsPath
     *
     * @return self
     */
    public function setHostsPath(string $hostsPath) : self
    {
        $this->initialized['hostsPath'] = true;
        $this->hostsPath = $hostsPath;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLogPath() : string
    {
        return $this->logPath;
    }
    /**
     * 
     *
     * @param string $logPath
     *
     * @return self
     */
    public function setLogPath(string $logPath) : self
    {
        $this->initialized['logPath'] = true;
        $this->logPath = $logPath;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRestartCount() : int
    {
        return $this->restartCount;
    }
    /**
     * 
     *
     * @param int $restartCount
     *
     * @return self
     */
    public function setRestartCount(int $restartCount) : self
    {
        $this->initialized['restartCount'] = true;
        $this->restartCount = $restartCount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDriver() : string
    {
        return $this->driver;
    }
    /**
     * 
     *
     * @param string $driver
     *
     * @return self
     */
    public function setDriver(string $driver) : self
    {
        $this->initialized['driver'] = true;
        $this->driver = $driver;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlatform() : string
    {
        return $this->platform;
    }
    /**
     * 
     *
     * @param string $platform
     *
     * @return self
     */
    public function setPlatform(string $platform) : self
    {
        $this->initialized['platform'] = true;
        $this->platform = $platform;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMountLabel() : string
    {
        return $this->mountLabel;
    }
    /**
     * 
     *
     * @param string $mountLabel
     *
     * @return self
     */
    public function setMountLabel(string $mountLabel) : self
    {
        $this->initialized['mountLabel'] = true;
        $this->mountLabel = $mountLabel;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProcessLabel() : string
    {
        return $this->processLabel;
    }
    /**
     * 
     *
     * @param string $processLabel
     *
     * @return self
     */
    public function setProcessLabel(string $processLabel) : self
    {
        $this->initialized['processLabel'] = true;
        $this->processLabel = $processLabel;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAppArmorProfile() : string
    {
        return $this->appArmorProfile;
    }
    /**
     * 
     *
     * @param string $appArmorProfile
     *
     * @return self
     */
    public function setAppArmorProfile(string $appArmorProfile) : self
    {
        $this->initialized['appArmorProfile'] = true;
        $this->appArmorProfile = $appArmorProfile;
        return $this;
    }
    /**
     * IDs of exec instances that are running in the container.
     *
     * @return string[]|null
     */
    public function getExecIDs() : ?array
    {
        return $this->execIDs;
    }
    /**
     * IDs of exec instances that are running in the container.
     *
     * @param string[]|null $execIDs
     *
     * @return self
     */
    public function setExecIDs(?array $execIDs) : self
    {
        $this->initialized['execIDs'] = true;
        $this->execIDs = $execIDs;
        return $this;
    }
    /**
     * Container configuration that depends on the host we are running on
     *
     * @return HostConfig
     */
    public function getHostConfig() : HostConfig
    {
        return $this->hostConfig;
    }
    /**
     * Container configuration that depends on the host we are running on
     *
     * @param HostConfig $hostConfig
     *
     * @return self
     */
    public function setHostConfig(HostConfig $hostConfig) : self
    {
        $this->initialized['hostConfig'] = true;
        $this->hostConfig = $hostConfig;
        return $this;
    }
    /**
     * Information about a container's graph driver.
     *
     * @return GraphDriverData
     */
    public function getGraphDriver() : GraphDriverData
    {
        return $this->graphDriver;
    }
    /**
     * Information about a container's graph driver.
     *
     * @param GraphDriverData $graphDriver
     *
     * @return self
     */
    public function setGraphDriver(GraphDriverData $graphDriver) : self
    {
        $this->initialized['graphDriver'] = true;
        $this->graphDriver = $graphDriver;
        return $this;
    }
    /**
    * The size of files that have been created or changed by this
    container.
    
    *
    * @return int
    */
    public function getSizeRw() : int
    {
        return $this->sizeRw;
    }
    /**
    * The size of files that have been created or changed by this
    container.
    
    *
    * @param int $sizeRw
    *
    * @return self
    */
    public function setSizeRw(int $sizeRw) : self
    {
        $this->initialized['sizeRw'] = true;
        $this->sizeRw = $sizeRw;
        return $this;
    }
    /**
     * The total size of all the files in this container.
     *
     * @return int
     */
    public function getSizeRootFs() : int
    {
        return $this->sizeRootFs;
    }
    /**
     * The total size of all the files in this container.
     *
     * @param int $sizeRootFs
     *
     * @return self
     */
    public function setSizeRootFs(int $sizeRootFs) : self
    {
        $this->initialized['sizeRootFs'] = true;
        $this->sizeRootFs = $sizeRootFs;
        return $this;
    }
    /**
     * 
     *
     * @return MountPoint[]
     */
    public function getMounts() : array
    {
        return $this->mounts;
    }
    /**
     * 
     *
     * @param MountPoint[] $mounts
     *
     * @return self
     */
    public function setMounts(array $mounts) : self
    {
        $this->initialized['mounts'] = true;
        $this->mounts = $mounts;
        return $this;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @return ContainerConfig
     */
    public function getConfig() : ContainerConfig
    {
        return $this->config;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @param ContainerConfig $config
     *
     * @return self
     */
    public function setConfig(ContainerConfig $config) : self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * NetworkSettings exposes the network settings in the API
     *
     * @return NetworkSettings
     */
    public function getNetworkSettings() : NetworkSettings
    {
        return $this->networkSettings;
    }
    /**
     * NetworkSettings exposes the network settings in the API
     *
     * @param NetworkSettings $networkSettings
     *
     * @return self
     */
    public function setNetworkSettings(NetworkSettings $networkSettings) : self
    {
        $this->initialized['networkSettings'] = true;
        $this->networkSettings = $networkSettings;
        return $this;
    }
}