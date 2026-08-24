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
     * @var string|mixed
     */
    protected $foo;
    /**
     * @return string|mixed
     */
    public function getFoo()
    {
        return $this->foo;
    }
    /**
     * @param string|mixed $foo
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