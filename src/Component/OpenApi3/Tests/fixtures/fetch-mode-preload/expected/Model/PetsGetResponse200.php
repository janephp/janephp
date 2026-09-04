<?php

namespace Jane\Component\OpenApi3\Tests\FetchModePreload\Model;

use Jane\Component\OpenApi3\Tests\FetchModePreload\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\FetchModePreload\Runtime\AdditionalPropertiesInterface;
class PetsGetResponse200 implements AdditionalPropertiesInterface
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