<?php

namespace PicturePark\API\Model;

class ShareDataEmbed extends ShareDataBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Token for the embed share.
     *
     * @var string
     */
    protected $token;
    /**
     * Token for the embed share.
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * Token for the embed share.
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
}