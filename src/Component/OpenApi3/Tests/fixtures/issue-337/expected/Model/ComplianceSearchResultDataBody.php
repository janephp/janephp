<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBody
{
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResult
     */
    protected $searchResult;
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResult
     */
    public function getSearchResult() : ComplianceSearchResultDataBodySearchResult
    {
        return $this->searchResult;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResult $searchResult
     *
     * @return self
     */
    public function setSearchResult(ComplianceSearchResultDataBodySearchResult $searchResult) : self
    {
        $this->searchResult = $searchResult;
        return $this;
    }
}