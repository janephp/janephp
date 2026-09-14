<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeDefault\Model;

use Jane\Component\OpenApi3\Tests\FetchModeDefault\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\FetchModeDefault\Runtime\AdditionalPropertiesInterface;
class PetsPetIdGetResponse404 implements AdditionalPropertiesInterface
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