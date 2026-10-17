<?php

namespace Jane\Component\OpenApi3\Tests\Expected\OneOfObjectType\Model;

use Jane\Component\OpenApi3\Tests\Expected\OneOfObjectType\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\OneOfObjectType\Runtime\AdditionalPropertiesInterface;
class TypeOne implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $one;
    public function definedProperties(): array
    {
        return ['one' => 'one'];
    }
}