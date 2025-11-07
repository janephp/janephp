<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsGetInstanceSizeResponse extends \ArrayObject
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
     * @var AppsInstanceSize
     */
    protected $instanceSize;
    /**
     * @return AppsInstanceSize
     */
    public function getInstanceSize(): AppsInstanceSize
    {
        return $this->instanceSize;
    }
    /**
     * @param AppsInstanceSize $instanceSize
     *
     * @return self
     */
    public function setInstanceSize(AppsInstanceSize $instanceSize): self
    {
        $this->initialized['instanceSize'] = true;
        $this->instanceSize = $instanceSize;
        return $this;
    }
}