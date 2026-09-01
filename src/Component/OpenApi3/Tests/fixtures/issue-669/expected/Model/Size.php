<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Size implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A human-readable string that is used to uniquely identify each size.
     *
     * @var string
     */
    public string $slug;
    /**
     * The amount of RAM allocated to Droplets created of this size. The value is represented in megabytes.
     *
     * @var int
     */
    public int $memory;
    /**
     * The number of CPUs allocated to Droplets of this size.
     *
     * @var int
     */
    public int $vcpus;
    /**
     * The amount of disk space set aside for Droplets of this size. The value is represented in gigabytes.
     *
     * @var int
     */
    public int $disk;
    /**
     * The amount of transfer bandwidth that is available for Droplets created in this size. This only counts traffic on the public interface. The value is given in terabytes.
     *
     * @var float
     */
    public float $transfer;
    /**
     * This attribute describes the monthly cost of this Droplet size if the Droplet is kept for an entire month. The value is measured in US dollars.
     *
     * @var float
     */
    public float $priceMonthly;
    /**
     * This describes the price of the Droplet size as measured hourly. The value is measured in US dollars.
     *
     * @var float
     */
    public float $priceHourly;
    /**
     * An array containing the region slugs where this size is available for Droplet creates.
     *
     * @var list<string>
     */
    public array $regions;
    /**
     * This is a boolean value that represents whether new Droplets can be created with this size.
     *
     * @var bool
     */
    public bool $available = true;
    /**
     * A string describing the class of Droplets created from this size. For example: Basic, General Purpose, CPU-Optimized, Memory-Optimized, or Storage-Optimized.
     *
     * @var string
     */
    public string $description;
    /**
     * An array of objects containing information about the disks available to Droplets created with this size.
     *
     * @var list<DiskInfo>
     */
    public array $diskInfo;
    /**
     * An object containing information about the GPU capabilities of Droplets created with this size.
     *
     * @var GpuInfo
     */
    public GpuInfo $gpuInfo;
    public function definedProperties(): array
    {
        return ['slug' => 'slug', 'memory' => 'memory', 'vcpus' => 'vcpus', 'disk' => 'disk', 'transfer' => 'transfer', 'priceMonthly' => 'price_monthly', 'priceHourly' => 'price_hourly', 'regions' => 'regions', 'available' => 'available', 'description' => 'description', 'diskInfo' => 'disk_info', 'gpuInfo' => 'gpu_info'];
    }
}