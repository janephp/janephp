<?php

namespace Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Model;

use Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Runtime\AdditionalPropertiesInterface;
class PatternProperties implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $foo;
    public function definedProperties(): array
    {
        return ['foo' => 'foo'];
    }
}