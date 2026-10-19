<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model;

use Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\AdditionalPropertiesInterface;
class Item implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name'];
    }
}