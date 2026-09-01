<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetIndexingJobDetailsSignedURLOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The signed url for downloading the indexing job details
     *
     * @var string
     */
    public string $signedUrl;
    public function definedProperties(): array
    {
        return ['signedUrl' => 'signed_url'];
    }
}