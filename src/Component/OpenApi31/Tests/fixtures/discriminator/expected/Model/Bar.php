<?php

namespace Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model;

use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\AdditionalPropertiesInterface;
class Bar implements AdditionalPropertiesInterface
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