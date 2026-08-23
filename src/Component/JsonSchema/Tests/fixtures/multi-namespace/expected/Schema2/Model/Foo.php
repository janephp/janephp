<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Schema2\Model;

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
     * @var string
     */
    protected $foo;
    /**
     * @var \Jane\Component\JsonSchema\Tests\Expected\Schema3\Model\Bar
     */
    protected $bar;
    /**
     * @return string
     */
    public function getFoo(): string
    {
        return $this->foo;
    }
    /**
     * @param string $foo
     *
     * @return self
     */
    public function setFoo(string $foo): self
    {
        $this->initialized['foo'] = true;
        $this->foo = $foo;
        return $this;
    }
    /**
     * @return \Jane\Component\JsonSchema\Tests\Expected\Schema3\Model\Bar
     */
    public function getBar(): \Jane\Component\JsonSchema\Tests\Expected\Schema3\Model\Bar
    {
        return $this->bar;
    }
    /**
     * @param \Jane\Component\JsonSchema\Tests\Expected\Schema3\Model\Bar $bar
     *
     * @return self
     */
    public function setBar(\Jane\Component\JsonSchema\Tests\Expected\Schema3\Model\Bar $bar): self
    {
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
}