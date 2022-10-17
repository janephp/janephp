<?php

namespace Github\Model;

class ApplicationsClientIdTokenDeleteBody extends \ArrayObject
{
    /**
     * The OAuth access token used to authenticate to the GitHub API.
     *
     * @var string
     */
    protected $accessToken;
    /**
     * The OAuth access token used to authenticate to the GitHub API.
     *
     * @return string
     */
    public function getAccessToken() : string
    {
        return $this->accessToken;
    }
    /**
     * The OAuth access token used to authenticate to the GitHub API.
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