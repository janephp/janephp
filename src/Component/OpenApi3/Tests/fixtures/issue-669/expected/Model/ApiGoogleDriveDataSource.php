<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGoogleDriveDataSource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $folderId;
    /**
     * Refresh token. you can obrain a refresh token by following the oauth2 flow. see /v2/gen-ai/oauth2/google/tokens for reference.
     *
     * @var string
     */
    protected $refreshToken;
    /**
     * @return string
     */
    public function getFolderId(): string
    {
        return $this->folderId;
    }
    /**
     * @param string $folderId
     *
     * @return self
     */
    public function setFolderId(string $folderId): self
    {
        $this->initialized['folderId'] = true;
        $this->folderId = $folderId;
        return $this;
    }
    /**
     * Refresh token. you can obrain a refresh token by following the oauth2 flow. see /v2/gen-ai/oauth2/google/tokens for reference.
     *
     * @return string
     */
    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }
    /**
     * Refresh token. you can obrain a refresh token by following the oauth2 flow. see /v2/gen-ai/oauth2/google/tokens for reference.
     *
     * @param string $refreshToken
     *
     * @return self
     */
    public function setRefreshToken(string $refreshToken): self
    {
        $this->initialized['refreshToken'] = true;
        $this->refreshToken = $refreshToken;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['folderId' => ['folder_id', 'getFolderId', 'setFolderId'], 'refreshToken' => ['refresh_token', 'getRefreshToken', 'setRefreshToken']];
    }
}