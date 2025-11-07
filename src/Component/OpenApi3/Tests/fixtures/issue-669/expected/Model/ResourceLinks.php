<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResourceLinks extends \ArrayObject
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
     * A URI that can be used to retrieve the resource.
     *
     * @var string
     */
    protected $self;
    /**
     * A URI that can be used to retrieve the resource.
     *
     * @return string
     */
    public function getSelf(): string
    {
        return $this->self;
    }
    /**
     * A URI that can be used to retrieve the resource.
     *
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