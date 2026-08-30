<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AnyOfMixedRequestBodyParameterType\Model;

use Jane\Component\OpenApi3\Tests\Expected\AnyOfMixedRequestBodyParameterType\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AnyOfMixedRequestBodyParameterType\Runtime\AdditionalPropertiesInterface;
class FooBarAnyOf implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $name;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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