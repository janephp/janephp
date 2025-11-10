<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioBackgroundScanning
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
     * @var int
     */
    protected $frequencyInSec = 20;
    /**
     * @return int
     */
    public function getFrequencyInSec(): int
    {
        return $this->frequencyInSec;
    }
    /**
     * @param int $frequencyInSec
     *
     * @return self
     */
    public function setFrequencyInSec(int $frequencyInSec): self
    {
        $this->initialized['frequencyInSec'] = true;
        $this->frequencyInSec = $frequencyInSec;
        return $this;
    }
}