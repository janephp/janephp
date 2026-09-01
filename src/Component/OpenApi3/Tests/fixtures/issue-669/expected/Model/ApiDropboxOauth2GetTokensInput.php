<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiDropboxOauth2GetTokensInput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The oauth2 code from google
     *
     * @var string
     */
    public string $code;
    /**
     * Redirect url
     *
     * @var string
     */
    public string $redirectUrl;
    public function definedProperties(): array
    {
        return ['code' => 'code', 'redirectUrl' => 'redirect_url'];
    }
}