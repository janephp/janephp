<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ResponseTypeReference\Model;

use Jane\Component\OpenApi3\Tests\Expected\ResponseTypeReference\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ResponseTypeReference\Runtime\AdditionalPropertiesInterface;
class FooGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $id;
    /**
     * @var string
     */
    public string $bar;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'bar' => 'bar'];
    }
}