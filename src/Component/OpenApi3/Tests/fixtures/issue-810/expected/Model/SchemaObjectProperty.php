<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue810\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue810\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue810\Runtime\AdditionalPropertiesInterface;
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