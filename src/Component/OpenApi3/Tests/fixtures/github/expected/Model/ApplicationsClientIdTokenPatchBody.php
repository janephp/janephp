<?php

namespace Github\Model;

class ApplicationsClientIdTokenPatchBody
{
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
    public function getAccessToken() : string
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
    public function setAccessToken(string $accessToken) : self
    {
        $this->accessToken = $accessToken;
        return $this;
    }
}