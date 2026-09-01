<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ArrayDefinition\Model;

use Jane\Component\OpenApi3\Tests\Expected\ArrayDefinition\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ArrayDefinition\Runtime\AdditionalPropertiesInterface;
class BarItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $bar;
    public function definedProperties(): array
    {
        return ['bar' => 'bar'];
    }
}