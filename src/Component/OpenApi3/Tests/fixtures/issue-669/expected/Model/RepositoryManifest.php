<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RepositoryManifest implements AdditionalPropertiesInterface
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
     * The name of the container registry.
     *
     * @var string
     */
    protected $registryName;
    /**
     * The name of the repository.
     *
     * @var string
     */
    protected $repository;
    /**
     * The manifest digest
     *
     * @var string
     */
    protected $digest;
    /**
     * The compressed size of the manifest in bytes.
     *
     * @var int
     */
    protected $compressedSizeBytes;
    /**
     * The uncompressed size of the manifest in bytes (this size is calculated asynchronously so it may not be immediately available).
     *
     * @var int
     */
    protected $sizeBytes;
    /**
     * The time the manifest was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * All tags associated with this manifest
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * All blobs associated with this manifest
     *
     * @var list<RepositoryBlob>
     */
    protected $blobs;
    /**
     * The name of the container registry.
     *
     * @return string
     */
    public function getRegistryName(): string
    {
        return $this->registryName;
    }
    /**
     * The name of the container registry.
     *
     * @param string $registryName
     *
     * @return self
     */
    public function setRegistryName(string $registryName): self
    {
        $this->initialized['registryName'] = true;
        $this->registryName = $registryName;
        return $this;
    }
    /**
     * The name of the repository.
     *
     * @return string
     */
    public function getRepository(): string
    {
        return $this->repository;
    }
    /**
     * The name of the repository.
     *
     * @param string $repository
     *
     * @return self
     */
    public function setRepository(string $repository): self
    {
        $this->initialized['repository'] = true;
        $this->repository = $repository;
        return $this;
    }
    /**
     * The manifest digest
     *
     * @return string
     */
    public function getDigest(): string
    {
        return $this->digest;
    }
    /**
     * The manifest digest
     *
     * @param string $digest
     *
     * @return self
     */
    public function setDigest(string $digest): self
    {
        $this->initialized['digest'] = true;
        $this->digest = $digest;
        return $this;
    }
    /**
     * The compressed size of the manifest in bytes.
     *
     * @return int
     */
    public function getCompressedSizeBytes(): int
    {
        return $this->compressedSizeBytes;
    }
    /**
     * The compressed size of the manifest in bytes.
     *
     * @param int $compressedSizeBytes
     *
     * @return self
     */
    public function setCompressedSizeBytes(int $compressedSizeBytes): self
    {
        $this->initialized['compressedSizeBytes'] = true;
        $this->compressedSizeBytes = $compressedSizeBytes;
        return $this;
    }
    /**
     * The uncompressed size of the manifest in bytes (this size is calculated asynchronously so it may not be immediately available).
     *
     * @return int
     */
    public function getSizeBytes(): int
    {
        return $this->sizeBytes;
    }
    /**
     * The uncompressed size of the manifest in bytes (this size is calculated asynchronously so it may not be immediately available).
     *
     * @param int $sizeBytes
     *
     * @return self
     */
    public function setSizeBytes(int $sizeBytes): self
    {
        $this->initialized['sizeBytes'] = true;
        $this->sizeBytes = $sizeBytes;
        return $this;
    }
    /**
     * The time the manifest was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The time the manifest was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * All tags associated with this manifest
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * All tags associated with this manifest
     *
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * All blobs associated with this manifest
     *
     * @return list<RepositoryBlob>
     */
    public function getBlobs(): array
    {
        return $this->blobs;
    }
    /**
     * All blobs associated with this manifest
     *
     * @param list<RepositoryBlob> $blobs
     *
     * @return self
     */
    public function setBlobs(array $blobs): self
    {
        $this->initialized['blobs'] = true;
        $this->blobs = $blobs;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['registryName' => ['registry_name', 'getRegistryName', 'setRegistryName'], 'repository' => ['repository', 'getRepository', 'setRepository'], 'digest' => ['digest', 'getDigest', 'setDigest'], 'compressedSizeBytes' => ['compressed_size_bytes', 'getCompressedSizeBytes', 'setCompressedSizeBytes'], 'sizeBytes' => ['size_bytes', 'getSizeBytes', 'setSizeBytes'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'tags' => ['tags', 'getTags', 'setTags'], 'blobs' => ['blobs', 'getBlobs', 'setBlobs']];
    }
}