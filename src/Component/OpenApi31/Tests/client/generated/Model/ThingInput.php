<?php

namespace Jane\Component\OpenApi31\Tests\Client\Model;

use Jane\Component\OpenApi31\Tests\Client\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Client\Runtime\AdditionalPropertiesInterface;
class ThingInput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $kind;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'kind' => 'kind'];
    }
}