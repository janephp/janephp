<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue939\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue939\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue939\Runtime\AdditionalPropertiesInterface;
class User implements AdditionalPropertiesInterface
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