<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsCreateResponse extends \ArrayObject
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
     * @var NfsResponse
     */
    protected $share;
    /**
     * @return NfsResponse
     */
    public function getShare(): NfsResponse
    {
        return $this->share;
    }
    /**
     * @param NfsResponse $share
     *
     * @return self
     */
    public function setShare(NfsResponse $share): self
    {
        $this->initialized['share'] = true;
        $this->share = $share;
        return $this;
    }
}