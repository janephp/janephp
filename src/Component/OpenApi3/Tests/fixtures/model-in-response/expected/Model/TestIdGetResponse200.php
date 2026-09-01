<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model;

use Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\AdditionalPropertiesInterface;
class TestIdGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $id;
    public function definedProperties(): array
    {
        return ['id' => 'id'];
    }
}