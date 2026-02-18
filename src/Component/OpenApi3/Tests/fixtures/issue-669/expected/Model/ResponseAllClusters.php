<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAllClusters extends \ArrayObject
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
     * @var list<ClusterRead>
     */
    protected $kubernetesClusters;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * @return list<ClusterRead>
     */
    public function getKubernetesClusters(): array
    {
        return $this->kubernetesClusters;
    }
    /**
     * @param list<ClusterRead> $kubernetesClusters
     *
     * @return self
     */
    public function setKubernetesClusters(array $kubernetesClusters): self
    {
        $this->initialized['kubernetesClusters'] = true;
        $this->kubernetesClusters = $kubernetesClusters;
        return $this;
    }
    /**
     * @return PageLinks
     */
    public function getLinks(): PageLinks
    {
        return $this->links;
    }
    /**
     * @param PageLinks $links
     *
     * @return self
     */
    public function setLinks(PageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * @return MetaMeta
     */
    public function getMeta(): MetaMeta
    {
        return $this->meta;
    }
    /**
     * @param MetaMeta $meta
     *
     * @return self
     */
    public function setMeta(MetaMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}