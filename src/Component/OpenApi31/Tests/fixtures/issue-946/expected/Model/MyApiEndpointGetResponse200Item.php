<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue946\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue946\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue946\Runtime\AdditionalPropertiesInterface;
class MyApiEndpointGetResponse200Item implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    public function definedProperties(): array
    {
        return ['id' => 'id'];
    }
}