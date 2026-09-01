<?php

namespace Jane\Component\JsonSchema\Tests\Expected\AllOf\Model;

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