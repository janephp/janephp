<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Size implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A human-readable string that is used to uniquely identify each size.
     *
     * @var string
     */
    protected $slug;
    /**
     * The amount of RAM allocated to Droplets created of this size. The value is represented in megabytes.
     *
     * @var int
     */
    protected $memory;
    /**
     * The number of CPUs allocated to Droplets of this size.
     *
     * @var int
     */
    protected $vcpus;
    /**
     * The amount of disk space set aside for Droplets of this size. The value is represented in gigabytes.
     *
     * @var int
     */
    protected $disk;
    /**
     * The amount of transfer bandwidth that is available for Droplets created in this size. This only counts traffic on the public interface. The value is given in terabytes.
     *
     * @var float
     */
    protected $transfer;
    /**
     * This attribute describes the monthly cost of this Droplet size if the Droplet is kept for an entire month. The value is measured in US dollars.
     *
     * @var float
     */
    protected $priceMonthly;
    /**
     * This describes the price of the Droplet size as measured hourly. The value is measured in US dollars.
     *
     * @var float
     */
    protected $priceHourly;
    /**
     * An array containing the region slugs where this size is available for Droplet creates.
     *
     * @var list<string>
     */
    protected $regions;
    /**
     * This is a boolean value that represents whether new Droplets can be created with this size.
     *
     * @var bool
     */
    protected $available = true;
    /**
     * A string describing the class of Droplets created from this size. For example: Basic, General Purpose, CPU-Optimized, Memory-Optimized, or Storage-Optimized.
     *
     * @var string
     */
    protected $description;
    /**
     * An array of objects containing information about the disks available to Droplets created with this size.
     *
     * @var list<DiskInfo>
     */
    protected $diskInfo;
    /**
     * An object containing information about the GPU capabilities of Droplets created with this size.
     *
     * @var GpuInfo
     */
    protected $gpuInfo;
    /**
     * A human-readable string that is used to uniquely identify each size.
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * A human-readable string that is used to uniquely identify each size.
     *
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
     * The amount of RAM allocated to Droplets created of this size. The value is represented in megabytes.
     *
     * @return int
     */
    public function getMemory(): int
    {
        return $this->memory;
    }
    /**
     * The amount of RAM allocated to Droplets created of this size. The value is represented in megabytes.
     *
     * @param int $memory
     *
     * @return self
     */
    public function setMemory(int $memory): self
    {
        $this->initialized['memory'] = true;
        $this->memory = $memory;
        return $this;
    }
    /**
     * The number of CPUs allocated to Droplets of this size.
     *
     * @return int
     */
    public function getVcpus(): int
    {
        return $this->vcpus;
    }
    /**
     * The number of CPUs allocated to Droplets of this size.
     *
     * @param int $vcpus
     *
     * @return self
     */
    public function setVcpus(int $vcpus): self
    {
        $this->initialized['vcpus'] = true;
        $this->vcpus = $vcpus;
        return $this;
    }
    /**
     * The amount of disk space set aside for Droplets of this size. The value is represented in gigabytes.
     *
     * @return int
     */
    public function getDisk(): int
    {
        return $this->disk;
    }
    /**
     * The amount of disk space set aside for Droplets of this size. The value is represented in gigabytes.
     *
     * @param int $disk
     *
     * @return self
     */
    public function setDisk(int $disk): self
    {
        $this->initialized['disk'] = true;
        $this->disk = $disk;
        return $this;
    }
    /**
     * The amount of transfer bandwidth that is available for Droplets created in this size. This only counts traffic on the public interface. The value is given in terabytes.
     *
     * @return float
     */
    public function getTransfer(): float
    {
        return $this->transfer;
    }
    /**
     * The amount of transfer bandwidth that is available for Droplets created in this size. This only counts traffic on the public interface. The value is given in terabytes.
     *
     * @param float $transfer
     *
     * @return self
     */
    public function setTransfer(float $transfer): self
    {
        $this->initialized['transfer'] = true;
        $this->transfer = $transfer;
        return $this;
    }
    /**
     * This attribute describes the monthly cost of this Droplet size if the Droplet is kept for an entire month. The value is measured in US dollars.
     *
     * @return float
     */
    public function getPriceMonthly(): float
    {
        return $this->priceMonthly;
    }
    /**
     * This attribute describes the monthly cost of this Droplet size if the Droplet is kept for an entire month. The value is measured in US dollars.
     *
     * @param float $priceMonthly
     *
     * @return self
     */
    public function setPriceMonthly(float $priceMonthly): self
    {
        $this->initialized['priceMonthly'] = true;
        $this->priceMonthly = $priceMonthly;
        return $this;
    }
    /**
     * This describes the price of the Droplet size as measured hourly. The value is measured in US dollars.
     *
     * @return float
     */
    public function getPriceHourly(): float
    {
        return $this->priceHourly;
    }
    /**
     * This describes the price of the Droplet size as measured hourly. The value is measured in US dollars.
     *
     * @param float $priceHourly
     *
     * @return self
     */
    public function setPriceHourly(float $priceHourly): self
    {
        $this->initialized['priceHourly'] = true;
        $this->priceHourly = $priceHourly;
        return $this;
    }
    /**
     * An array containing the region slugs where this size is available for Droplet creates.
     *
     * @return list<string>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }
    /**
     * An array containing the region slugs where this size is available for Droplet creates.
     *
     * @param list<string> $regions
     *
     * @return self
     */
    public function setRegions(array $regions): self
    {
        $this->initialized['regions'] = true;
        $this->regions = $regions;
        return $this;
    }
    /**
     * This is a boolean value that represents whether new Droplets can be created with this size.
     *
     * @return bool
     */
    public function getAvailable(): bool
    {
        return $this->available;
    }
    /**
     * This is a boolean value that represents whether new Droplets can be created with this size.
     *
     * @param bool $available
     *
     * @return self
     */
    public function setAvailable(bool $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
        return $this;
    }
    /**
     * A string describing the class of Droplets created from this size. For example: Basic, General Purpose, CPU-Optimized, Memory-Optimized, or Storage-Optimized.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * A string describing the class of Droplets created from this size. For example: Basic, General Purpose, CPU-Optimized, Memory-Optimized, or Storage-Optimized.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * An array of objects containing information about the disks available to Droplets created with this size.
     *
     * @return list<DiskInfo>
     */
    public function getDiskInfo(): array
    {
        return $this->diskInfo;
    }
    /**
     * An array of objects containing information about the disks available to Droplets created with this size.
     *
     * @param list<DiskInfo> $diskInfo
     *
     * @return self
     */
    public function setDiskInfo(array $diskInfo): self
    {
        $this->initialized['diskInfo'] = true;
        $this->diskInfo = $diskInfo;
        return $this;
    }
    /**
     * An object containing information about the GPU capabilities of Droplets created with this size.
     *
     * @return GpuInfo
     */
    public function getGpuInfo(): GpuInfo
    {
        return $this->gpuInfo;
    }
    /**
     * An object containing information about the GPU capabilities of Droplets created with this size.
     *
     * @param GpuInfo $gpuInfo
     *
     * @return self
     */
    public function setGpuInfo(GpuInfo $gpuInfo): self
    {
        $this->initialized['gpuInfo'] = true;
        $this->gpuInfo = $gpuInfo;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['slug' => ['slug', 'getSlug', 'setSlug'], 'memory' => ['memory', 'getMemory', 'setMemory'], 'vcpus' => ['vcpus', 'getVcpus', 'setVcpus'], 'disk' => ['disk', 'getDisk', 'setDisk'], 'transfer' => ['transfer', 'getTransfer', 'setTransfer'], 'priceMonthly' => ['price_monthly', 'getPriceMonthly', 'setPriceMonthly'], 'priceHourly' => ['price_hourly', 'getPriceHourly', 'setPriceHourly'], 'regions' => ['regions', 'getRegions', 'setRegions'], 'available' => ['available', 'getAvailable', 'setAvailable'], 'description' => ['description', 'getDescription', 'setDescription'], 'diskInfo' => ['disk_info', 'getDiskInfo', 'setDiskInfo'], 'gpuInfo' => ['gpu_info', 'getGpuInfo', 'setGpuInfo']];
    }
}