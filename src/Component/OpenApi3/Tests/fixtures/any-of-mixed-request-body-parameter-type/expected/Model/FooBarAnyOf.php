<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AnyOfMixedRequestBodyParameterType\Model;

use Jane\Component\OpenApi3\Tests\Expected\AnyOfMixedRequestBodyParameterType\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AnyOfMixedRequestBodyParameterType\Runtime\AdditionalPropertiesInterface;
class FooBarAnyOf implements AdditionalPropertiesInterface
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