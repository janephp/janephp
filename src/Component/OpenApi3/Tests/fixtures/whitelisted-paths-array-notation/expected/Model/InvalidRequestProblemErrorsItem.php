<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class InvalidRequestProblemErrorsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var iterable<string, list<string>>
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