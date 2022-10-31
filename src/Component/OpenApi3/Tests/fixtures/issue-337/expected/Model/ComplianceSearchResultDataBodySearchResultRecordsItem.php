<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItem extends \ArrayObject
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
     * @var int
     */
    protected $record;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails
     */
    protected $recordDetails;
    /**
     * 
     *
     * @var int
     */
    protected $resultID;
    /**
     * 
     *
     * @var int
     */
    protected $runID;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist
     */
    protected $watchlist;
    /**
     * 
     *
     * @return int
     */
    public function getRecord() : int
    {
        return $this->record;
    }
    /**
     * 
     *
     * @param int $record
     *
     * @return self
     */
    public function setRecord(int $record) : self
    {
        $this->initialized['record'] = true;
        $this->record = $record;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails
     */
    public function getRecordDetails() : ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails
    {
        return $this->recordDetails;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails $recordDetails
     *
     * @return self
     */
    public function setRecordDetails(ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails $recordDetails) : self
    {
        $this->initialized['recordDetails'] = true;
        $this->recordDetails = $recordDetails;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getResultID() : int
    {
        return $this->resultID;
    }
    /**
     * 
     *
     * @param int $resultID
     *
     * @return self
     */
    public function setResultID(int $resultID) : self
    {
        $this->initialized['resultID'] = true;
        $this->resultID = $resultID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRunID() : int
    {
        return $this->runID;
    }
    /**
     * 
     *
     * @param int $runID
     *
     * @return self
     */
    public function setRunID(int $runID) : self
    {
        $this->initialized['runID'] = true;
        $this->runID = $runID;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist
     */
    public function getWatchlist() : ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist
    {
        return $this->watchlist;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist $watchlist
     *
     * @return self
     */
    public function setWatchlist(ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist $watchlist) : self
    {
        $this->initialized['watchlist'] = true;
        $this->watchlist = $watchlist;
        return $this;
    }
}