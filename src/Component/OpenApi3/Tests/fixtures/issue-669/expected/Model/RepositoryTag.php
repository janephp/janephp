<?php

namespace Jane\Generated\DigitalOcean\Model;

class RepositoryTag extends \ArrayObject
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
     * The name of the tag.
     *
     * @var string
     */
    protected $tag;
    /**
     * The digest of the manifest associated with the tag.
     *
     * @var string
     */
    protected $manifestDigest;
    /**
     * The compressed size of the tag in bytes.
     *
     * @var int
     */
    protected $compressedSizeBytes;
    /**
     * The uncompressed size of the tag in bytes (this size is calculated asynchronously so it may not be immediately available).
     *
     * @var int
     */
    protected $sizeBytes;
    /**
     * The time the tag was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
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
     * The name of the tag.
     *
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }
    /**
     * The name of the tag.
     *
     * @param string $tag
     *
     * @return self
     */
    public function setTag(string $tag): self
    {
        $this->initialized['tag'] = true;
        $this->tag = $tag;
        return $this;
    }
    /**
     * The digest of the manifest associated with the tag.
     *
     * @return string
     */
    public function getManifestDigest(): string
    {
        return $this->manifestDigest;
    }
    /**
     * The digest of the manifest associated with the tag.
     *
     * @param string $manifestDigest
     *
     * @return self
     */
    public function setManifestDigest(string $manifestDigest): self
    {
        $this->initialized['manifestDigest'] = true;
        $this->manifestDigest = $manifestDigest;
        return $this;
    }
    /**
     * The compressed size of the tag in bytes.
     *
     * @return int
     */
    public function getCompressedSizeBytes(): int
    {
        return $this->compressedSizeBytes;
    }
    /**
     * The compressed size of the tag in bytes.
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
     * The uncompressed size of the tag in bytes (this size is calculated asynchronously so it may not be immediately available).
     *
     * @return int
     */
    public function getSizeBytes(): int
    {
        return $this->sizeBytes;
    }
    /**
     * The uncompressed size of the tag in bytes (this size is calculated asynchronously so it may not be immediately available).
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
     * The time the tag was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The time the tag was last updated.
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
}