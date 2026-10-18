<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model;

use Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\AdditionalPropertiesInterface;
class Event implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['type' => 'type'];
    }
}