<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SalesInvoiceFilter
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
     * @var list<string>|null
     */
    protected $invoiceIds;
    /**
     * @var list<LinkLinkBase>|list<LinkInvoiceLink>|null
     */
    protected $links;
    /**
     * @var bool|null
     */
    protected $includePositions;
    /**
     * @return list<string>|null
     */
    public function getInvoiceIds(): ?array
    {
        return $this->invoiceIds;
    }
    /**
     * @param list<string>|null $invoiceIds
     *
     * @return self
     */
    public function setInvoiceIds(?array $invoiceIds): self
    {
        $this->initialized['invoiceIds'] = true;
        $this->invoiceIds = $invoiceIds;
        return $this;
    }
    /**
     * @return list<LinkLinkBase>|list<LinkInvoiceLink>|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }
    /**
     * @param list<LinkLinkBase>|list<LinkInvoiceLink>|null $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getIncludePositions(): ?bool
    {
        return $this->includePositions;
    }
    /**
     * @param bool|null $includePositions
     *
     * @return self
     */
    public function setIncludePositions(?bool $includePositions): self
    {
        $this->initialized['includePositions'] = true;
        $this->includePositions = $includePositions;
        return $this;
    }
}