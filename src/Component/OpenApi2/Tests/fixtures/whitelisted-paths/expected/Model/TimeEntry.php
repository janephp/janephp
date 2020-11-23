<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class TimeEntry
{
    /**
     * Unique ID for the time entry.
     *
     * @var int
     */
    protected $id;
    /**
     * Date of the time entry.
     *
     * @var \DateTime
     */
    protected $spentDate;
    /**
     * An object containing the id and name of the associated user.
     *
     * @var TimeEntryUser
     */
    protected $user;
    /**
     * 
     *
     * @var UserAssignment
     */
    protected $userAssignment;
    /**
     * An object containing the id and name of the associated client.
     *
     * @var TimeEntryClient
     */
    protected $client;
    /**
     * An object containing the id and name of the associated project.
     *
     * @var TimeEntryProject
     */
    protected $project;
    /**
     * An object containing the id and name of the associated task.
     *
     * @var TimeEntryTask
     */
    protected $task;
    /**
     * 
     *
     * @var TaskAssignment
     */
    protected $taskAssignment;
    /**
     * An object containing the id, group_id, permalink, service, and service_icon_url of the associated external reference.
     *
     * @var TimeEntryExternalReference
     */
    protected $externalReference;
    /**
     * Once the time entry has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @var TimeEntryInvoice
     */
    protected $invoice;
    /**
     * Number of (decimal time) hours tracked in this time entry.
     *
     * @var float
     */
    protected $hours;
    /**
     * Number of (decimal time) hours tracked in this time entry used in summary reports and invoices. This value is rounded according to the Time Rounding setting in your Preferences.
     *
     * @var float
     */
    protected $roundedHours;
    /**
     * Notes attached to the time entry.
     *
     * @var string
     */
    protected $notes;
    /**
     * Whether or not the time entry has been locked.
     *
     * @var bool
     */
    protected $isLocked;
    /**
     * Why the time entry has been locked.
     *
     * @var string
     */
    protected $lockedReason;
    /**
     * Whether or not the time entry has been approved via Timesheet Approval.
     *
     * @var bool
     */
    protected $isClosed;
    /**
     * Whether or not the time entry has been marked as invoiced.
     *
     * @var bool
     */
    protected $isBilled;
    /**
     * Date and time the timer was started (if tracking by duration). Use the ISO 8601 Format.
     *
     * @var \DateTime
     */
    protected $timerStartedAt;
    /**
     * Time the time entry was started (if tracking by start/end times).
     *
     * @var string
     */
    protected $startedTime;
    /**
     * Time the time entry was ended (if tracking by start/end times).
     *
     * @var string
     */
    protected $endedTime;
    /**
     * Whether or not the time entry is currently running.
     *
     * @var bool
     */
    protected $isRunning;
    /**
     * Whether or not the time entry is billable.
     *
     * @var bool
     */
    protected $billable;
    /**
     * Whether or not the time entry counts towards the project budget.
     *
     * @var bool
     */
    protected $budgeted;
    /**
     * The billable rate for the time entry.
     *
     * @var float
     */
    protected $billableRate;
    /**
     * The cost rate for the time entry.
     *
     * @var float
     */
    protected $costRate;
    /**
     * Date and time the time entry was created. Use the ISO 8601 Format.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the time entry was last updated. Use the ISO 8601 Format.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the time entry.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the time entry.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Date of the time entry.
     *
     * @return \DateTime
     */
    public function getSpentDate() : \DateTime
    {
        return $this->spentDate;
    }
    /**
     * Date of the time entry.
     *
     * @param \DateTime $spentDate
     *
     * @return self
     */
    public function setSpentDate(\DateTime $spentDate) : self
    {
        $this->spentDate = $spentDate;
        return $this;
    }
    /**
     * An object containing the id and name of the associated user.
     *
     * @return TimeEntryUser
     */
    public function getUser() : TimeEntryUser
    {
        return $this->user;
    }
    /**
     * An object containing the id and name of the associated user.
     *
     * @param TimeEntryUser $user
     *
     * @return self
     */
    public function setUser(TimeEntryUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return UserAssignment
     */
    public function getUserAssignment() : UserAssignment
    {
        return $this->userAssignment;
    }
    /**
     * 
     *
     * @param UserAssignment $userAssignment
     *
     * @return self
     */
    public function setUserAssignment(UserAssignment $userAssignment) : self
    {
        $this->userAssignment = $userAssignment;
        return $this;
    }
    /**
     * An object containing the id and name of the associated client.
     *
     * @return TimeEntryClient
     */
    public function getClient() : TimeEntryClient
    {
        return $this->client;
    }
    /**
     * An object containing the id and name of the associated client.
     *
     * @param TimeEntryClient $client
     *
     * @return self
     */
    public function setClient(TimeEntryClient $client) : self
    {
        $this->client = $client;
        return $this;
    }
    /**
     * An object containing the id and name of the associated project.
     *
     * @return TimeEntryProject
     */
    public function getProject() : TimeEntryProject
    {
        return $this->project;
    }
    /**
     * An object containing the id and name of the associated project.
     *
     * @param TimeEntryProject $project
     *
     * @return self
     */
    public function setProject(TimeEntryProject $project) : self
    {
        $this->project = $project;
        return $this;
    }
    /**
     * An object containing the id and name of the associated task.
     *
     * @return TimeEntryTask
     */
    public function getTask() : TimeEntryTask
    {
        return $this->task;
    }
    /**
     * An object containing the id and name of the associated task.
     *
     * @param TimeEntryTask $task
     *
     * @return self
     */
    public function setTask(TimeEntryTask $task) : self
    {
        $this->task = $task;
        return $this;
    }
    /**
     * 
     *
     * @return TaskAssignment
     */
    public function getTaskAssignment() : TaskAssignment
    {
        return $this->taskAssignment;
    }
    /**
     * 
     *
     * @param TaskAssignment $taskAssignment
     *
     * @return self
     */
    public function setTaskAssignment(TaskAssignment $taskAssignment) : self
    {
        $this->taskAssignment = $taskAssignment;
        return $this;
    }
    /**
     * An object containing the id, group_id, permalink, service, and service_icon_url of the associated external reference.
     *
     * @return TimeEntryExternalReference
     */
    public function getExternalReference() : TimeEntryExternalReference
    {
        return $this->externalReference;
    }
    /**
     * An object containing the id, group_id, permalink, service, and service_icon_url of the associated external reference.
     *
     * @param TimeEntryExternalReference $externalReference
     *
     * @return self
     */
    public function setExternalReference(TimeEntryExternalReference $externalReference) : self
    {
        $this->externalReference = $externalReference;
        return $this;
    }
    /**
     * Once the time entry has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @return TimeEntryInvoice
     */
    public function getInvoice() : TimeEntryInvoice
    {
        return $this->invoice;
    }
    /**
     * Once the time entry has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @param TimeEntryInvoice $invoice
     *
     * @return self
     */
    public function setInvoice(TimeEntryInvoice $invoice) : self
    {
        $this->invoice = $invoice;
        return $this;
    }
    /**
     * Number of (decimal time) hours tracked in this time entry.
     *
     * @return float
     */
    public function getHours() : float
    {
        return $this->hours;
    }
    /**
     * Number of (decimal time) hours tracked in this time entry.
     *
     * @param float $hours
     *
     * @return self
     */
    public function setHours(float $hours) : self
    {
        $this->hours = $hours;
        return $this;
    }
    /**
     * Number of (decimal time) hours tracked in this time entry used in summary reports and invoices. This value is rounded according to the Time Rounding setting in your Preferences.
     *
     * @return float
     */
    public function getRoundedHours() : float
    {
        return $this->roundedHours;
    }
    /**
     * Number of (decimal time) hours tracked in this time entry used in summary reports and invoices. This value is rounded according to the Time Rounding setting in your Preferences.
     *
     * @param float $roundedHours
     *
     * @return self
     */
    public function setRoundedHours(float $roundedHours) : self
    {
        $this->roundedHours = $roundedHours;
        return $this;
    }
    /**
     * Notes attached to the time entry.
     *
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes;
    }
    /**
     * Notes attached to the time entry.
     *
     * @param string $notes
     *
     * @return self
     */
    public function setNotes(string $notes) : self
    {
        $this->notes = $notes;
        return $this;
    }
    /**
     * Whether or not the time entry has been locked.
     *
     * @return bool
     */
    public function getIsLocked() : bool
    {
        return $this->isLocked;
    }
    /**
     * Whether or not the time entry has been locked.
     *
     * @param bool $isLocked
     *
     * @return self
     */
    public function setIsLocked(bool $isLocked) : self
    {
        $this->isLocked = $isLocked;
        return $this;
    }
    /**
     * Why the time entry has been locked.
     *
     * @return string
     */
    public function getLockedReason() : string
    {
        return $this->lockedReason;
    }
    /**
     * Why the time entry has been locked.
     *
     * @param string $lockedReason
     *
     * @return self
     */
    public function setLockedReason(string $lockedReason) : self
    {
        $this->lockedReason = $lockedReason;
        return $this;
    }
    /**
     * Whether or not the time entry has been approved via Timesheet Approval.
     *
     * @return bool
     */
    public function getIsClosed() : bool
    {
        return $this->isClosed;
    }
    /**
     * Whether or not the time entry has been approved via Timesheet Approval.
     *
     * @param bool $isClosed
     *
     * @return self
     */
    public function setIsClosed(bool $isClosed) : self
    {
        $this->isClosed = $isClosed;
        return $this;
    }
    /**
     * Whether or not the time entry has been marked as invoiced.
     *
     * @return bool
     */
    public function getIsBilled() : bool
    {
        return $this->isBilled;
    }
    /**
     * Whether or not the time entry has been marked as invoiced.
     *
     * @param bool $isBilled
     *
     * @return self
     */
    public function setIsBilled(bool $isBilled) : self
    {
        $this->isBilled = $isBilled;
        return $this;
    }
    /**
     * Date and time the timer was started (if tracking by duration). Use the ISO 8601 Format.
     *
     * @return \DateTime
     */
    public function getTimerStartedAt() : \DateTime
    {
        return $this->timerStartedAt;
    }
    /**
     * Date and time the timer was started (if tracking by duration). Use the ISO 8601 Format.
     *
     * @param \DateTime $timerStartedAt
     *
     * @return self
     */
    public function setTimerStartedAt(\DateTime $timerStartedAt) : self
    {
        $this->timerStartedAt = $timerStartedAt;
        return $this;
    }
    /**
     * Time the time entry was started (if tracking by start/end times).
     *
     * @return string
     */
    public function getStartedTime() : string
    {
        return $this->startedTime;
    }
    /**
     * Time the time entry was started (if tracking by start/end times).
     *
     * @param string $startedTime
     *
     * @return self
     */
    public function setStartedTime(string $startedTime) : self
    {
        $this->startedTime = $startedTime;
        return $this;
    }
    /**
     * Time the time entry was ended (if tracking by start/end times).
     *
     * @return string
     */
    public function getEndedTime() : string
    {
        return $this->endedTime;
    }
    /**
     * Time the time entry was ended (if tracking by start/end times).
     *
     * @param string $endedTime
     *
     * @return self
     */
    public function setEndedTime(string $endedTime) : self
    {
        $this->endedTime = $endedTime;
        return $this;
    }
    /**
     * Whether or not the time entry is currently running.
     *
     * @return bool
     */
    public function getIsRunning() : bool
    {
        return $this->isRunning;
    }
    /**
     * Whether or not the time entry is currently running.
     *
     * @param bool $isRunning
     *
     * @return self
     */
    public function setIsRunning(bool $isRunning) : self
    {
        $this->isRunning = $isRunning;
        return $this;
    }
    /**
     * Whether or not the time entry is billable.
     *
     * @return bool
     */
    public function getBillable() : bool
    {
        return $this->billable;
    }
    /**
     * Whether or not the time entry is billable.
     *
     * @param bool $billable
     *
     * @return self
     */
    public function setBillable(bool $billable) : self
    {
        $this->billable = $billable;
        return $this;
    }
    /**
     * Whether or not the time entry counts towards the project budget.
     *
     * @return bool
     */
    public function getBudgeted() : bool
    {
        return $this->budgeted;
    }
    /**
     * Whether or not the time entry counts towards the project budget.
     *
     * @param bool $budgeted
     *
     * @return self
     */
    public function setBudgeted(bool $budgeted) : self
    {
        $this->budgeted = $budgeted;
        return $this;
    }
    /**
     * The billable rate for the time entry.
     *
     * @return float
     */
    public function getBillableRate() : float
    {
        return $this->billableRate;
    }
    /**
     * The billable rate for the time entry.
     *
     * @param float $billableRate
     *
     * @return self
     */
    public function setBillableRate(float $billableRate) : self
    {
        $this->billableRate = $billableRate;
        return $this;
    }
    /**
     * The cost rate for the time entry.
     *
     * @return float
     */
    public function getCostRate() : float
    {
        return $this->costRate;
    }
    /**
     * The cost rate for the time entry.
     *
     * @param float $costRate
     *
     * @return self
     */
    public function setCostRate(float $costRate) : self
    {
        $this->costRate = $costRate;
        return $this;
    }
    /**
     * Date and time the time entry was created. Use the ISO 8601 Format.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the time entry was created. Use the ISO 8601 Format.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the time entry was last updated. Use the ISO 8601 Format.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the time entry was last updated. Use the ISO 8601 Format.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}