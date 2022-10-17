<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResult extends \ArrayObject
{
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItem[]
     */
    protected $records;
    /**
     * 
     *
     * @var string
     */
    protected $searchEngineVersion;
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItem[]
     */
    public function getRecords() : array
    {
        return $this->records;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItem[] $records
     *
     * @return self
     */
    public function setRecords(array $records) : self
    {
        $this->records = $records;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSearchEngineVersion() : string
    {
        return $this->searchEngineVersion;
    }
    /**
     * 
     *
     * @param string $searchEngineVersion
     *
     * @return self
     */
    public function setSearchEngineVersion(string $searchEngineVersion) : self
    {
        $this->searchEngineVersion = $searchEngineVersion;
        return $this;
    }
}