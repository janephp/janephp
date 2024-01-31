<?php

namespace PicturePark\API\Model;

class BusinessProcess
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
     */
    public function setId(string $id)
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
     */
    public function setProcessDefinitionId(string $processDefinitionId)
    {
        $this->initialized['processDefinitionId'] = true;
        $this->processDefinitionId = $processDefinitionId;
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
     */
    public function setReferenceId(?string $referenceId)
    {
        $this->initialized['referenceId'] = true;
        $this->referenceId = $referenceId;
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
     */
    public function setReferenceDocType(?string $referenceDocType)
    {
        $this->initialized['referenceDocType'] = true;
        $this->referenceDocType = $referenceDocType;
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
     */
    public function setSupportsCancellation(bool $supportsCancellation)
    {
        $this->initialized['supportsCancellation'] = true;
        $this->supportsCancellation = $supportsCancellation;
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
     */
    public function setBusinessProcessScope($businessProcessScope)
    {
        $this->initialized['businessProcessScope'] = true;
        $this->businessProcessScope = $businessProcessScope;
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
     */
    public function setLifeCycle($lifeCycle)
    {
        $this->initialized['lifeCycle'] = true;
        $this->lifeCycle = $lifeCycle;
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
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
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
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
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
     */
    public function setFinished(bool $finished)
    {
        $this->initialized['finished'] = true;
        $this->finished = $finished;
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
     */
    public function setStateHistory(?array $stateHistory)
    {
        $this->initialized['stateHistory'] = true;
        $this->stateHistory = $stateHistory;
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
     */
    public function setCurrentState(?string $currentState)
    {
        $this->initialized['currentState'] = true;
        $this->currentState = $currentState;
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
     */
    public function setLastReportedProgress(?\DateTime $lastReportedProgress)
    {
        $this->initialized['lastReportedProgress'] = true;
        $this->lastReportedProgress = $lastReportedProgress;
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
     */
    public function setContinuationBusinessProcessId(?string $continuationBusinessProcessId)
    {
        $this->initialized['continuationBusinessProcessId'] = true;
        $this->continuationBusinessProcessId = $continuationBusinessProcessId;
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
     */
    public function setKind(string $kind)
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
    }
}