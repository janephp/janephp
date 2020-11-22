<?php

namespace Github\Model;

class Actor
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $login;
    /**
     * 
     *
     * @var string
     */
    protected $displayLogin;
    /**
     * 
     *
     * @var string|null
     */
    protected $gravatarId;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $avatarUrl;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }
    /**
     * 
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login) : self
    {
        $this->login = $login;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDisplayLogin() : string
    {
        return $this->displayLogin;
    }
    /**
     * 
     *
     * @param string $displayLogin
     *
     * @return self
     */
    public function setDisplayLogin(string $displayLogin) : self
    {
        $this->displayLogin = $displayLogin;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGravatarId() : ?string
    {
        return $this->gravatarId;
    }
    /**
     * 
     *
     * @param string|null $gravatarId
     *
     * @return self
     */
    public function setGravatarId(?string $gravatarId) : self
    {
        $this->gravatarId = $gravatarId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
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
    public function getAvatarUrl() : string
    {
        return $this->avatarUrl;
    }
    /**
     * 
     *
     * @param string $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(string $avatarUrl) : self
    {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }
}