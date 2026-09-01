<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DockerCredentials implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var DockerCredentialsAuths
     */
    public DockerCredentialsAuths $auths;
    public function definedProperties(): array
    {
        return ['auths' => 'auths'];
    }
}