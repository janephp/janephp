<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class CreateNamespace implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The [datacenter region](https://docs.digitalocean.com/products/platform/availability-matrix/#available-datacenters) in which to create the namespace.
     *
     * @var string
     */
    public string $region;
    /**
     * The namespace's unique name.
     *
     * @var string
     */
    public string $label;
    public function definedProperties(): array
    {
        return ['region' => 'region', 'label' => 'label'];
    }
}