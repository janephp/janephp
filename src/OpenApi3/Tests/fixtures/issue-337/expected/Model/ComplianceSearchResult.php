<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResult
{
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
        $this->data = $data;
        return $this;
    }
}