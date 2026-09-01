<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

use Jane\Component\JsonSchema\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Hybrid implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $name;
    /**
     * @var string|null
     */
    public ?string $attachment;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'attachment' => '_attachment'];
    }
}