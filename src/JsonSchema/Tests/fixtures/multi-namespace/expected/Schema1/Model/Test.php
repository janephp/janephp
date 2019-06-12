<?php

namespace Jane\JsonSchema\Tests\Expected\Schema1\Model;

class Test
{
    /**
     * 
     *
     * @var \Jane\JsonSchema\Tests\Expected\Schema2\Model\Foo
     */
    protected $foo;
    /**
     * 
     *
     * @return \Jane\JsonSchema\Tests\Expected\Schema2\Model\Foo|null
     */
    public function getFoo() : ?\Jane\JsonSchema\Tests\Expected\Schema2\Model\Foo
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param \Jane\JsonSchema\Tests\Expected\Schema2\Model\Foo|null $foo
     *
     * @return self
     */
    public function setFoo(?\Jane\JsonSchema\Tests\Expected\Schema2\Model\Foo $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
}