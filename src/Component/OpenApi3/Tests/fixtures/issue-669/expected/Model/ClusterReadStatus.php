<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterReadStatus implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A string indicating the current status of the cluster.
     *
     * @var string
     */
    public string $state;
    /**
     * An optional message providing additional information about the current cluster state.
     *
     * @var string
     */
    public string $message;
    public function definedProperties(): array
    {
        return ['state' => 'state', 'message' => 'message'];
    }
}