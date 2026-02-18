<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseExistingCheck extends \ArrayObject
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
    protected $check;
    /**
     * @return array<string, mixed>
     */
    public function getCheck(): iterable
    {
        return $this->check;
    }
    /**
     * @param array<string, mixed> $check
     *
     * @return self
     */
    public function setCheck(iterable $check): self
    {
        $this->initialized['check'] = true;
        $this->check = $check;
        return $this;
    }
}