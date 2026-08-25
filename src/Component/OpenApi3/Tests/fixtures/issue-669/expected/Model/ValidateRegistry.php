<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ValidateRegistry implements AdditionalPropertiesInterface
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
     * A globally unique name for the container registry. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 63 characters.
     *
     * @var string
     */
    protected $name;
    /**
     * A globally unique name for the container registry. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 63 characters.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A globally unique name for the container registry. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 63 characters.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName']];
    }
}