<?php

namespace ApiPlatform\Demo\Model;

class BookJsonhalLinks extends \ArrayObject
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
     * @var BookJsonhalLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @return BookJsonhalLinksSelf
     */
    public function getSelf() : BookJsonhalLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param BookJsonhalLinksSelf $self
     *
     * @return self
     */
    public function setSelf(BookJsonhalLinksSelf $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
}