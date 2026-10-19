<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model;

use Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\AdditionalPropertiesInterface;
class PageMeta implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $nextCursor;
    public function definedProperties(): array
    {
        return ['nextCursor' => 'nextCursor'];
    }
}