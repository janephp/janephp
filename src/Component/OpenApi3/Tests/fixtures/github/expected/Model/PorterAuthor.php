<?php

namespace Github\Model;

class PorterAuthor extends \ArrayObject
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
    protected $remoteId;
    /**
     * 
     *
     * @var string
     */
    protected $remoteName;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $name;
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
    protected $importUrl;
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
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRemoteId() : string
    {
        return $this->remoteId;
    }
    /**
     * 
     *
     * @param string $remoteId
     *
     * @return self
     */
    public function setRemoteId(string $remoteId) : self
    {
        $this->initialized['remoteId'] = true;
        $this->remoteId = $remoteId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRemoteName() : string
    {
        return $this->remoteName;
    }
    /**
     * 
     *
     * @param string $remoteName
     *
     * @return self
     */
    public function setRemoteName(string $remoteName) : self
    {
        $this->initialized['remoteName'] = true;
        $this->remoteName = $remoteName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
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
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImportUrl() : string
    {
        return $this->importUrl;
    }
    /**
     * 
     *
     * @param string $importUrl
     *
     * @return self
     */
    public function setImportUrl(string $importUrl) : self
    {
        $this->initialized['importUrl'] = true;
        $this->importUrl = $importUrl;
        return $this;
    }
}