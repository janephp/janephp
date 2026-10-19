<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Model;

use Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Runtime\AdditionalPropertiesInterface;
class Issue implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $number;
    /**
     * @var string
     */
    public string $title;
    public function definedProperties(): array
    {
        return ['number' => 'number', 'title' => 'title'];
    }
}