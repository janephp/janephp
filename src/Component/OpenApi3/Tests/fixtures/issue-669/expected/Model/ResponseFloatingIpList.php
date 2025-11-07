<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseFloatingIpList extends \ArrayObject
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
     * @var list<FloatingIp>
     */
    protected $floatingIps;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * @return list<FloatingIp>
     */
    public function getFloatingIps(): array
    {
        return $this->floatingIps;
    }
    /**
     * @param list<FloatingIp> $floatingIps
     *
     * @return self
     */
    public function setFloatingIps(array $floatingIps): self
    {
        $this->initialized['floatingIps'] = true;
        $this->floatingIps = $floatingIps;
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