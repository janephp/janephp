<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class LinksOrigin
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $self;
    /**
     * @return string
     */
    public function getSelf(): string
    {
        return $this->self;
    }
    /**
     * @param string $self
     *
     * @return self
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
}