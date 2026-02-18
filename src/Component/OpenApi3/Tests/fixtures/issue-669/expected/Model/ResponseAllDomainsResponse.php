<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAllDomainsResponse extends \ArrayObject
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
     * Array of volumes.
     *
     * @var list<Domain>
     */
    protected $domains;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * Array of volumes.
     *
     * @return list<Domain>
     */
    public function getDomains(): array
    {
        return $this->domains;
    }
    /**
     * Array of volumes.
     *
     * @param list<Domain> $domains
     *
     * @return self
     */
    public function setDomains(array $domains): self
    {
        $this->initialized['domains'] = true;
        $this->domains = $domains;
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