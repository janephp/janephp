<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsInstanceSize extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $bandwidthAllowanceGib;
    /**
     * @var string
     */
    protected $cpuType = 'UNSPECIFIED';
    /**
     * @var string
     */
    protected $cpus;
    /**
     * @var bool
     */
    protected $deprecationIntent;
    /**
     * @var string
     */
    protected $memoryBytes;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $scalable;
    /**
     * @var bool
     */
    protected $singleInstanceOnly;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @deprecated
     *
     * @var string
     */
    protected $tierDowngradeTo;
    /**
     * @var string
     */
    protected $tierSlug;
    /**
     * @deprecated
     *
     * @var string
     */
    protected $tierUpgradeTo;
    /**
     * @var string
     */
    protected $usdPerMonth;
    /**
     * @var string
     */
    protected $usdPerSecond;
    /**
     * @return string
     */
    public function getBandwidthAllowanceGib(): string
    {
        return $this->bandwidthAllowanceGib;
    }
    /**
     * @param string $bandwidthAllowanceGib
     *
     * @return self
     */
    public function setBandwidthAllowanceGib(string $bandwidthAllowanceGib): self
    {
        $this->initialized['bandwidthAllowanceGib'] = true;
        $this->bandwidthAllowanceGib = $bandwidthAllowanceGib;
        return $this;
    }
    /**
     * @return string
     */
    public function getCpuType(): string
    {
        return $this->cpuType;
    }
    /**
     * @param string $cpuType
     *
     * @return self
     */
    public function setCpuType(string $cpuType): self
    {
        $this->initialized['cpuType'] = true;
        $this->cpuType = $cpuType;
        return $this;
    }
    /**
     * @return string
     */
    public function getCpus(): string
    {
        return $this->cpus;
    }
    /**
     * @param string $cpus
     *
     * @return self
     */
    public function setCpus(string $cpus): self
    {
        $this->initialized['cpus'] = true;
        $this->cpus = $cpus;
        return $this;
    }
    /**
     * @return bool
     */
    public function getDeprecationIntent(): bool
    {
        return $this->deprecationIntent;
    }
    /**
     * @param bool $deprecationIntent
     *
     * @return self
     */
    public function setDeprecationIntent(bool $deprecationIntent): self
    {
        $this->initialized['deprecationIntent'] = true;
        $this->deprecationIntent = $deprecationIntent;
        return $this;
    }
    /**
     * @return string
     */
    public function getMemoryBytes(): string
    {
        return $this->memoryBytes;
    }
    /**
     * @param string $memoryBytes
     *
     * @return self
     */
    public function setMemoryBytes(string $memoryBytes): self
    {
        $this->initialized['memoryBytes'] = true;
        $this->memoryBytes = $memoryBytes;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return bool
     */
    public function getScalable(): bool
    {
        return $this->scalable;
    }
    /**
     * @param bool $scalable
     *
     * @return self
     */
    public function setScalable(bool $scalable): self
    {
        $this->initialized['scalable'] = true;
        $this->scalable = $scalable;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSingleInstanceOnly(): bool
    {
        return $this->singleInstanceOnly;
    }
    /**
     * @param bool $singleInstanceOnly
     *
     * @return self
     */
    public function setSingleInstanceOnly(bool $singleInstanceOnly): self
    {
        $this->initialized['singleInstanceOnly'] = true;
        $this->singleInstanceOnly = $singleInstanceOnly;
        return $this;
    }
    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
    /**
     * @deprecated
     *
     * @return string
     */
    public function getTierDowngradeTo(): string
    {
        return $this->tierDowngradeTo;
    }
    /**
     * @param string $tierDowngradeTo
     *
     * @deprecated
     *
     * @return self
     */
    public function setTierDowngradeTo(string $tierDowngradeTo): self
    {
        $this->initialized['tierDowngradeTo'] = true;
        $this->tierDowngradeTo = $tierDowngradeTo;
        return $this;
    }
    /**
     * @return string
     */
    public function getTierSlug(): string
    {
        return $this->tierSlug;
    }
    /**
     * @param string $tierSlug
     *
     * @return self
     */
    public function setTierSlug(string $tierSlug): self
    {
        $this->initialized['tierSlug'] = true;
        $this->tierSlug = $tierSlug;
        return $this;
    }
    /**
     * @deprecated
     *
     * @return string
     */
    public function getTierUpgradeTo(): string
    {
        return $this->tierUpgradeTo;
    }
    /**
     * @param string $tierUpgradeTo
     *
     * @deprecated
     *
     * @return self
     */
    public function setTierUpgradeTo(string $tierUpgradeTo): self
    {
        $this->initialized['tierUpgradeTo'] = true;
        $this->tierUpgradeTo = $tierUpgradeTo;
        return $this;
    }
    /**
     * @return string
     */
    public function getUsdPerMonth(): string
    {
        return $this->usdPerMonth;
    }
    /**
     * @param string $usdPerMonth
     *
     * @return self
     */
    public function setUsdPerMonth(string $usdPerMonth): self
    {
        $this->initialized['usdPerMonth'] = true;
        $this->usdPerMonth = $usdPerMonth;
        return $this;
    }
    /**
     * @return string
     */
    public function getUsdPerSecond(): string
    {
        return $this->usdPerSecond;
    }
    /**
     * @param string $usdPerSecond
     *
     * @return self
     */
    public function setUsdPerSecond(string $usdPerSecond): self
    {
        $this->initialized['usdPerSecond'] = true;
        $this->usdPerSecond = $usdPerSecond;
        return $this;
    }
}