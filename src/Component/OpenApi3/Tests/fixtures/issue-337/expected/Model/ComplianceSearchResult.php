<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResult extends \ArrayObject
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
     * @var ComplianceSearchResultData
     */
    protected $data;
    /**
     * 
     *
     * @return ComplianceSearchResultData
     */
    public function getData() : ComplianceSearchResultData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultData $data
     *
     * @return self
     */
    public function setData(ComplianceSearchResultData $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}