<?php

namespace CreditSafe\API\Model;

class ListFreshInvestigationResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @var ListFreshInvestigationResponseOrdersItem[]
     */
    protected $orders;
    /**
     * 
     *
     * @return int
     */
    public function getTotalCount() : int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount) : self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return ListFreshInvestigationResponseOrdersItem[]
     */
    public function getOrders() : array
    {
        return $this->orders;
    }
    /**
     * 
     *
     * @param ListFreshInvestigationResponseOrdersItem[] $orders
     *
     * @return self
     */
    public function setOrders(array $orders) : self
    {
        $this->initialized['orders'] = true;
        $this->orders = $orders;
        return $this;
    }
}