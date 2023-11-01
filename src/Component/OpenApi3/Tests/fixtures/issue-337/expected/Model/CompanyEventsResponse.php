<?php

namespace CreditSafe\API\Model;

class CompanyEventsResponse extends \ArrayObject
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
     * The total number of events returned for the given company.
     *
     * @var float
     */
    protected $totalCount;
    /**
     * 
     *
     * @var Event[]
     */
    protected $data;
    /**
     * Paging parameters.
     *
     * @var Paging
     */
    protected $paging;
    /**
     * The total number of events returned for the given company.
     *
     * @return float
     */
    public function getTotalCount() : float
    {
        return $this->totalCount;
    }
    /**
     * The total number of events returned for the given company.
     *
     * @param float $totalCount
     *
     * @return self
     */
    public function setTotalCount(float $totalCount) : self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return Event[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Event[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * Paging parameters.
     *
     * @return Paging
     */
    public function getPaging() : Paging
    {
        return $this->paging;
    }
    /**
     * Paging parameters.
     *
     * @param Paging $paging
     *
     * @return self
     */
    public function setPaging(Paging $paging) : self
    {
        $this->initialized['paging'] = true;
        $this->paging = $paging;
        return $this;
    }
}