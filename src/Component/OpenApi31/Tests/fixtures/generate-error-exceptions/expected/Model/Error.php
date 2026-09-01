<?php

namespace Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Model;

use Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Runtime\AdditionalPropertiesInterface;
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