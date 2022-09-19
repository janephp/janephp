<?php

namespace ApiPlatform\Demo\Model;

class BookJsonhalLinks
{
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
        $this->self = $self;
        return $this;
    }
}