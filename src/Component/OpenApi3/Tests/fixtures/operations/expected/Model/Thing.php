<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Operations\Model;

use Jane\Component\OpenApi3\Tests\Expected\Operations\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Operations\Runtime\AdditionalPropertiesInterface;
class Thing implements AdditionalPropertiesInterface
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