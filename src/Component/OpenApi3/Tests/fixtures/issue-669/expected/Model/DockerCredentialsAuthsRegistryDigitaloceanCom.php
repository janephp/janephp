<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DockerCredentialsAuthsRegistryDigitaloceanCom implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A base64 encoded string containing credentials for the container registry.
     *
     * @var string
     */
    public string $auth;
    public function definedProperties(): array
    {
        return ['auth' => 'auth'];
    }
}