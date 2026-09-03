<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exceptions\Model;

use Jane\Component\OpenApi3\Tests\Expected\Exceptions\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Exceptions\Runtime\AdditionalPropertiesInterface;
class Message implements AdditionalPropertiesInterface
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