<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue803\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue803\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue803\Runtime\AdditionalPropertiesInterface;
class File implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * File identifier
     *
     * @var string
     */
    public string $id;
    public function definedProperties(): array
    {
        return ['id' => 'id'];
    }
}