<?php

namespace Jane\Component\OpenApi2\Tests\Client\Model;

class SimpleResponse
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
     * @var bool
     */
    protected $baz;
    /**
     * 
     *
     * @return string
     */
    public function getFoo() : string
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param string $foo
     *
     * @return self
     */
    public function setFoo(string $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBaz() : bool
    {
        return $this->baz;
    }
    /**
     * 
     *
     * @param bool $baz
     *
     * @return self
     */
    public function setBaz(bool $baz) : self
    {
        $this->baz = $baz;
        return $this;
    }
}