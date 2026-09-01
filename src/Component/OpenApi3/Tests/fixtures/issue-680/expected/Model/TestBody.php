<?php

namespace Jane\Component\OpenApi3\Tests\Issue680\Model;

use Jane\Component\OpenApi3\Tests\Issue680\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Issue680\Runtime\AdditionalPropertiesInterface;
class TestBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>|null
     */
    public ?array $items;
    public function definedProperties(): array
    {
        return ['items' => 'items'];
    }
}