<?php

namespace Github\Model;

class DeployKey extends \ArrayObject
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
    protected $key;
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
    protected $title;
    /**
     * 
     *
     * @var bool
     */
    protected $verified;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
    /**
     * 
     *
     * @var bool
     */
    protected $readOnly;
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
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
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
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getVerified() : bool
    {
        return $this->verified;
    }
    /**
     * 
     *
     * @param bool $verified
     *
     * @return self
     */
    public function setVerified(bool $verified) : self
    {
        $this->verified = $verified;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getReadOnly() : bool
    {
        return $this->readOnly;
    }
    /**
     * 
     *
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly) : self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
}