<?php

namespace PicturePark\API\Model;

class ShareDataEmbed
{
    /**
     * The URL to access the share.
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * Token for the embed share.
     *
     * @var string
     */
    protected $token;
    /**
     * The URL to access the share.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL to access the share.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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