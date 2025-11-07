<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseByoipPrefixList extends \ArrayObject
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
     * @var list<ByoipPrefix>
     */
    protected $byoipPrefixes;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * @return list<ByoipPrefix>
     */
    public function getByoipPrefixes(): array
    {
        return $this->byoipPrefixes;
    }
    /**
     * @param list<ByoipPrefix> $byoipPrefixes
     *
     * @return self
     */
    public function setByoipPrefixes(array $byoipPrefixes): self
    {
        $this->initialized['byoipPrefixes'] = true;
        $this->byoipPrefixes = $byoipPrefixes;
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