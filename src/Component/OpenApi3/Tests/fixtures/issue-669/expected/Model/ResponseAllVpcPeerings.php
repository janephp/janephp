<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAllVpcPeerings extends \ArrayObject
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
     * @var list<array<string, mixed>>
     */
    protected $vpcPeerings;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * @return list<array<string, mixed>>
     */
    public function getVpcPeerings(): array
    {
        return $this->vpcPeerings;
    }
    /**
     * @param list<array<string, mixed>> $vpcPeerings
     *
     * @return self
     */
    public function setVpcPeerings(array $vpcPeerings): self
    {
        $this->initialized['vpcPeerings'] = true;
        $this->vpcPeerings = $vpcPeerings;
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