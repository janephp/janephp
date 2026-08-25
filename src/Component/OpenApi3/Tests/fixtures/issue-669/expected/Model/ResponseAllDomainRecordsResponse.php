<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAllDomainRecordsResponse implements AdditionalPropertiesInterface
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
     * @var list<DomainRecord>
     */
    protected $domainRecords;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * @return list<DomainRecord>
     */
    public function getDomainRecords(): array
    {
        return $this->domainRecords;
    }
    /**
     * @param list<DomainRecord> $domainRecords
     *
     * @return self
     */
    public function setDomainRecords(array $domainRecords): self
    {
        $this->initialized['domainRecords'] = true;
        $this->domainRecords = $domainRecords;
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
    public function definedProperties(): array
    {
        return ['domainRecords' => ['domain_records', 'getDomainRecords', 'setDomainRecords'], 'links' => ['links', 'getLinks', 'setLinks'], 'meta' => ['meta', 'getMeta', 'setMeta']];
    }
}