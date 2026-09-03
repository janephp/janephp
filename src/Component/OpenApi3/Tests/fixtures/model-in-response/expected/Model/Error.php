<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model;

use Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\AdditionalPropertiesInterface;
class Error implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $message;
    public function definedProperties(): array
    {
        return ['message' => 'message'];
    }
}