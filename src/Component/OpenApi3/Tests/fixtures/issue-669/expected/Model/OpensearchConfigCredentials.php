<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OpensearchConfigCredentials implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $username;
    /**
     * @var string
     */
    public string $password;
    public function definedProperties(): array
    {
        return ['username' => 'username', 'password' => 'password'];
    }
}