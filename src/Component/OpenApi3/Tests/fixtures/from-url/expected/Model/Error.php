<?php

namespace Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model;

use Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\AdditionalPropertiesInterface;
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