<?php

namespace Github\Model;

class BranchProtectionRequiredStatusChecks extends \ArrayObject
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
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $enforcementLevel;
    /**
     * 
     *
     * @var list<string>
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
     * @return string
     */
    public function getEnforcementLevel() : string
    {
        return $this->enforcementLevel;
    }
    /**
     * 
     *
     * @param string $enforcementLevel
     *
     * @return self
     */
    public function setEnforcementLevel(string $enforcementLevel) : self
    {
        $this->initialized['enforcementLevel'] = true;
        $this->enforcementLevel = $enforcementLevel;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getContexts() : array
    {
        return $this->contexts;
    }
    /**
     * 
     *
     * @param list<string> $contexts
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