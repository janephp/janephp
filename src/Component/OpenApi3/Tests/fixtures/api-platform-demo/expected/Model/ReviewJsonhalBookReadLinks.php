<?php

namespace ApiPlatform\Demo\Model;

class ReviewJsonhalBookReadLinks extends \ArrayObject
{
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
        $this->self = $self;
        return $this;
    }
}