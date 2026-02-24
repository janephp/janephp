<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAllRegistriesInfo extends \ArrayObject
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
     * @var list<mixed>
     */
    protected $registries;
    /**
     * @return list<mixed>
     */
    public function getRegistries(): array
    {
        return $this->registries;
    }
    /**
     * @param list<mixed> $registries
     *
     * @return self
     */
    public function setRegistries(array $registries): self
    {
        $this->initialized['registries'] = true;
        $this->registries = $registries;
        return $this;
    }
}