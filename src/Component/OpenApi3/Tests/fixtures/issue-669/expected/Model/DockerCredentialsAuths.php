<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DockerCredentialsAuths implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var DockerCredentialsAuthsRegistryDigitaloceanCom
     */
    public DockerCredentialsAuthsRegistryDigitaloceanCom $registryDigitaloceanCom;
    public function definedProperties(): array
    {
        return ['registryDigitaloceanCom' => 'registry.digitalocean.com'];
    }
}