<?php

namespace Jane\Component\OpenApi31\Tests\Expected\XNamespace\Model\Catalog;

use Jane\Component\OpenApi31\Tests\Expected\XNamespace\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\XNamespace\Runtime\AdditionalPropertiesInterface;
class TaggedItem implements AdditionalPropertiesInterface
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