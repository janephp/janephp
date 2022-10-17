<?php

namespace ApiPlatform\Demo\Model;

class BookJsonhalBookReadLinks extends \ArrayObject
{
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
        $this->self = $self;
        return $this;
    }
}