<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabasesBasicAuthCredentials implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * basic authentication username for metrics HTTP endpoint
     *
     * @var string
     */
    public string $basicAuthUsername;
    /**
     * basic authentication password for metrics HTTP endpoint
     *
     * @var string
     */
    public string $basicAuthPassword;
    public function definedProperties(): array
    {
        return ['basicAuthUsername' => 'basic_auth_username', 'basicAuthPassword' => 'basic_auth_password'];
    }
}