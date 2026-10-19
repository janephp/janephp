<?php

namespace Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Model;

use Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Runtime\AdditionalPropertiesInterface;
class TypeTwo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $two;
    public function definedProperties(): array
    {
        return ['two' => 'two'];
    }
}