<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItem
{
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
        $this->watchlist = $watchlist;
        return $this;
    }
}