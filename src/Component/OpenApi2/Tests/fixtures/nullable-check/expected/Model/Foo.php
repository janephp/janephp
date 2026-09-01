<?php

namespace Jane\Component\OpenApi2\Tests\Expected\NullableCheck\Model;

class Foo
{
    /**
     * @var string
     */
    public string $foo;
    /**
     * @var string
     */
    public string $bar;
    /**
     * @var string|null
     */
    public ?string $baz;
}