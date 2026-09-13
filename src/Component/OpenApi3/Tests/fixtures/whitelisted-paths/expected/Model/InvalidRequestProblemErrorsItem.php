<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class InvalidRequestProblemErrorsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array<string, list<string>>
     */
    public iterable $parameters;
    /**
     * @var string
     */
    public string $message;
    public function definedProperties(): array
    {
        return ['parameters' => 'parameters', 'message' => 'message'];
    }
}