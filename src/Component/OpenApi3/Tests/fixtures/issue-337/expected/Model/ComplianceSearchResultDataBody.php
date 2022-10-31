<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['searchResult'] = true;
        $this->searchResult = $searchResult;
        return $this;
    }
}