<?php

namespace Github\Model;

class ApplicationsClientIdGrantDeleteBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['accessToken'] = true;
        $this->accessToken = $accessToken;
        return $this;
    }
}