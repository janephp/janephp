<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsRequestBodyReference\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsRequestBodyReference\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsRequestBodyReference\Runtime\AdditionalPropertiesInterface;
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