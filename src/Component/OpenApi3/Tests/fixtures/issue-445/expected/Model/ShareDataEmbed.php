<?php

namespace PicturePark\API\Model;

class ShareDataEmbed extends ShareDataBase
{
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
        $this->token = $token;
        return $this;
    }
}