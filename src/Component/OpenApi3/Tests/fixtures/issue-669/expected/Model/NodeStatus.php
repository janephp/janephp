<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NodeStatus implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A string indicating the current status of the node.
     *
     * @var string
     */
    public string $state;
    public function definedProperties(): array
    {
        return ['state' => 'state'];
    }
}