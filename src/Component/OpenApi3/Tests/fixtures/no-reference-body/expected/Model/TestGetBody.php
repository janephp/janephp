<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
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