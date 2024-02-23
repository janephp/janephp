<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState extends \ArrayObject
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
     * @var list<string>
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
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem>
     */
    protected $history;
    /**
     * 
     *
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem>
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
        $this->initialized['addedToAcceptList'] = true;
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
        $this->initialized['alertState'] = true;
        $this->alertState = $alertState;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getAssignedTo() : array
    {
        return $this->assignedTo;
    }
    /**
     * 
     *
     * @param list<string> $assignedTo
     *
     * @return self
     */
    public function setAssignedTo(array $assignedTo) : self
    {
        $this->initialized['assignedTo'] = true;
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
        $this->initialized['assignmentType'] = true;
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
        $this->initialized['division'] = true;
        $this->division = $division;
        return $this;
    }
    /**
     * 
     *
     * @return list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem>
     */
    public function getHistory() : array
    {
        return $this->history;
    }
    /**
     * 
     *
     * @param list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem> $history
     *
     * @return self
     */
    public function setHistory(array $history) : self
    {
        $this->initialized['history'] = true;
        $this->history = $history;
        return $this;
    }
    /**
     * 
     *
     * @return list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem>
     */
    public function getMatchStates() : array
    {
        return $this->matchStates;
    }
    /**
     * 
     *
     * @param list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem> $matchStates
     *
     * @return self
     */
    public function setMatchStates(array $matchStates) : self
    {
        $this->initialized['matchStates'] = true;
        $this->matchStates = $matchStates;
        return $this;
    }
}