<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OneClicksCreate implements AdditionalPropertiesInterface
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
     * An array of 1-Click Application slugs to be installed to the Kubernetes cluster.
     *
     * @var list<string>
     */
    protected $addonSlugs = array();
    /**
     * A unique ID for the Kubernetes cluster to which the 1-Click Applications will be installed.
     *
     * @var string
     */
    protected $clusterUuid;
    /**
     * An array of 1-Click Application slugs to be installed to the Kubernetes cluster.
     *
     * @return list<string>
     */
    public function getAddonSlugs(): array
    {
        return $this->addonSlugs;
    }
    /**
     * An array of 1-Click Application slugs to be installed to the Kubernetes cluster.
     *
     * @param list<string> $addonSlugs
     *
     * @return self
     */
    public function setAddonSlugs(array $addonSlugs): self
    {
        $this->initialized['addonSlugs'] = true;
        $this->addonSlugs = $addonSlugs;
        return $this;
    }
    /**
     * A unique ID for the Kubernetes cluster to which the 1-Click Applications will be installed.
     *
     * @return string
     */
    public function getClusterUuid(): string
    {
        return $this->clusterUuid;
    }
    /**
     * A unique ID for the Kubernetes cluster to which the 1-Click Applications will be installed.
     *
     * @param string $clusterUuid
     *
     * @return self
     */
    public function setClusterUuid(string $clusterUuid): self
    {
        $this->initialized['clusterUuid'] = true;
        $this->clusterUuid = $clusterUuid;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['addonSlugs' => ['addon_slugs', 'getAddonSlugs', 'setAddonSlugs'], 'clusterUuid' => ['cluster_uuid', 'getClusterUuid', 'setClusterUuid']];
    }
}