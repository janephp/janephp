<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Model;

use Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Runtime\AdditionalPropertiesInterface;
class SearchPage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $results;
    public function definedProperties(): array
    {
        return ['results' => 'results'];
    }
}