<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiFilePresignedUrlResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The time the url expires at.
     *
     * @var \DateTime
     */
    public \DateTime $expiresAt;
    /**
     * The unique object key to store the file as.
     *
     * @var string
     */
    public string $objectKey;
    /**
     * The original file name.
     *
     * @var string
     */
    public string $originalFileName;
    /**
     * The actual presigned URL the client can use to upload the file directly.
     *
     * @var string
     */
    public string $presignedUrl;
    public function definedProperties(): array
    {
        return ['expiresAt' => 'expires_at', 'objectKey' => 'object_key', 'originalFileName' => 'original_file_name', 'presignedUrl' => 'presigned_url'];
    }
}