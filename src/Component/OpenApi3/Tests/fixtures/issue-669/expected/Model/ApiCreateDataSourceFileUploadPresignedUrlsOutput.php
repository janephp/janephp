<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateDataSourceFileUploadPresignedUrlsOutput implements AdditionalPropertiesInterface
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
     * The ID generated for the request for Presigned URLs.
     *
     * @var string
     */
    protected $requestId;
    /**
     * A list of generated presigned URLs and object keys, one per file.
     *
     * @var list<ApiFilePresignedUrlResponse>
     */
    protected $uploads;
    /**
     * The ID generated for the request for Presigned URLs.
     *
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }
    /**
     * The ID generated for the request for Presigned URLs.
     *
     * @param string $requestId
     *
     * @return self
     */
    public function setRequestId(string $requestId): self
    {
        $this->initialized['requestId'] = true;
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * A list of generated presigned URLs and object keys, one per file.
     *
     * @return list<ApiFilePresignedUrlResponse>
     */
    public function getUploads(): array
    {
        return $this->uploads;
    }
    /**
     * A list of generated presigned URLs and object keys, one per file.
     *
     * @param list<ApiFilePresignedUrlResponse> $uploads
     *
     * @return self
     */
    public function setUploads(array $uploads): self
    {
        $this->initialized['uploads'] = true;
        $this->uploads = $uploads;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['requestId' => ['request_id', 'getRequestId', 'setRequestId'], 'uploads' => ['uploads', 'getUploads', 'setUploads']];
    }
}