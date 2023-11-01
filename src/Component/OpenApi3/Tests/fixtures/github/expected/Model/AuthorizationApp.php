<?php

namespace Github\Model;

class AuthorizationApp extends \ArrayObject
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
     * @var string
     */
    protected $clientId;
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
     * @return string
     */
    public function getClientId() : string
    {
        return $this->clientId;
    }
    /**
     * 
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(string $clientId) : self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;
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
}