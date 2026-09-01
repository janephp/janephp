<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KubernetesSize implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A Droplet size available for use in a Kubernetes node pool.
     *
     * @var string
     */
    public string $name;
    /**
     * The identifier for a size for use when creating a new cluster.
     *
     * @var string
     */
    public string $slug;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'slug' => 'slug'];
    }
}