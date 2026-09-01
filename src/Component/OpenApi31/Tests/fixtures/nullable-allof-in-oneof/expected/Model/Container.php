<?php

namespace Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Model;

use Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Runtime\AdditionalPropertiesInterface;
class Container implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Image|null
     */
    public ?Image $iconOneOf;
    /**
     * @var ContainerIconAnyOfAnyOf|null
     */
    public ?ContainerIconAnyOfAnyOf $iconAnyOf;
    public function definedProperties(): array
    {
        return ['iconOneOf' => 'iconOneOf', 'iconAnyOf' => 'iconAnyOf'];
    }
}