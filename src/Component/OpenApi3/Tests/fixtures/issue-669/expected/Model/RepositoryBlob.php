<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RepositoryBlob implements AdditionalPropertiesInterface
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
     * The digest of the blob
     *
     * @var string
     */
    protected $digest;
    /**
     * The compressed size of the blob in bytes.
     *
     * @var int
     */
    protected $compressedSizeBytes;
    /**
     * The digest of the blob
     *
     * @return string
     */
    public function getDigest(): string
    {
        return $this->digest;
    }
    /**
     * The digest of the blob
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
     * The compressed size of the blob in bytes.
     *
     * @return int
     */
    public function getCompressedSizeBytes(): int
    {
        return $this->compressedSizeBytes;
    }
    /**
     * The compressed size of the blob in bytes.
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
    public function definedProperties(): array
    {
        return ['digest' => ['digest', 'getDigest', 'setDigest'], 'compressedSizeBytes' => ['compressed_size_bytes', 'getCompressedSizeBytes', 'setCompressedSizeBytes']];
    }
}