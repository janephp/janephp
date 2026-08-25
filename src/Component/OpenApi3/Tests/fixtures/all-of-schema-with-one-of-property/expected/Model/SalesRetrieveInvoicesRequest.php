<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SalesRetrieveInvoicesRequest extends SalesRetrieveSettlementRequestBase
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
     * @var SalesRetrieveInvoicesRequestFilter|null
     */
    protected $filter;
    /**
     * @return SalesRetrieveInvoicesRequestFilter|null
     */
    public function getFilter(): ?SalesRetrieveInvoicesRequestFilter
    {
        return $this->filter;
    }
    /**
     * @param SalesRetrieveInvoicesRequestFilter|null $filter
     *
     * @return self
     */
    public function setFilter(?SalesRetrieveInvoicesRequestFilter $filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
}