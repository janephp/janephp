<?php

namespace Github\Model;

class ApplicationGrant extends \ArrayObject
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
    protected $url;
    /**
     * 
     *
     * @var ApplicationGrantApp
     */
    protected $app;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string[]
     */
    protected $scopes;
    /**
     * 
     *
     * @var ApplicationGrantUser|null
     */
    protected $user;
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
     * @return ApplicationGrantApp
     */
    public function getApp() : ApplicationGrantApp
    {
        return $this->app;
    }
    /**
     * 
     *
     * @param ApplicationGrantApp $app
     *
     * @return self
     */
    public function setApp(ApplicationGrantApp $app) : self
    {
        $this->app = $app;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getScopes() : array
    {
        return $this->scopes;
    }
    /**
     * 
     *
     * @param string[] $scopes
     *
     * @return self
     */
    public function setScopes(array $scopes) : self
    {
        $this->scopes = $scopes;
        return $this;
    }
    /**
     * 
     *
     * @return ApplicationGrantUser|null
     */
    public function getUser() : ?ApplicationGrantUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param ApplicationGrantUser|null $user
     *
     * @return self
     */
    public function setUser(?ApplicationGrantUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
}