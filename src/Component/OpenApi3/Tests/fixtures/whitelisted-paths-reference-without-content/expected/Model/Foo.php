<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Runtime\AdditionalPropertiesInterface;
class Foo implements AdditionalPropertiesInterface
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