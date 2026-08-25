<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Multiregistry implements AdditionalPropertiesInterface
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
     * A globally unique name for the container registry. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 63 characters.
     *
     * @var string
     */
    protected $name;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the registry was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Slug of the region where registry data is stored
     *
     * @var string
     */
    protected $region;
    /**
     * The amount of storage used in the registry in bytes.
     *
     * @var int
     */
    protected $storageUsageBytes;
    /**
     * The time at which the storage usage was updated. Storage usage is calculated asynchronously, and may not immediately reflect pushes to the registry.
     *
     * @var \DateTime
     */
    protected $storageUsageBytesUpdatedAt;
    /**
     * A globally unique name for the container registry. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 63 characters.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A globally unique name for the container registry. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 63 characters.
     *
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
     * A time value given in ISO8601 combined date and time format that represents when the registry was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the registry was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Slug of the region where registry data is stored
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Slug of the region where registry data is stored
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The amount of storage used in the registry in bytes.
     *
     * @return int
     */
    public function getStorageUsageBytes(): int
    {
        return $this->storageUsageBytes;
    }
    /**
     * The amount of storage used in the registry in bytes.
     *
     * @param int $storageUsageBytes
     *
     * @return self
     */
    public function setStorageUsageBytes(int $storageUsageBytes): self
    {
        $this->initialized['storageUsageBytes'] = true;
        $this->storageUsageBytes = $storageUsageBytes;
        return $this;
    }
    /**
     * The time at which the storage usage was updated. Storage usage is calculated asynchronously, and may not immediately reflect pushes to the registry.
     *
     * @return \DateTime
     */
    public function getStorageUsageBytesUpdatedAt(): \DateTime
    {
        return $this->storageUsageBytesUpdatedAt;
    }
    /**
     * The time at which the storage usage was updated. Storage usage is calculated asynchronously, and may not immediately reflect pushes to the registry.
     *
     * @param \DateTime $storageUsageBytesUpdatedAt
     *
     * @return self
     */
    public function setStorageUsageBytesUpdatedAt(\DateTime $storageUsageBytesUpdatedAt): self
    {
        $this->initialized['storageUsageBytesUpdatedAt'] = true;
        $this->storageUsageBytesUpdatedAt = $storageUsageBytesUpdatedAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'region' => ['region', 'getRegion', 'setRegion'], 'storageUsageBytes' => ['storage_usage_bytes', 'getStorageUsageBytes', 'setStorageUsageBytes'], 'storageUsageBytesUpdatedAt' => ['storage_usage_bytes_updated_at', 'getStorageUsageBytesUpdatedAt', 'setStorageUsageBytesUpdatedAt']];
    }
}