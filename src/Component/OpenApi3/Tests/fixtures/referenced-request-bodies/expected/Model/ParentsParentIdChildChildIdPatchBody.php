<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model;

use Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\AdditionalPropertiesInterface;
class ParentsParentIdChildChildIdPatchBody implements AdditionalPropertiesInterface
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