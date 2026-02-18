<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseVolume extends \ArrayObject
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
    protected $volume;
    /**
     * @return array<string, mixed>
     */
    public function getVolume(): iterable
    {
        return $this->volume;
    }
    /**
     * @param array<string, mixed> $volume
     *
     * @return self
     */
    public function setVolume(iterable $volume): self
    {
        $this->initialized['volume'] = true;
        $this->volume = $volume;
        return $this;
    }
}