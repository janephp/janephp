<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
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