<?php

namespace ApiPlatform\Demo\Model;

class TopBookJsonhalLinks extends \ArrayObject
{
    /**
     * 
     *
     * @var TopBookJsonhalLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @return TopBookJsonhalLinksSelf
     */
    public function getSelf() : TopBookJsonhalLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param TopBookJsonhalLinksSelf $self
     *
     * @return self
     */
    public function setSelf(TopBookJsonhalLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
}