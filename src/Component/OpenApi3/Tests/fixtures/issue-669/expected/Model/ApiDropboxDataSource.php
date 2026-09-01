<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiDropboxDataSource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $folder;
    /**
     * Refresh token. you can obrain a refresh token by following the oauth2 flow. see /v2/gen-ai/oauth2/dropbox/tokens for reference.
     *
     * @var string
     */
    public string $refreshToken;
    public function definedProperties(): array
    {
        return ['folder' => 'folder', 'refreshToken' => 'refresh_token'];
    }
}