<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Foo
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
     * @var string|object|null[]
     */
    protected $foo;
    /**
     * @return string|object|null[]
     */
    public function getFoo()
    {
        return $this->foo;
    }
    /**
     * @param string|object|null[] $foo
     *
     * @return self
     */
    public function setFoo($foo): self
    {
        $this->initialized['foo'] = true;
        $this->foo = $foo;
        return $this;
    }
}