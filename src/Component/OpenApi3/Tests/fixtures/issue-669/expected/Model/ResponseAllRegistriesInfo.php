<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAllRegistriesInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['registries' => ['registries', 'getRegistries', 'setRegistries']];
    }
}