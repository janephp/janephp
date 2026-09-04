<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeDefault\Model;

use Jane\Component\OpenApi3\Tests\FetchModeDefault\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\FetchModeDefault\Runtime\AdditionalPropertiesInterface;
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