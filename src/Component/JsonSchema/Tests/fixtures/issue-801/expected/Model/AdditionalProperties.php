<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

use Jane\Component\JsonSchema\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class AdditionalProperties implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $foo;
    /**
     * @return string|null
     */
    public function getFoo(): ?string
    {
        return $this->foo;
    }
    /**
     * @param string|null $foo
     *
     * @return self
     */
    public function setFoo(?string $foo): self
    {
        $this->initialized['foo'] = true;
        $this->foo = $foo;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['foo' => ['foo', 'getFoo', 'setFoo']];
    }
}