<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Model;

use Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Runtime\AdditionalPropertiesInterface;
class Repo implements AdditionalPropertiesInterface
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