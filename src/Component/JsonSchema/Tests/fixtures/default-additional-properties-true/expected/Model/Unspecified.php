<?php

namespace Jane\Component\JsonSchema\Tests\DefaultAdditionalProps\Model;

use Jane\Component\JsonSchema\Tests\DefaultAdditionalProps\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\Tests\DefaultAdditionalProps\Runtime\AdditionalPropertiesInterface;
class Unspecified implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['name' => 'name'];
    }
}