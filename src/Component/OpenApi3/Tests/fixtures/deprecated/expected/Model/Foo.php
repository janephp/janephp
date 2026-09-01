<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Deprecated\Model;

use Jane\Component\OpenApi3\Tests\Expected\Deprecated\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Deprecated\Runtime\AdditionalPropertiesInterface;
/**
 * @deprecated
 */
class Foo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $email;
    /**
     * @deprecated
     *
     * @var string
     */
    public string $bar;
    public function definedProperties(): array
    {
        return ['email' => 'email', 'bar' => 'bar'];
    }
}