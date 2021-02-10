<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class TimeReportsResult
{
    /**
     * The ID of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @var int
     */
    protected $clientId;
    /**
     * The name of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @var string
     */
    protected $clientName;
    /**
     * The ID of the project associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @var int
     */
    protected $projectId;
    /**
     * The name of the project associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @var string
     */
    protected $projectName;
    /**
     * The ID of the task associated with the reported hours. Only returned in the Task report.
     *
     * @var int
     */
    protected $taskId;
    /**
     * The name of the task associated with the reported hours. Only returned in the Task report.
     *
     * @var string
     */
    protected $taskName;
    /**
     * The ID of the user associated with the reported hours. Only returned in the Team report.
     *
     * @var int
     */
    protected $userId;
    /**
     * The name of the user associated with the reported hours. Only returned in the Team report.
     *
     * @var string
     */
    protected $userName;
    /**
     * The contractor status of the user associated with the reported hours. Only returned in the Team report.
     *
     * @var bool
     */
    protected $isContractor;
    /**
     * The totaled hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @var float
     */
    protected $totalHours;
    /**
     * The totaled billable hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @var float
     */
    protected $billableHours;
    /**
     * The currency code associated with the tracked hours for this result. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @var string
     */
    protected $currency;
    /**
     * The totaled billable amount for the billable hours above. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @var float
     */
    protected $billableAmount;
    /**
     * The ID of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @return int
     */
    public function getClientId() : int
    {
        return $this->clientId;
    }
    /**
     * The ID of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @param int $clientId
     *
     * @return self
     */
    public function setClientId(int $clientId) : self
    {
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * The name of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @return string
     */
    public function getClientName() : string
    {
        return $this->clientName;
    }
    /**
     * The name of the client associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @param string $clientName
     *
     * @return self
     */
    public function setClientName(string $clientName) : self
    {
        $this->clientName = $clientName;
        return $this;
    }
    /**
     * The ID of the project associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @param int $projectId
     *
     * @return self
     */
    public function setProjectId(int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The name of the project associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @return string
     */
    public function getProjectName() : string
    {
        return $this->projectName;
    }
    /**
     * The name of the project associated with the reported hours. Only returned in the Client and Project reports.
     *
     * @param string $projectName
     *
     * @return self
     */
    public function setProjectName(string $projectName) : self
    {
        $this->projectName = $projectName;
        return $this;
    }
    /**
     * The ID of the task associated with the reported hours. Only returned in the Task report.
     *
     * @return int
     */
    public function getTaskId() : int
    {
        return $this->taskId;
    }
    /**
     * The ID of the task associated with the reported hours. Only returned in the Task report.
     *
     * @param int $taskId
     *
     * @return self
     */
    public function setTaskId(int $taskId) : self
    {
        $this->taskId = $taskId;
        return $this;
    }
    /**
     * The name of the task associated with the reported hours. Only returned in the Task report.
     *
     * @return string
     */
    public function getTaskName() : string
    {
        return $this->taskName;
    }
    /**
     * The name of the task associated with the reported hours. Only returned in the Task report.
     *
     * @param string $taskName
     *
     * @return self
     */
    public function setTaskName(string $taskName) : self
    {
        $this->taskName = $taskName;
        return $this;
    }
    /**
     * The ID of the user associated with the reported hours. Only returned in the Team report.
     *
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }
    /**
     * The ID of the user associated with the reported hours. Only returned in the Team report.
     *
     * @param int $userId
     *
     * @return self
     */
    public function setUserId(int $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * The name of the user associated with the reported hours. Only returned in the Team report.
     *
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName;
    }
    /**
     * The name of the user associated with the reported hours. Only returned in the Team report.
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName) : self
    {
        $this->userName = $userName;
        return $this;
    }
    /**
     * The contractor status of the user associated with the reported hours. Only returned in the Team report.
     *
     * @return bool
     */
    public function getIsContractor() : bool
    {
        return $this->isContractor;
    }
    /**
     * The contractor status of the user associated with the reported hours. Only returned in the Team report.
     *
     * @param bool $isContractor
     *
     * @return self
     */
    public function setIsContractor(bool $isContractor) : self
    {
        $this->isContractor = $isContractor;
        return $this;
    }
    /**
     * The totaled hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @return float
     */
    public function getTotalHours() : float
    {
        return $this->totalHours;
    }
    /**
     * The totaled hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @param float $totalHours
     *
     * @return self
     */
    public function setTotalHours(float $totalHours) : self
    {
        $this->totalHours = $totalHours;
        return $this;
    }
    /**
     * The totaled billable hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @return float
     */
    public function getBillableHours() : float
    {
        return $this->billableHours;
    }
    /**
     * The totaled billable hours for the given timeframe, subject (client, project, task, or user), and currency. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @param float $billableHours
     *
     * @return self
     */
    public function setBillableHours(float $billableHours) : self
    {
        $this->billableHours = $billableHours;
        return $this;
    }
    /**
     * The currency code associated with the tracked hours for this result. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * The currency code associated with the tracked hours for this result. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * The totaled billable amount for the billable hours above. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @return float
     */
    public function getBillableAmount() : float
    {
        return $this->billableAmount;
    }
    /**
     * The totaled billable amount for the billable hours above. Only visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @param float $billableAmount
     *
     * @return self
     */
    public function setBillableAmount(float $billableAmount) : self
    {
        $this->billableAmount = $billableAmount;
        return $this;
    }
}