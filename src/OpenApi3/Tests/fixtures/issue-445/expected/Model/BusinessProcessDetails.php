<?php

namespace PicturePark\API\Model;

class BusinessProcessDetails
{
    /**
     * ID of the business process.
     *
     * @var string
     */
    protected $id;
    /**
     * ID of the business process definition associated to the business process.
     *
     * @var string
     */
    protected $processDefinitionId;
    /**
     * ID of the document that is modified by the running of the business process. Used during the cancellation of the business process.
     *
     * @var string|null
     */
    protected $referenceId;
    /**
     * Type of the document that is modified by the running of the business process. Used during the cancellation of the business process.
     *
     * @var string|null
     */
    protected $referenceDocType;
    /**
     * True if the business process execution can be cancelled. False otherwise.
     *
     * @var bool
     */
    protected $supportsCancellation;
    /**
     * Scope of the business process.
     *
     * @var mixed
     */
    protected $businessProcessScope;
    /**
     * Current life cycle of the business process.
     *
     * @var mixed
     */
    protected $lifeCycle;
    /**
     * When the business process started.
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * When the business process finished.
     *
     * @var \DateTime
     */
    protected $endDate;
    /**
     * Is the business process finished.
     *
     * @var bool
     */
    protected $finished;
    /**
     * List containing the history of all the state transitions of the business process.
     *
     * @var BusinessProcessState[]|null
     */
    protected $stateHistory;
    /**
     * Current state of the business process.
     *
     * @var string|null
     */
    protected $currentState;
    /**
     * Timestamp when the business process last reported progress.
     *
     * @var \DateTime|null
     */
    protected $lastReportedProgress;
    /**
     * Id of the business process that will be automatically started after the completion of the current one, if any.
     *
     * @var string|null
     */
    protected $continuationBusinessProcessId;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * Details for the business process.
     *
     * @var mixed|null
     */
    protected $details;
    /**
     * ID of the business process.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * ID of the business process.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * ID of the business process definition associated to the business process.
     *
     * @return string
     */
    public function getProcessDefinitionId() : string
    {
        return $this->processDefinitionId;
    }
    /**
     * ID of the business process definition associated to the business process.
     *
     * @param string $processDefinitionId
     *
     * @return self
     */
    public function setProcessDefinitionId(string $processDefinitionId) : self
    {
        $this->processDefinitionId = $processDefinitionId;
        return $this;
    }
    /**
     * ID of the document that is modified by the running of the business process. Used during the cancellation of the business process.
     *
     * @return string|null
     */
    public function getReferenceId() : ?string
    {
        return $this->referenceId;
    }
    /**
     * ID of the document that is modified by the running of the business process. Used during the cancellation of the business process.
     *
     * @param string|null $referenceId
     *
     * @return self
     */
    public function setReferenceId(?string $referenceId) : self
    {
        $this->referenceId = $referenceId;
        return $this;
    }
    /**
     * Type of the document that is modified by the running of the business process. Used during the cancellation of the business process.
     *
     * @return string|null
     */
    public function getReferenceDocType() : ?string
    {
        return $this->referenceDocType;
    }
    /**
     * Type of the document that is modified by the running of the business process. Used during the cancellation of the business process.
     *
     * @param string|null $referenceDocType
     *
     * @return self
     */
    public function setReferenceDocType(?string $referenceDocType) : self
    {
        $this->referenceDocType = $referenceDocType;
        return $this;
    }
    /**
     * True if the business process execution can be cancelled. False otherwise.
     *
     * @return bool
     */
    public function getSupportsCancellation() : bool
    {
        return $this->supportsCancellation;
    }
    /**
     * True if the business process execution can be cancelled. False otherwise.
     *
     * @param bool $supportsCancellation
     *
     * @return self
     */
    public function setSupportsCancellation(bool $supportsCancellation) : self
    {
        $this->supportsCancellation = $supportsCancellation;
        return $this;
    }
    /**
     * Scope of the business process.
     *
     * @return mixed
     */
    public function getBusinessProcessScope()
    {
        return $this->businessProcessScope;
    }
    /**
     * Scope of the business process.
     *
     * @param mixed $businessProcessScope
     *
     * @return self
     */
    public function setBusinessProcessScope($businessProcessScope) : self
    {
        $this->businessProcessScope = $businessProcessScope;
        return $this;
    }
    /**
     * Current life cycle of the business process.
     *
     * @return mixed
     */
    public function getLifeCycle()
    {
        return $this->lifeCycle;
    }
    /**
     * Current life cycle of the business process.
     *
     * @param mixed $lifeCycle
     *
     * @return self
     */
    public function setLifeCycle($lifeCycle) : self
    {
        $this->lifeCycle = $lifeCycle;
        return $this;
    }
    /**
     * When the business process started.
     *
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        return $this->startDate;
    }
    /**
     * When the business process started.
     *
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * When the business process finished.
     *
     * @return \DateTime
     */
    public function getEndDate() : \DateTime
    {
        return $this->endDate;
    }
    /**
     * When the business process finished.
     *
     * @param \DateTime $endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Is the business process finished.
     *
     * @return bool
     */
    public function getFinished() : bool
    {
        return $this->finished;
    }
    /**
     * Is the business process finished.
     *
     * @param bool $finished
     *
     * @return self
     */
    public function setFinished(bool $finished) : self
    {
        $this->finished = $finished;
        return $this;
    }
    /**
     * List containing the history of all the state transitions of the business process.
     *
     * @return BusinessProcessState[]|null
     */
    public function getStateHistory() : ?array
    {
        return $this->stateHistory;
    }
    /**
     * List containing the history of all the state transitions of the business process.
     *
     * @param BusinessProcessState[]|null $stateHistory
     *
     * @return self
     */
    public function setStateHistory(?array $stateHistory) : self
    {
        $this->stateHistory = $stateHistory;
        return $this;
    }
    /**
     * Current state of the business process.
     *
     * @return string|null
     */
    public function getCurrentState() : ?string
    {
        return $this->currentState;
    }
    /**
     * Current state of the business process.
     *
     * @param string|null $currentState
     *
     * @return self
     */
    public function setCurrentState(?string $currentState) : self
    {
        $this->currentState = $currentState;
        return $this;
    }
    /**
     * Timestamp when the business process last reported progress.
     *
     * @return \DateTime|null
     */
    public function getLastReportedProgress() : ?\DateTime
    {
        return $this->lastReportedProgress;
    }
    /**
     * Timestamp when the business process last reported progress.
     *
     * @param \DateTime|null $lastReportedProgress
     *
     * @return self
     */
    public function setLastReportedProgress(?\DateTime $lastReportedProgress) : self
    {
        $this->lastReportedProgress = $lastReportedProgress;
        return $this;
    }
    /**
     * Id of the business process that will be automatically started after the completion of the current one, if any.
     *
     * @return string|null
     */
    public function getContinuationBusinessProcessId() : ?string
    {
        return $this->continuationBusinessProcessId;
    }
    /**
     * Id of the business process that will be automatically started after the completion of the current one, if any.
     *
     * @param string|null $continuationBusinessProcessId
     *
     * @return self
     */
    public function setContinuationBusinessProcessId(?string $continuationBusinessProcessId) : self
    {
        $this->continuationBusinessProcessId = $continuationBusinessProcessId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * Details for the business process.
     *
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Details for the business process.
     *
     * @param mixed $details
     *
     * @return self
     */
    public function setDetails($details) : self
    {
        $this->details = $details;
        return $this;
    }
}