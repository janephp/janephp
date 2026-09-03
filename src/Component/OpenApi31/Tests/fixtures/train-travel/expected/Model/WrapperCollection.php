<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model;

use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalPropertiesInterface;
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