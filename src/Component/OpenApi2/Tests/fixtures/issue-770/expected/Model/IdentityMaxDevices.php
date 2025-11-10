<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityMaxDevices
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
     * Max devices allowed
     *
     * @var string
     */
    protected $maxDevicesAllowed = 'LIMITED';
    /**
     * max devices number
     *
     * @var int
     */
    protected $maxDevicesNumber = 3;
    /**
     * Max devices allowed
     *
     * @return string
     */
    public function getMaxDevicesAllowed(): string
    {
        return $this->maxDevicesAllowed;
    }
    /**
     * Max devices allowed
     *
     * @param string $maxDevicesAllowed
     *
     * @return self
     */
    public function setMaxDevicesAllowed(string $maxDevicesAllowed): self
    {
        $this->initialized['maxDevicesAllowed'] = true;
        $this->maxDevicesAllowed = $maxDevicesAllowed;
        return $this;
    }
    /**
     * max devices number
     *
     * @return int
     */
    public function getMaxDevicesNumber(): int
    {
        return $this->maxDevicesNumber;
    }
    /**
     * max devices number
     *
     * @param int $maxDevicesNumber
     *
     * @return self
     */
    public function setMaxDevicesNumber(int $maxDevicesNumber): self
    {
        $this->initialized['maxDevicesNumber'] = true;
        $this->maxDevicesNumber = $maxDevicesNumber;
        return $this;
    }
}