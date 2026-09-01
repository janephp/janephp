<?php

namespace Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Model;

use Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Runtime\AdditionalPropertiesInterface;
class Bar implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $foo;
    /**
     * @var string
     */
    public string $bar;
    public function definedProperties(): array
    {
        return ['foo' => 'foo', 'bar' => 'bar'];
    }
}