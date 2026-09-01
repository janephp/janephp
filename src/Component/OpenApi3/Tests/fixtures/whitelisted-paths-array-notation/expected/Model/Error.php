<?php

namespace Jane\OpenApi3\Tests\Expected\Model;

use Jane\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Error implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $code;
    /**
     * @var string
     */
    public string $message;
    public function definedProperties(): array
    {
        return ['code' => 'code', 'message' => 'message'];
    }
}