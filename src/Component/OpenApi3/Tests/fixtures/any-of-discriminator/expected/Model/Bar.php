<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Model;

use Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Runtime\AdditionalPropertiesInterface;
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