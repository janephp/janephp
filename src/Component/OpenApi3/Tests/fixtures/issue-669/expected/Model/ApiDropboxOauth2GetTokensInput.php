<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiDropboxOauth2GetTokensInput extends \ArrayObject
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
     * The oauth2 code from google
     *
     * @var string
     */
    protected $code;
    /**
     * Redirect url
     *
     * @var string
     */
    protected $redirectUrl;
    /**
     * The oauth2 code from google
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * The oauth2 code from google
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Redirect url
     *
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }
    /**
     * Redirect url
     *
     * @param string $redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl(string $redirectUrl): self
    {
        $this->initialized['redirectUrl'] = true;
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
}