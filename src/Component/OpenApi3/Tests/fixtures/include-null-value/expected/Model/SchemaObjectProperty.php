<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SchemaObjectProperty implements AdditionalPropertiesInterface
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
    protected $stringProperty;
    /**
     * @return string
     */
    public function getStringProperty(): string
    {
        return $this->stringProperty;
    }
    /**
     * @param string $stringProperty
     *
     * @return self
     */
    public function setStringProperty(string $stringProperty): self
    {
        $this->initialized['stringProperty'] = true;
        $this->stringProperty = $stringProperty;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['stringProperty' => ['stringProperty', 'getStringProperty', 'setStringProperty']];
    }
}