<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAllAutoscalePools extends \ArrayObject
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
     * @var list<AutoscalePool>
     */
    protected $autoscalePools;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * @return list<AutoscalePool>
     */
    public function getAutoscalePools(): array
    {
        return $this->autoscalePools;
    }
    /**
     * @param list<AutoscalePool> $autoscalePools
     *
     * @return self
     */
    public function setAutoscalePools(array $autoscalePools): self
    {
        $this->initialized['autoscalePools'] = true;
        $this->autoscalePools = $autoscalePools;
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