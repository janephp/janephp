<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAddonsCreate extends \ArrayObject
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
     * @var AddonsResource
     */
    protected $resource;
    /**
     * @return AddonsResource
     */
    public function getResource(): AddonsResource
    {
        return $this->resource;
    }
    /**
     * @param AddonsResource $resource
     *
     * @return self
     */
    public function setResource(AddonsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;
        return $this;
    }
}