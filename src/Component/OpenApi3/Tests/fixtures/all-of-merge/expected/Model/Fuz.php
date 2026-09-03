<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AllOfMerge\Model;

use Jane\Component\OpenApi3\Tests\Expected\AllOfMerge\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AllOfMerge\Runtime\AdditionalPropertiesInterface;
class Fuz implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A description
     *
     * @var string
     */
    public string $bar;
    public function definedProperties(): array
    {
        return ['bar' => 'bar'];
    }
}