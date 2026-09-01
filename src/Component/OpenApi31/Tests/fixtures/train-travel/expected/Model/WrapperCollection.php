<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class WrapperCollection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The wrapper for a collection is an array of objects.
     *
     * @var list<mixed>
     */
    public array $data;
    /**
     * A set of hypermedia links which serve as controls for the client.
     *
     * @var mixed
     */
    public $links;
    public function definedProperties(): array
    {
        return ['data' => 'data', 'links' => 'links'];
    }
}