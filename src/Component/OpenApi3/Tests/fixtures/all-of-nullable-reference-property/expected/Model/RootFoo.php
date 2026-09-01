<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Model;

use Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Runtime\AdditionalPropertiesInterface;
class RootFoo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $baz;
    public function definedProperties(): array
    {
        return ['baz' => 'baz'];
    }
}