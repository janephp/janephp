<?php

namespace Docker\Api\Model;

class OCIPlatform
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
     * The CPU architecture, for example `amd64` or `ppc64`.
     *
     * @var string
     */
    protected $architecture;
    /**
     * The operating system, for example `linux` or `windows`.
     *
     * @var string
     */
    protected $os;
    /**
    * Optional field specifying the operating system version, for example on
    Windows `10.0.19041.1165`.
    
    *
    * @var string
    */
    protected $osVersion;
    /**
    * Optional field specifying an array of strings, each listing a required
    OS feature (for example on Windows `win32k`).
    
    *
    * @var string[]
    */
    protected $osFeatures;
    /**
    * Optional field specifying a variant of the CPU, for example `v7` to
    specify ARMv7 when architecture is `arm`.
    
    *
    * @var string
    */
    protected $variant;
    /**
     * The CPU architecture, for example `amd64` or `ppc64`.
     *
     * @return string
     */
    public function getArchitecture() : string
    {
        return $this->architecture;
    }
    /**
     * The CPU architecture, for example `amd64` or `ppc64`.
     *
     * @param string $architecture
     *
     * @return self
     */
    public function setArchitecture(string $architecture) : self
    {
        $this->initialized['architecture'] = true;
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * The operating system, for example `linux` or `windows`.
     *
     * @return string
     */
    public function getOs() : string
    {
        return $this->os;
    }
    /**
     * The operating system, for example `linux` or `windows`.
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
    * Optional field specifying the operating system version, for example on
    Windows `10.0.19041.1165`.
    
    *
    * @return string
    */
    public function getOsVersion() : string
    {
        return $this->osVersion;
    }
    /**
    * Optional field specifying the operating system version, for example on
    Windows `10.0.19041.1165`.
    
    *
    * @param string $osVersion
    *
    * @return self
    */
    public function setOsVersion(string $osVersion) : self
    {
        $this->initialized['osVersion'] = true;
        $this->osVersion = $osVersion;
        return $this;
    }
    /**
    * Optional field specifying an array of strings, each listing a required
    OS feature (for example on Windows `win32k`).
    
    *
    * @return string[]
    */
    public function getOsFeatures() : array
    {
        return $this->osFeatures;
    }
    /**
    * Optional field specifying an array of strings, each listing a required
    OS feature (for example on Windows `win32k`).
    
    *
    * @param string[] $osFeatures
    *
    * @return self
    */
    public function setOsFeatures(array $osFeatures) : self
    {
        $this->initialized['osFeatures'] = true;
        $this->osFeatures = $osFeatures;
        return $this;
    }
    /**
    * Optional field specifying a variant of the CPU, for example `v7` to
    specify ARMv7 when architecture is `arm`.
    
    *
    * @return string
    */
    public function getVariant() : string
    {
        return $this->variant;
    }
    /**
    * Optional field specifying a variant of the CPU, for example `v7` to
    specify ARMv7 when architecture is `arm`.
    
    *
    * @param string $variant
    *
    * @return self
    */
    public function setVariant(string $variant) : self
    {
        $this->initialized['variant'] = true;
        $this->variant = $variant;
        return $this;
    }
}