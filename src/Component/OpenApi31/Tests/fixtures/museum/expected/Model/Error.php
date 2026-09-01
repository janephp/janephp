<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Model;

use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\AdditionalPropertiesInterface;
class Error implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $title;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'title' => 'title'];
    }
}