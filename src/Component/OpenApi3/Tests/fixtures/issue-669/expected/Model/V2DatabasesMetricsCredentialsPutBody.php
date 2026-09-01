<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesMetricsCredentialsPutBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var DatabasesBasicAuthCredentials
     */
    public DatabasesBasicAuthCredentials $credentials;
    public function definedProperties(): array
    {
        return ['credentials' => 'credentials'];
    }
}