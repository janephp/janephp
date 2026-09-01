<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Model;

use Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ReferencedRequestBodies\Runtime\AdditionalPropertiesInterface;
class _Parent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var list<Child>
     */
    public array $child;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'child' => 'child'];
    }
}