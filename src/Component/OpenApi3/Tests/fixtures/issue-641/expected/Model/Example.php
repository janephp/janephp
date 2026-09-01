<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue641\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue641\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue641\Runtime\AdditionalPropertiesInterface;
class Example implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $property1;
    public function definedProperties(): array
    {
        return ['property1' => 'property1'];
    }
}