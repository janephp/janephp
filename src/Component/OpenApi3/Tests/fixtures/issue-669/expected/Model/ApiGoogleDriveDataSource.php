<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGoogleDriveDataSource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $folderId;
    /**
     * Refresh token. you can obrain a refresh token by following the oauth2 flow. see /v2/gen-ai/oauth2/google/tokens for reference.
     *
     * @var string
     */
    public string $refreshToken;
    public function definedProperties(): array
    {
        return ['folderId' => 'folder_id', 'refreshToken' => 'refresh_token'];
    }
}