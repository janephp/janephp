<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RegistryBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A globally unique name for the container registry. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 63 characters.
     *
     * @var string
     */
    public string $name;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the registry was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Slug of the region where registry data is stored
     *
     * @var string
     */
    public string $region;
    /**
     * The amount of storage used in the registry in bytes.
     *
     * @var int
     */
    public int $storageUsageBytes;
    /**
     * The time at which the storage usage was updated. Storage usage is calculated asynchronously, and may not immediately reflect pushes to the registry.
     *
     * @var \DateTime
     */
    public \DateTime $storageUsageBytesUpdatedAt;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'createdAt' => 'created_at', 'region' => 'region', 'storageUsageBytes' => 'storage_usage_bytes', 'storageUsageBytesUpdatedAt' => 'storage_usage_bytes_updated_at'];
    }
}