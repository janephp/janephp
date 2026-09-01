<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseMetricsAuth implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var DatabaseMetricsCredentials
     */
    public DatabaseMetricsCredentials $credentials;
    public function definedProperties(): array
    {
        return ['credentials' => 'credentials'];
    }
}