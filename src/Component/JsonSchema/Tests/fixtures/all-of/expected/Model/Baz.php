<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Baz
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
     * @var Bar
     */
    protected $bar;
    /**
     * @var BazBaz
     */
    protected $baz;
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
     * @return Bar
     */
    public function getBar(): Bar
    {
        return $this->bar;
    }
    /**
     * @param Bar $bar
     *
     * @return self
     */
    public function setBar(Bar $bar): self
    {
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
    /**
     * @return BazBaz
     */
    public function getBaz(): BazBaz
    {
        return $this->baz;
    }
    /**
     * @param BazBaz $baz
     *
     * @return self
     */
    public function setBaz(BazBaz $baz): self
    {
        $this->initialized['baz'] = true;
        $this->baz = $baz;
        return $this;
    }
}