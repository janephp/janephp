<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

use Jane\Component\JsonSchema\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class AdditionalProperties implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $foo;
    public function definedProperties(): array
    {
        return ['foo' => 'foo'];
    }
}