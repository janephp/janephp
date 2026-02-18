<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2KubernetesClustersClusterIdUpgradePostBody extends \ArrayObject
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
     * The slug identifier for the version of Kubernetes that the cluster will be upgraded to.
     *
     * @var string
     */
    protected $version;
    /**
     * The slug identifier for the version of Kubernetes that the cluster will be upgraded to.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * The slug identifier for the version of Kubernetes that the cluster will be upgraded to.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}