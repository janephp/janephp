<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsActionResizeParams extends \ArrayObject
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
     * The new size for the NFS share.
     *
     * @var int
     */
    protected $sizeGib;
    /**
     * The new size for the NFS share.
     *
     * @return int
     */
    public function getSizeGib(): int
    {
        return $this->sizeGib;
    }
    /**
     * The new size for the NFS share.
     *
     * @param int $sizeGib
     *
     * @return self
     */
    public function setSizeGib(int $sizeGib): self
    {
        $this->initialized['sizeGib'] = true;
        $this->sizeGib = $sizeGib;
        return $this;
    }
}