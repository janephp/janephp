<?php

namespace Jane\Component\OpenApi31\Tests\DefaultAdditionalProps\Model;

use Jane\Component\OpenApi31\Tests\DefaultAdditionalProps\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\DefaultAdditionalProps\Runtime\AdditionalPropertiesInterface;
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