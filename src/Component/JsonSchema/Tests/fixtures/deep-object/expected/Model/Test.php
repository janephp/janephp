<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
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
     * @var list<TestFooItem>
     */
    protected $foo;
    /**
     * @return list<TestFooItem>
     */
    public function getFoo(): array
    {
        return $this->foo;
    }
    /**
     * @param list<TestFooItem> $foo
     *
     * @return self
     */
    public function setFoo(array $foo): self
    {
        $this->initialized['foo'] = true;
        $this->foo = $foo;
        return $this;
    }
}