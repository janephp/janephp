<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Tests\Expected\Model;

class Foo
{
    /**
     * @var string
     */
    protected $foo;

    /**
     * @return string
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * @param string $foo
     *
     * @return self
     */
    public function setFoo($foo = null)
    {
        $this->foo = $foo;

        return $this;
    }
}
