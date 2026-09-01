<?php

namespace Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Model;

use Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Runtime\AdditionalPropertiesInterface;
class TestGetBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $foo;
    /**
     * @var Bar
     */
    public Bar $bar;
    /**
     * @var TestGetBodyBaz
     */
    public TestGetBodyBaz $baz;
    public function definedProperties(): array
    {
        return ['foo' => 'foo', 'bar' => 'Bar', 'baz' => 'Baz'];
    }
}