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
     * @var TestFoo
     */
    protected $foo;
    /**
     * @return TestFoo
     */
    public function getFoo(): TestFoo
    {
        return $this->foo;
    }
    /**
     * @param TestFoo $foo
     *
     * @return self
     */
    public function setFoo(TestFoo $foo): self
    {
        $this->initialized['foo'] = true;
        $this->foo = $foo;
        return $this;
    }
}