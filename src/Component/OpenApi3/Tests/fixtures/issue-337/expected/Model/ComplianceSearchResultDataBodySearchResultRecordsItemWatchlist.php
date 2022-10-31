<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist extends \ArrayObject
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
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem[]
     */
    protected $matches;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem[]
     */
    public function getMatches() : array
    {
        return $this->matches;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem[] $matches
     *
     * @return self
     */
    public function setMatches(array $matches) : self
    {
        $this->initialized['matches'] = true;
        $this->matches = $matches;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}