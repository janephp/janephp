<?php

namespace ApiPlatform\Demo\Model;

class ParchmentJsonhalLinks extends \ArrayObject
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
     * @var ParchmentJsonhalLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @return ParchmentJsonhalLinksSelf
     */
    public function getSelf() : ParchmentJsonhalLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param ParchmentJsonhalLinksSelf $self
     *
     * @return self
     */
    public function setSelf(ParchmentJsonhalLinksSelf $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
}