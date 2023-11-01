<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class HTTPSecuritySchemeSub
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
     * @var mixed|null
     */
    protected $scheme;
    /**
     * 
     *
     * @return mixed
     */
    public function getScheme()
    {
        return $this->scheme;
    }
    /**
     * 
     *
     * @param mixed $scheme
     *
     * @return self
     */
    public function setScheme($scheme) : self
    {
        $this->initialized['scheme'] = true;
        $this->scheme = $scheme;
        return $this;
    }
}