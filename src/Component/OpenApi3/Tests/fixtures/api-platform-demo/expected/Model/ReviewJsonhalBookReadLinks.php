<?php

namespace ApiPlatform\Demo\Model;

class ReviewJsonhalBookReadLinks extends \ArrayObject
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
     * @var ReviewJsonhalBookReadLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @return ReviewJsonhalBookReadLinksSelf
     */
    public function getSelf() : ReviewJsonhalBookReadLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param ReviewJsonhalBookReadLinksSelf $self
     *
     * @return self
     */
    public function setSelf(ReviewJsonhalBookReadLinksSelf $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
}