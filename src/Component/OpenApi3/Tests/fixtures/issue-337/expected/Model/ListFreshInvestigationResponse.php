<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListFreshInvestigationResponse implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $totalCount;
    /**
     * @var list<ListFreshInvestigationResponseOrdersItem>
     */
    protected $orders;
    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * @return list<ListFreshInvestigationResponseOrdersItem>
     */
    public function getOrders(): array
    {
        return $this->orders;
    }
    /**
     * @param list<ListFreshInvestigationResponseOrdersItem> $orders
     *
     * @return self
     */
    public function setOrders(array $orders): self
    {
        $this->initialized['orders'] = true;
        $this->orders = $orders;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['totalCount' => ['totalCount', 'getTotalCount', 'setTotalCount'], 'orders' => ['orders', 'getOrders', 'setOrders']];
    }
}