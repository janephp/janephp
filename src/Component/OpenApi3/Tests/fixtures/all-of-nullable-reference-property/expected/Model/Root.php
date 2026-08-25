<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Root implements AdditionalPropertiesInterface
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
     * @var RootFoo|null
     */
    protected $foo;
    /**
     * @return RootFoo|null
     */
    public function getFoo(): ?RootFoo
    {
        return $this->foo;
    }
    /**
     * @param RootFoo|null $foo
     *
     * @return self
     */
    public function setFoo(?RootFoo $foo): self
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