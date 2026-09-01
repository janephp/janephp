<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiDropboxOauth2GetTokensOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The refresh token
     *
     * @var string
     */
    public string $refreshToken;
    /**
     * The access token
     *
     * @var string
     */
    public string $token;
    public function definedProperties(): array
    {
        return ['refreshToken' => 'refresh_token', 'token' => 'token'];
    }
}