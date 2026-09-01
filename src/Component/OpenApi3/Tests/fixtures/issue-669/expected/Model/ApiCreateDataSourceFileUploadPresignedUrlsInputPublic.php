<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateDataSourceFileUploadPresignedUrlsInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A list of files to generate presigned URLs for.
     *
     * @var list<ApiPresignedUrlFile>
     */
    public array $files;
    public function definedProperties(): array
    {
        return ['files' => 'files'];
    }
}