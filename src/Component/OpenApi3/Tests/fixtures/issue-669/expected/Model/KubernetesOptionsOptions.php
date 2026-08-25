<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KubernetesOptionsOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<KubernetesRegion>
     */
    protected $regions;
    /**
     * @var list<KubernetesVersion>
     */
    protected $versions;
    /**
     * @var list<KubernetesSize>
     */
    protected $sizes;
    /**
     * @return list<KubernetesRegion>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }
    /**
     * @param list<KubernetesRegion> $regions
     *
     * @return self
     */
    public function setRegions(array $regions): self
    {
        $this->initialized['regions'] = true;
        $this->regions = $regions;
        return $this;
    }
    /**
     * @return list<KubernetesVersion>
     */
    public function getVersions(): array
    {
        return $this->versions;
    }
    /**
     * @param list<KubernetesVersion> $versions
     *
     * @return self
     */
    public function setVersions(array $versions): self
    {
        $this->initialized['versions'] = true;
        $this->versions = $versions;
        return $this;
    }
    /**
     * @return list<KubernetesSize>
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }
    /**
     * @param list<KubernetesSize> $sizes
     *
     * @return self
     */
    public function setSizes(array $sizes): self
    {
        $this->initialized['sizes'] = true;
        $this->sizes = $sizes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['regions' => ['regions', 'getRegions', 'setRegions'], 'versions' => ['versions', 'getVersions', 'setVersions'], 'sizes' => ['sizes', 'getSizes', 'setSizes']];
    }
}