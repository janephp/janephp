<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AllOfMerge\Model;

use Jane\Component\OpenApi3\Tests\Expected\AllOfMerge\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AllOfMerge\Runtime\AdditionalPropertiesInterface;
class Foo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $bar;
    /**
     * A description
     *
     * @var string
     */
    public string $foo;
    public function definedProperties(): array
    {
        return ['bar' => 'bar', 'foo' => 'foo'];
    }
}