<?php

namespace Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Model;

use Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Runtime\AdditionalPropertiesInterface;
class User implements AdditionalPropertiesInterface
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