<?php

namespace Jane\Component\OpenApi31\Tests\Expected\XNamespace\Model;

use Jane\Component\OpenApi31\Tests\Expected\XNamespace\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\XNamespace\Runtime\AdditionalPropertiesInterface;
class FlatItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['name' => 'name'];
    }
}