<?php

namespace Docker\Api\Model;

class SystemVersion
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var SystemVersionPlatform
     */
    protected $platform;
    /**
     * Information about system components
     *
     * @var SystemVersionComponentsItem[]
     */
    protected $components;
    /**
     * The version of the daemon
     *
     * @var string
     */
    protected $version;
    /**
     * The default (and highest) API version that is supported by the daemon
     *
     * @var string
     */
    protected $apiVersion;
    /**
     * The minimum API version that is supported by the daemon
     *
     * @var string
     */
    protected $minAPIVersion;
    /**
     * The Git commit of the source code that was used to build the daemon
     *
     * @var string
     */
    protected $gitCommit;
    /**
    * The version Go used to compile the daemon, and the version of the Go
    runtime in use.
    
    *
    * @var string
    */
    protected $goVersion;
    /**
     * The operating system that the daemon is running on ("linux" or "windows")
     *
     * @var string
     */
    protected $os;
    /**
     * The architecture that the daemon is running on
     *
     * @var string
     */
    protected $arch;
    /**
    * The kernel version (`uname -r`) that the daemon is running on.
    
    This field is omitted when empty.
    
    *
    * @var string
    */
    protected $kernelVersion;
    /**
    * Indicates if the daemon is started with experimental features enabled.
    
    This field is omitted when empty / false.
    
    *
    * @var bool
    */
    protected $experimental;
    /**
     * The date and time that the daemon was compiled.
     *
     * @var string
     */
    protected $buildTime;
    /**
     * 
     *
     * @return SystemVersionPlatform
     */
    public function getPlatform() : SystemVersionPlatform
    {
        return $this->platform;
    }
    /**
     * 
     *
     * @param SystemVersionPlatform $platform
     *
     * @return self
     */
    public function setPlatform(SystemVersionPlatform $platform) : self
    {
        $this->initialized['platform'] = true;
        $this->platform = $platform;
        return $this;
    }
    /**
     * Information about system components
     *
     * @return SystemVersionComponentsItem[]
     */
    public function getComponents() : array
    {
        return $this->components;
    }
    /**
     * Information about system components
     *
     * @param SystemVersionComponentsItem[] $components
     *
     * @return self
     */
    public function setComponents(array $components) : self
    {
        $this->initialized['components'] = true;
        $this->components = $components;
        return $this;
    }
    /**
     * The version of the daemon
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * The version of the daemon
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * The default (and highest) API version that is supported by the daemon
     *
     * @return string
     */
    public function getApiVersion() : string
    {
        return $this->apiVersion;
    }
    /**
     * The default (and highest) API version that is supported by the daemon
     *
     * @param string $apiVersion
     *
     * @return self
     */
    public function setApiVersion(string $apiVersion) : self
    {
        $this->initialized['apiVersion'] = true;
        $this->apiVersion = $apiVersion;
        return $this;
    }
    /**
     * The minimum API version that is supported by the daemon
     *
     * @return string
     */
    public function getMinAPIVersion() : string
    {
        return $this->minAPIVersion;
    }
    /**
     * The minimum API version that is supported by the daemon
     *
     * @param string $minAPIVersion
     *
     * @return self
     */
    public function setMinAPIVersion(string $minAPIVersion) : self
    {
        $this->initialized['minAPIVersion'] = true;
        $this->minAPIVersion = $minAPIVersion;
        return $this;
    }
    /**
     * The Git commit of the source code that was used to build the daemon
     *
     * @return string
     */
    public function getGitCommit() : string
    {
        return $this->gitCommit;
    }
    /**
     * The Git commit of the source code that was used to build the daemon
     *
     * @param string $gitCommit
     *
     * @return self
     */
    public function setGitCommit(string $gitCommit) : self
    {
        $this->initialized['gitCommit'] = true;
        $this->gitCommit = $gitCommit;
        return $this;
    }
    /**
    * The version Go used to compile the daemon, and the version of the Go
    runtime in use.
    
    *
    * @return string
    */
    public function getGoVersion() : string
    {
        return $this->goVersion;
    }
    /**
    * The version Go used to compile the daemon, and the version of the Go
    runtime in use.
    
    *
    * @param string $goVersion
    *
    * @return self
    */
    public function setGoVersion(string $goVersion) : self
    {
        $this->initialized['goVersion'] = true;
        $this->goVersion = $goVersion;
        return $this;
    }
    /**
     * The operating system that the daemon is running on ("linux" or "windows")
     *
     * @return string
     */
    public function getOs() : string
    {
        return $this->os;
    }
    /**
     * The operating system that the daemon is running on ("linux" or "windows")
     *
     * @param string $os
     *
     * @return self
     */
    public function setOs(string $os) : self
    {
        $this->initialized['os'] = true;
        $this->os = $os;
        return $this;
    }
    /**
     * The architecture that the daemon is running on
     *
     * @return string
     */
    public function getArch() : string
    {
        return $this->arch;
    }
    /**
     * The architecture that the daemon is running on
     *
     * @param string $arch
     *
     * @return self
     */
    public function setArch(string $arch) : self
    {
        $this->initialized['arch'] = true;
        $this->arch = $arch;
        return $this;
    }
    /**
    * The kernel version (`uname -r`) that the daemon is running on.
    
    This field is omitted when empty.
    
    *
    * @return string
    */
    public function getKernelVersion() : string
    {
        return $this->kernelVersion;
    }
    /**
    * The kernel version (`uname -r`) that the daemon is running on.
    
    This field is omitted when empty.
    
    *
    * @param string $kernelVersion
    *
    * @return self
    */
    public function setKernelVersion(string $kernelVersion) : self
    {
        $this->initialized['kernelVersion'] = true;
        $this->kernelVersion = $kernelVersion;
        return $this;
    }
    /**
    * Indicates if the daemon is started with experimental features enabled.
    
    This field is omitted when empty / false.
    
    *
    * @return bool
    */
    public function getExperimental() : bool
    {
        return $this->experimental;
    }
    /**
    * Indicates if the daemon is started with experimental features enabled.
    
    This field is omitted when empty / false.
    
    *
    * @param bool $experimental
    *
    * @return self
    */
    public function setExperimental(bool $experimental) : self
    {
        $this->initialized['experimental'] = true;
        $this->experimental = $experimental;
        return $this;
    }
    /**
     * The date and time that the daemon was compiled.
     *
     * @return string
     */
    public function getBuildTime() : string
    {
        return $this->buildTime;
    }
    /**
     * The date and time that the daemon was compiled.
     *
     * @param string $buildTime
     *
     * @return self
     */
    public function setBuildTime(string $buildTime) : self
    {
        $this->initialized['buildTime'] = true;
        $this->buildTime = $buildTime;
        return $this;
    }
}