<?php

namespace PicturePark\API\Model;

class BusinessProcess
{
    /**
     * ID of the business process.
     *
     * @var string
     */
    public string $id;
    /**
     * ID of the business process definition associated to the business process.
     *
     * @var string
     */
    public string $processDefinitionId;
    /**
     * ID of the document that is modified by the running of the business process. Used during the cancellation of the business process.
     *
     * @var string|null
     */
    public ?string $referenceId;
    /**
     * Type of the document that is modified by the running of the business process. Used during the cancellation of the business process.
     *
     * @var string|null
     */
    public ?string $referenceDocType;
    /**
     * True if the business process execution can be cancelled. False otherwise.
     *
     * @var bool
     */
    public bool $supportsCancellation;
    /**
     * Scope of the business process.
     *
     * @var string
     */
    public string $businessProcessScope;
    /**
     * Current life cycle of the business process.
     *
     * @var string
     */
    public string $lifeCycle;
    /**
     * When the business process started.
     *
     * @var \DateTime
     */
    public \DateTime $startDate;
    /**
     * When the business process finished.
     *
     * @var \DateTime
     */
    public \DateTime $endDate;
    /**
     * Is the business process finished.
     *
     * @var bool
     */
    public bool $finished;
    /**
     * List containing the history of all the state transitions of the business process.
     *
     * @var list<BusinessProcessState>|null
     */
    public ?array $stateHistory;
    /**
     * Current state of the business process.
     *
     * @var string|null
     */
    public ?string $currentState;
    /**
     * Timestamp when the business process last reported progress.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $lastReportedProgress;
    /**
     * Id of the business process that will be automatically started after the completion of the current one, if any.
     *
     * @var string|null
     */
    public ?string $continuationBusinessProcessId;
    /**
     * @var string
     */
    public string $kind;
}