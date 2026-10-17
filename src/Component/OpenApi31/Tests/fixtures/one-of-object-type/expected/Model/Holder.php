<?php

namespace Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Model;

use Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\OneOfObjectType\Runtime\AdditionalPropertiesInterface;
class Holder implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int|string
     */
    public $primitive;
    /**
     * @var TypeOne|TypeTwo
     */
    public $entity;
    /**
     * @var TypeOne|TypeTwo
     */
    public $entityReference;
    /**
     * @var int|string
     */
    public $primitiveEntityReference;
    /**
     * @var mixed
     */
    public $inlineObjects;
    public function definedProperties(): array
    {
        return ['primitive' => 'primitive', 'entity' => 'entity', 'entityReference' => 'entityReference', 'primitiveEntityReference' => 'primitiveEntityReference', 'inlineObjects' => 'inlineObjects'];
    }
}