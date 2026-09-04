<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeEager\Model;

use Jane\Component\OpenApi3\Tests\FetchModeEager\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\FetchModeEager\Runtime\AdditionalPropertiesInterface;
class PetsGetResponse404 implements AdditionalPropertiesInterface
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