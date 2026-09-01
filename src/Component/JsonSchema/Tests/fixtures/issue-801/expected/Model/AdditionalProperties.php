<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Issue801\Model;

use Jane\Component\JsonSchema\Tests\Expected\Issue801\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\Tests\Expected\Issue801\Runtime\AdditionalPropertiesInterface;
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