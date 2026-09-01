<?php

namespace Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Model;

use Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\NullableAllofInOneof\Runtime\AdditionalPropertiesInterface;
class ContainerIconAnyOfAnyOf implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $url;
    public function definedProperties(): array
    {
        return ['url' => 'url'];
    }
}