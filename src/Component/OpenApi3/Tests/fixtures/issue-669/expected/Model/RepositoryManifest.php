<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RepositoryManifest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the container registry.
     *
     * @var string
     */
    public string $registryName;
    /**
     * The name of the repository.
     *
     * @var string
     */
    public string $repository;
    /**
     * The manifest digest
     *
     * @var string
     */
    public string $digest;
    /**
     * The compressed size of the manifest in bytes.
     *
     * @var int
     */
    public int $compressedSizeBytes;
    /**
     * The uncompressed size of the manifest in bytes (this size is calculated asynchronously so it may not be immediately available).
     *
     * @var int
     */
    public int $sizeBytes;
    /**
     * The time the manifest was last updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * All tags associated with this manifest
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * All blobs associated with this manifest
     *
     * @var list<RepositoryBlob>
     */
    public array $blobs;
    public function definedProperties(): array
    {
        return ['registryName' => 'registry_name', 'repository' => 'repository', 'digest' => 'digest', 'compressedSizeBytes' => 'compressed_size_bytes', 'sizeBytes' => 'size_bytes', 'updatedAt' => 'updated_at', 'tags' => 'tags', 'blobs' => 'blobs'];
    }
}