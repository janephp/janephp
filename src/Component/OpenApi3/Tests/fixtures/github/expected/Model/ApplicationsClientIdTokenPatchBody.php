<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ApplicationsClientIdTokenPatchBody implements AdditionalPropertiesInterface
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
     * The access_token of the OAuth application.
     *
     * @var string
     */
    protected $accessToken;
    /**
     * The access_token of the OAuth application.
     *
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
    /**
     * The access_token of the OAuth application.
     *
     * @param string $accessToken
     *
     * @return self
     */
    public function setAccessToken(string $accessToken): self
    {
        $this->initialized['accessToken'] = true;
        $this->accessToken = $accessToken;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['accessToken' => ['access_token', 'getAccessToken', 'setAccessToken']];
    }
}