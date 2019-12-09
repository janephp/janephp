<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Model
{
    /**
     * 
     *
     * @var string|null
     */
    protected $foo;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $bar;
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
     * @return mixed[]|null
     */
    public function getBar() : ?array
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param mixed[]|null $bar
     *
     * @return self
     */
    public function setBar(?array $bar) : self
    {
        $this->bar = $bar;
        return $this;
    }
}