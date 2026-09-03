<?php

namespace Jane\Component\OpenApi3\Tests\Expected\TestNullableArray\Model;

use Jane\Component\OpenApi3\Tests\Expected\TestNullableArray\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\TestNullableArray\Runtime\AdditionalPropertiesInterface;
class Model implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $foo;
    /**
     * @var list<mixed>|null
     */
    public ?array $bar;
    public function definedProperties(): array
    {
        return ['foo' => 'foo', 'bar' => 'bar'];
    }
}