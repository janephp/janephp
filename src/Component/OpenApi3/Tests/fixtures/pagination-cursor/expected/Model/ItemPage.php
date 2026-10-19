<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model;

use Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\AdditionalPropertiesInterface;
class ItemPage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<Item>
     */
    public array $data;
    /**
     * @var PageMeta
     */
    public PageMeta $meta;
    public function definedProperties(): array
    {
        return ['data' => 'data', 'meta' => 'meta'];
    }
}