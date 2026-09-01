<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RepositoryBlob implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The digest of the blob
     *
     * @var string
     */
    public string $digest;
    /**
     * The compressed size of the blob in bytes.
     *
     * @var int
     */
    public int $compressedSizeBytes;
    public function definedProperties(): array
    {
        return ['digest' => 'digest', 'compressedSizeBytes' => 'compressed_size_bytes'];
    }
}