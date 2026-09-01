<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Issue801\Model;

use Jane\Component\JsonSchema\Tests\Expected\Issue801\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\Tests\Expected\Issue801\Runtime\AdditionalPropertiesInterface;
class PatternProperties implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int|null
     */
    public ?int $bar;
    public function definedProperties(): array
    {
        return ['bar' => 'bar'];
    }
}