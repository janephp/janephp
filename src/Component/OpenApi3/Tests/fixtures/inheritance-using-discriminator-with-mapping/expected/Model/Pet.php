<?php

namespace Jane\Component\OpenApi3\Tests\Expected\InheritanceUsingDiscriminatorWithMapping\Model;

use Jane\Component\OpenApi3\Tests\Expected\InheritanceUsingDiscriminatorWithMapping\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\InheritanceUsingDiscriminatorWithMapping\Runtime\AdditionalPropertiesInterface;
class Pet implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $petType;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'petType' => 'petType'];
    }
}