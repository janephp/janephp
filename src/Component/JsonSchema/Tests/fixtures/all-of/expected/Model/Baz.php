<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Baz
{
    /**
     * @var string
     */
    public string $foo;
    /**
     * @var Bar
     */
    public Bar $bar;
    /**
     * @var BazBaz
     */
    public BazBaz $baz;
    /**
     * @var BazInlineProperty
     */
    public BazInlineProperty $inlineProperty;
}