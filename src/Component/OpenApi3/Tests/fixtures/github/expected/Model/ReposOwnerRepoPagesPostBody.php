<?php

namespace Github\Model;

class ReposOwnerRepoPagesPostBody extends \ArrayObject
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
     * @var ReposOwnerRepoPagesPostBodySource
     */
    protected $source;
    /**
     * 
     *
     * @return ReposOwnerRepoPagesPostBodySource
     */
    public function getSource() : ReposOwnerRepoPagesPostBodySource
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param ReposOwnerRepoPagesPostBodySource $source
     *
     * @return self
     */
    public function setSource(ReposOwnerRepoPagesPostBodySource $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
}