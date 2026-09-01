<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RepositoryTag implements AdditionalPropertiesInterface
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
     * The name of the tag.
     *
     * @var string
     */
    public string $tag;
    /**
     * The digest of the manifest associated with the tag.
     *
     * @var string
     */
    public string $manifestDigest;
    /**
     * The compressed size of the tag in bytes.
     *
     * @var int
     */
    public int $compressedSizeBytes;
    /**
     * The uncompressed size of the tag in bytes (this size is calculated asynchronously so it may not be immediately available).
     *
     * @var int
     */
    public int $sizeBytes;
    /**
     * The time the tag was last updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    public function definedProperties(): array
    {
        return ['registryName' => 'registry_name', 'repository' => 'repository', 'tag' => 'tag', 'manifestDigest' => 'manifest_digest', 'compressedSizeBytes' => 'compressed_size_bytes', 'sizeBytes' => 'size_bytes', 'updatedAt' => 'updated_at'];
    }
}