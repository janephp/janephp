<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseBillingHistory implements AdditionalPropertiesInterface
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
     * @var list<BillingHistory>
     */
    protected $billingHistory;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * Information about the response itself.
     *
     * @var MetaProperties
     */
    protected $meta;
    /**
     * @return list<BillingHistory>
     */
    public function getBillingHistory(): array
    {
        return $this->billingHistory;
    }
    /**
     * @param list<BillingHistory> $billingHistory
     *
     * @return self
     */
    public function setBillingHistory(array $billingHistory): self
    {
        $this->initialized['billingHistory'] = true;
        $this->billingHistory = $billingHistory;
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
     * Information about the response itself.
     *
     * @return MetaProperties
     */
    public function getMeta(): MetaProperties
    {
        return $this->meta;
    }
    /**
     * Information about the response itself.
     *
     * @param MetaProperties $meta
     *
     * @return self
     */
    public function setMeta(MetaProperties $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['billingHistory' => ['billing_history', 'getBillingHistory', 'setBillingHistory'], 'links' => ['links', 'getLinks', 'setLinks'], 'meta' => ['meta', 'getMeta', 'setMeta']];
    }
}