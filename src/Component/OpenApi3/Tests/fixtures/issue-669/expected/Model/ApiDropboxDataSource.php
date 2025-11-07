<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiDropboxDataSource extends \ArrayObject
{
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
    protected $folder;
    /**
     * Refresh token. you can obrain a refresh token by following the oauth2 flow. see /v2/gen-ai/oauth2/dropbox/tokens for reference.
     *
     * @var string
     */
    protected $refreshToken;
    /**
     * @return string
     */
    public function getFolder(): string
    {
        return $this->folder;
    }
    /**
     * @param string $folder
     *
     * @return self
     */
    public function setFolder(string $folder): self
    {
        $this->initialized['folder'] = true;
        $this->folder = $folder;
        return $this;
    }
    /**
     * Refresh token. you can obrain a refresh token by following the oauth2 flow. see /v2/gen-ai/oauth2/dropbox/tokens for reference.
     *
     * @return string
     */
    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }
    /**
     * Refresh token. you can obrain a refresh token by following the oauth2 flow. see /v2/gen-ai/oauth2/dropbox/tokens for reference.
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
}