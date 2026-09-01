<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class AuthenticationSuccessResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Authentication Token
     *
     * @var string
     */
    public string $token;
    public function definedProperties(): array
    {
        return ['token' => 'token'];
    }
}