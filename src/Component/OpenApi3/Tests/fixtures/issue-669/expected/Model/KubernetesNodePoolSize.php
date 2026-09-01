<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KubernetesNodePoolSize implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The slug identifier for the type of Droplet used as workers in the node pool.
     *
     * @var string
     */
    public string $size;
    public function definedProperties(): array
    {
        return ['size' => 'size'];
    }
}