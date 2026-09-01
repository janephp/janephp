<?php

namespace Jane\Component\OpenApi31\Tests\Client\Model;

use Jane\Component\OpenApi31\Tests\Client\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Client\Runtime\AdditionalPropertiesInterface;
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