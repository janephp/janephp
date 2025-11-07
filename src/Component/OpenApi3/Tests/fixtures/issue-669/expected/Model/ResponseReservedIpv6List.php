<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseReservedIpv6List extends \ArrayObject
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
     * @var list<ReservedIpv6ListReservedIpv6sItem>
     */
    protected $reservedIpv6s;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * @return list<ReservedIpv6ListReservedIpv6sItem>
     */
    public function getReservedIpv6s(): array
    {
        return $this->reservedIpv6s;
    }
    /**
     * @param list<ReservedIpv6ListReservedIpv6sItem> $reservedIpv6s
     *
     * @return self
     */
    public function setReservedIpv6s(array $reservedIpv6s): self
    {
        $this->initialized['reservedIpv6s'] = true;
        $this->reservedIpv6s = $reservedIpv6s;
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