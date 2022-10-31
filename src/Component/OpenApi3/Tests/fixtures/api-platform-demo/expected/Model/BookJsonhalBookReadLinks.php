<?php

namespace ApiPlatform\Demo\Model;

class BookJsonhalBookReadLinks extends \ArrayObject
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
     * @var BookJsonhalBookReadLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @return BookJsonhalBookReadLinksSelf
     */
    public function getSelf() : BookJsonhalBookReadLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param BookJsonhalBookReadLinksSelf $self
     *
     * @return self
     */
    public function setSelf(BookJsonhalBookReadLinksSelf $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
}