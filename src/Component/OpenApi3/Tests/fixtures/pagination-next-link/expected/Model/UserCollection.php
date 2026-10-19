<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Model;

use Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Runtime\AdditionalPropertiesInterface;
class UserCollection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<User>
     */
    public array $value;
    /**
     * @var string
     */
    public string $odataNextLink;
    public function definedProperties(): array
    {
        return ['value' => 'value', 'odataNextLink' => '@odata.nextLink'];
    }
}