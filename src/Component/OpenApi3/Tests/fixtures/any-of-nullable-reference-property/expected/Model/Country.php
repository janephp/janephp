<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Model;

use Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AnyOfNullableReferenceProperty\Runtime\AdditionalPropertiesInterface;
class Country implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $iso;
    /**
     * @var string
     */
    public string $printableName;
    public function definedProperties(): array
    {
        return ['iso' => 'iso', 'printableName' => 'printableName'];
    }
}