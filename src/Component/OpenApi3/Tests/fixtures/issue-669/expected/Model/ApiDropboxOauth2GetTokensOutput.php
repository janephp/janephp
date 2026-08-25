<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiDropboxOauth2GetTokensOutput implements AdditionalPropertiesInterface
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
     * The refresh token
     *
     * @var string
     */
    protected $refreshToken;
    /**
     * The access token
     *
     * @var string
     */
    protected $token;
    /**
     * The refresh token
     *
     * @return string
     */
    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }
    /**
     * The refresh token
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
    /**
     * The access token
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
    /**
     * The access token
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['refreshToken' => ['refresh_token', 'getRefreshToken', 'setRefreshToken'], 'token' => ['token', 'getToken', 'setToken']];
    }
}