<?php

namespace Jane\Component\OpenApi31\Tests\StatusCodeRange\Model;

use Jane\Component\OpenApi31\Tests\StatusCodeRange\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\StatusCodeRange\Runtime\AdditionalPropertiesInterface;
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