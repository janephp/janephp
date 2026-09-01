<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class AuthenticationRequest implements AdditionalPropertiesInterface
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