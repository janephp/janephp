<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseExistingAlert extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $alert;
    /**
     * @return array<string, mixed>
     */
    public function getAlert(): iterable
    {
        return $this->alert;
    }
    /**
     * @param array<string, mixed> $alert
     *
     * @return self
     */
    public function setAlert(iterable $alert): self
    {
        $this->initialized['alert'] = true;
        $this->alert = $alert;
        return $this;
    }
}