<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class GarbageCollection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A string specifying the UUID of the garbage collection.
     *
     * @var string
     */
    public string $uuid;
    /**
     * The name of the container registry.
     *
     * @var string
     */
    public string $registryName;
    /**
     * The current status of this garbage collection.
     *
     * @var string
     */
    public string $status;
    /**
     * The time the garbage collection was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * The time the garbage collection was last updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * The number of blobs deleted as a result of this garbage collection.
     *
     * @var int
     */
    public int $blobsDeleted;
    /**
     * The number of bytes freed as a result of this garbage collection.
     *
     * @var int
     */
    public int $freedBytes;
    public function definedProperties(): array
    {
        return ['uuid' => 'uuid', 'registryName' => 'registry_name', 'status' => 'status', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at', 'blobsDeleted' => 'blobs_deleted', 'freedBytes' => 'freed_bytes'];
    }
}