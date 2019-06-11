<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Baz
{
    /**
     * 
     *
     * @var string
     */
    protected $foo;
    /**
     * 
     *
     * @var Bar
     */
    protected $bar;
    /**
     * 
     *
     * @var BazBaz
     */
    protected $baz;
    /**
     * 
     *
     * @return string|null
     */
    public function getFoo() : ?string
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param string|null $foo
     *
     * @return self
     */
    public function setFoo(?string $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
    /**
     * 
     *
     * @return Bar|null
     */
    public function getBar() : ?Bar
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param Bar|null $bar
     *
     * @return self
     */
    public function setBar(?Bar $bar) : self
    {
        $this->bar = $bar;
        return $this;
    }
    /**
     * 
     *
     * @return BazBaz|null
     */
    public function getBaz() : ?BazBaz
    {
        return $this->baz;
    }
    /**
     * 
     *
     * @param BazBaz|null $baz
     *
     * @return self
     */
    public function setBaz(?BazBaz $baz) : self
    {
        $this->baz = $baz;
        return $this;
    }
}