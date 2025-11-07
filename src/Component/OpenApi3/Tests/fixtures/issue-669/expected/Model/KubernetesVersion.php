<?php

namespace Jane\Generated\DigitalOcean\Model;

class KubernetesVersion extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The slug identifier for an available version of Kubernetes for use when creating or updating a cluster. The string contains both the upstream version of Kubernetes as well as the DigitalOcean revision.
     *
     * @var string
     */
    protected $slug;
    /**
     * The upstream version string for the version of Kubernetes provided by a given slug.
     *
     * @var string
     */
    protected $kubernetesVersion;
    /**
     * The features available with the version of Kubernetes provided by a given slug.
     *
     * @var list<string>
     */
    protected $supportedFeatures;
    /**
     * The slug identifier for an available version of Kubernetes for use when creating or updating a cluster. The string contains both the upstream version of Kubernetes as well as the DigitalOcean revision.
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * The slug identifier for an available version of Kubernetes for use when creating or updating a cluster. The string contains both the upstream version of Kubernetes as well as the DigitalOcean revision.
     *
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
    /**
     * The upstream version string for the version of Kubernetes provided by a given slug.
     *
     * @return string
     */
    public function getKubernetesVersion(): string
    {
        return $this->kubernetesVersion;
    }
    /**
     * The upstream version string for the version of Kubernetes provided by a given slug.
     *
     * @param string $kubernetesVersion
     *
     * @return self
     */
    public function setKubernetesVersion(string $kubernetesVersion): self
    {
        $this->initialized['kubernetesVersion'] = true;
        $this->kubernetesVersion = $kubernetesVersion;
        return $this;
    }
    /**
     * The features available with the version of Kubernetes provided by a given slug.
     *
     * @return list<string>
     */
    public function getSupportedFeatures(): array
    {
        return $this->supportedFeatures;
    }
    /**
     * The features available with the version of Kubernetes provided by a given slug.
     *
     * @param list<string> $supportedFeatures
     *
     * @return self
     */
    public function setSupportedFeatures(array $supportedFeatures): self
    {
        $this->initialized['supportedFeatures'] = true;
        $this->supportedFeatures = $supportedFeatures;
        return $this;
    }
}