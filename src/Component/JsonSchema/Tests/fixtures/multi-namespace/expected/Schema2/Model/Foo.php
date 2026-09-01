<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Schema2\Model;

class Foo
{
    /**
     * @var string
     */
    public string $foo;
    /**
     * @var \Jane\Component\JsonSchema\Tests\Expected\Schema3\Model\Bar
     */
    public \Jane\Component\JsonSchema\Tests\Expected\Schema3\Model\Bar $bar;
}