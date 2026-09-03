<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model;

use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalPropertiesInterface;
class Token implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $token;
    public function definedProperties(): array
    {
        return ['token' => 'token'];
    }
}