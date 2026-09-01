<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateDataSourceFileUploadPresignedUrlsOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID generated for the request for Presigned URLs.
     *
     * @var string
     */
    public string $requestId;
    /**
     * A list of generated presigned URLs and object keys, one per file.
     *
     * @var list<ApiFilePresignedUrlResponse>
     */
    public array $uploads;
    public function definedProperties(): array
    {
        return ['requestId' => 'request_id', 'uploads' => 'uploads'];
    }
}