<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Model;

use Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Runtime\AdditionalPropertiesInterface;
class FooPayload implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $label;
    public function definedProperties(): array
    {
        return ['label' => 'label'];
    }
}