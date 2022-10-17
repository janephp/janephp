<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState extends \ArrayObject
{
    /**
     * 
     *
     * @var bool
     */
    protected $addedToAcceptList;
    /**
     * 
     *
     * @var string
     */
    protected $alertState;
    /**
     * 
     *
     * @var string[]
     */
    protected $assignedTo;
    /**
     * 
     *
     * @var string
     */
    protected $assignmentType;
    /**
     * 
     *
     * @var string
     */
    protected $division;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem[]
     */
    protected $history;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem[]
     */
    protected $matchStates;
    /**
     * 
     *
     * @return bool
     */
    public function getAddedToAcceptList() : bool
    {
        return $this->addedToAcceptList;
    }
    /**
     * 
     *
     * @param bool $addedToAcceptList
     *
     * @return self
     */
    public function setAddedToAcceptList(bool $addedToAcceptList) : self
    {
        $this->addedToAcceptList = $addedToAcceptList;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAlertState() : string
    {
        return $this->alertState;
    }
    /**
     * 
     *
     * @param string $alertState
     *
     * @return self
     */
    public function setAlertState(string $alertState) : self
    {
        $this->alertState = $alertState;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAssignedTo() : array
    {
        return $this->assignedTo;
    }
    /**
     * 
     *
     * @param string[] $assignedTo
     *
     * @return self
     */
    public function setAssignedTo(array $assignedTo) : self
    {
        $this->assignedTo = $assignedTo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAssignmentType() : string
    {
        return $this->assignmentType;
    }
    /**
     * 
     *
     * @param string $assignmentType
     *
     * @return self
     */
    public function setAssignmentType(string $assignmentType) : self
    {
        $this->assignmentType = $assignmentType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDivision() : string
    {
        return $this->division;
    }
    /**
     * 
     *
     * @param string $division
     *
     * @return self
     */
    public function setDivision(string $division) : self
    {
        $this->division = $division;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem[]
     */
    public function getHistory() : array
    {
        return $this->history;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem[] $history
     *
     * @return self
     */
    public function setHistory(array $history) : self
    {
        $this->history = $history;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem[]
     */
    public function getMatchStates() : array
    {
        return $this->matchStates;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem[] $matchStates
     *
     * @return self
     */
    public function setMatchStates(array $matchStates) : self
    {
        $this->matchStates = $matchStates;
        return $this;
    }
}