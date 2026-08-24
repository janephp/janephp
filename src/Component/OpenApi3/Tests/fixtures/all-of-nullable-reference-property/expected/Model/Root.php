<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Root extends \ArrayObject
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
}