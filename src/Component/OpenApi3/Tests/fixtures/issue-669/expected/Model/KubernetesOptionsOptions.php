<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KubernetesOptionsOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<KubernetesRegion>
     */
    public array $regions;
    /**
     * @var list<KubernetesVersion>
     */
    public array $versions;
    /**
     * @var list<KubernetesSize>
     */
    public array $sizes;
    public function definedProperties(): array
    {
        return ['regions' => 'regions', 'versions' => 'versions', 'sizes' => 'sizes'];
    }
}