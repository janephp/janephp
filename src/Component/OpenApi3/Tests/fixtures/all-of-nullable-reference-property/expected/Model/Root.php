<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Model;

use Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Runtime\AdditionalPropertiesInterface;
class Root implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var RootFoo|null
     */
    public ?RootFoo $foo;
    public function definedProperties(): array
    {
        return ['foo' => 'foo'];
    }
}