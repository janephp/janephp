<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsDomainProgress extends \ArrayObject
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
     * @var list<array<string, mixed>>
     */
    protected $steps;
    /**
     * @return list<array<string, mixed>>
     */
    public function getSteps(): array
    {
        return $this->steps;
    }
    /**
     * @param list<array<string, mixed>> $steps
     *
     * @return self
     */
    public function setSteps(array $steps): self
    {
        $this->initialized['steps'] = true;
        $this->steps = $steps;
        return $this;
    }
}