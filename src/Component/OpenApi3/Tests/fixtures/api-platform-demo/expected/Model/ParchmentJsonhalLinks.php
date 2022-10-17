<?php

namespace ApiPlatform\Demo\Model;

class ParchmentJsonhalLinks extends \ArrayObject
{
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
        $this->self = $self;
        return $this;
    }
}