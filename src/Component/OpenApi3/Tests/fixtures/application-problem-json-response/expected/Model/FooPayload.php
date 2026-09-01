<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model;

use Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Runtime\AdditionalPropertiesInterface;
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