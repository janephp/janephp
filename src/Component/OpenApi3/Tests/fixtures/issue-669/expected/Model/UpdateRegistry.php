<?php

namespace Jane\Generated\DigitalOcean\Model;

class UpdateRegistry extends \ArrayObject
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
     * A boolean value indicating that the garbage collection should be cancelled.
     *
     * @var bool
     */
    protected $cancel;
    /**
     * A boolean value indicating that the garbage collection should be cancelled.
     *
     * @return bool
     */
    public function getCancel(): bool
    {
        return $this->cancel;
    }
    /**
     * A boolean value indicating that the garbage collection should be cancelled.
     *
     * @param bool $cancel
     *
     * @return self
     */
    public function setCancel(bool $cancel): self
    {
        $this->initialized['cancel'] = true;
        $this->cancel = $cancel;
        return $this;
    }
}