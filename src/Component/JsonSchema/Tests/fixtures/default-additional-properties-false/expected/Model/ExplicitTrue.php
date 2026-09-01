<?php

namespace Jane\Component\JsonSchema\Tests\DefaultAdditionalPropsFalse\Model;

use Jane\Component\JsonSchema\Tests\DefaultAdditionalPropsFalse\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\Tests\DefaultAdditionalPropsFalse\Runtime\AdditionalPropertiesInterface;
class ExplicitTrue implements AdditionalPropertiesInterface
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