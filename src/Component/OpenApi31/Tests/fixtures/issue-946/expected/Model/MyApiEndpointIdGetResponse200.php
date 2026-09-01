<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue946\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue946\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue946\Runtime\AdditionalPropertiesInterface;
class MyApiEndpointIdGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $someField;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'someField' => 'someField'];
    }
}