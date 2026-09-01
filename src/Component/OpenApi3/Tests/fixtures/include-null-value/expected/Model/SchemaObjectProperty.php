<?php

namespace Jane\Component\OpenApi3\Tests\Expected\IncludeNullValue\Model;

use Jane\Component\OpenApi3\Tests\Expected\IncludeNullValue\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\IncludeNullValue\Runtime\AdditionalPropertiesInterface;
class SchemaObjectProperty implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $stringProperty;
    public function definedProperties(): array
    {
        return ['stringProperty' => 'stringProperty'];
    }
}