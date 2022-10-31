<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResult extends \ArrayObject
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
        $this->initialized['records'] = true;
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
        $this->initialized['searchEngineVersion'] = true;
        $this->searchEngineVersion = $searchEngineVersion;
        return $this;
    }
}