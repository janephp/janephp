<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model;

use Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\AdditionalPropertiesInterface;
class EmptySpace implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $stringProperty;
    public function definedProperties(): array
    {
        return ['stringProperty' => 'stringProperty'];
    }
}