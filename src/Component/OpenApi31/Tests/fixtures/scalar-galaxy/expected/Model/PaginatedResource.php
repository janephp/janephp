<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class PaginatedResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var PaginatedResourceMeta
     */
    public PaginatedResourceMeta $meta;
    public function definedProperties(): array
    {
        return ['meta' => 'meta'];
    }
}