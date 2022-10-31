<?php

namespace Github\Model;

class StatusCheckPolicy extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var bool
     */
    protected $strict;
    /**
     * 
     *
     * @var string[]
     */
    protected $contexts;
    /**
     * 
     *
     * @var string
     */
    protected $contextsUrl;
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
     * @return bool
     */
    public function getStrict() : bool
    {
        return $this->strict;
    }
    /**
     * 
     *
     * @param bool $strict
     *
     * @return self
     */
    public function setStrict(bool $strict) : self
    {
        $this->initialized['strict'] = true;
        $this->strict = $strict;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getContexts() : array
    {
        return $this->contexts;
    }
    /**
     * 
     *
     * @param string[] $contexts
     *
     * @return self
     */
    public function setContexts(array $contexts) : self
    {
        $this->initialized['contexts'] = true;
        $this->contexts = $contexts;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContextsUrl() : string
    {
        return $this->contextsUrl;
    }
    /**
     * 
     *
     * @param string $contextsUrl
     *
     * @return self
     */
    public function setContextsUrl(string $contextsUrl) : self
    {
        $this->initialized['contextsUrl'] = true;
        $this->contextsUrl = $contextsUrl;
        return $this;
    }
}