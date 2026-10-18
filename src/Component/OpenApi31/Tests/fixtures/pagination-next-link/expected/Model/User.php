<?php

namespace Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Model;

use Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\PaginationNextLink\Runtime\AdditionalPropertiesInterface;
class User implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $displayName;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'displayName' => 'displayName'];
    }
}