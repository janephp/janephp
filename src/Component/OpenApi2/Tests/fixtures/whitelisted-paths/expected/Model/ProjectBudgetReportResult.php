<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class ProjectBudgetReportResult
{
    /**
     * The ID of the client associated with this project.
     *
     * @var int
     */
    protected $clientId;
    /**
     * The name of the client associated with this project.
     *
     * @var string
     */
    protected $clientName;
    /**
     * The ID of the project.
     *
     * @var int
     */
    protected $projectId;
    /**
     * The name of the project.
     *
     * @var string
     */
    protected $projectName;
    /**
     * Whether the budget is reset every month.
     *
     * @var bool
     */
    protected $budgetIsMonthly;
    /**
     * The method by which the project is budgeted. Options: project (Hours Per Project), project_cost (Total Project Fees), task (Hours Per Task), task_fees (Fees Per Task), person (Hours Per Person), none (No Budget).
     *
     * @var string
     */
    protected $budgetBy;
    /**
     * Whether the project is active or archived.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * The budget in hours or money for the project when budgeting by time. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @var float
     */
    protected $budget;
    /**
     * The total hours or money spent against the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @var float
     */
    protected $budgetSpent;
    /**
     * The total hours or money remaining in the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @var float
     */
    protected $budgetRemaining;
    /**
     * The ID of the client associated with this project.
     *
     * @return int
     */
    public function getClientId() : int
    {
        return $this->clientId;
    }
    /**
     * The ID of the client associated with this project.
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
     * The name of the client associated with this project.
     *
     * @return string
     */
    public function getClientName() : string
    {
        return $this->clientName;
    }
    /**
     * The name of the client associated with this project.
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
     * The ID of the project.
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project.
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
     * The name of the project.
     *
     * @return string
     */
    public function getProjectName() : string
    {
        return $this->projectName;
    }
    /**
     * The name of the project.
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
     * Whether the budget is reset every month.
     *
     * @return bool
     */
    public function getBudgetIsMonthly() : bool
    {
        return $this->budgetIsMonthly;
    }
    /**
     * Whether the budget is reset every month.
     *
     * @param bool $budgetIsMonthly
     *
     * @return self
     */
    public function setBudgetIsMonthly(bool $budgetIsMonthly) : self
    {
        $this->budgetIsMonthly = $budgetIsMonthly;
        return $this;
    }
    /**
     * The method by which the project is budgeted. Options: project (Hours Per Project), project_cost (Total Project Fees), task (Hours Per Task), task_fees (Fees Per Task), person (Hours Per Person), none (No Budget).
     *
     * @return string
     */
    public function getBudgetBy() : string
    {
        return $this->budgetBy;
    }
    /**
     * The method by which the project is budgeted. Options: project (Hours Per Project), project_cost (Total Project Fees), task (Hours Per Task), task_fees (Fees Per Task), person (Hours Per Person), none (No Budget).
     *
     * @param string $budgetBy
     *
     * @return self
     */
    public function setBudgetBy(string $budgetBy) : self
    {
        $this->budgetBy = $budgetBy;
        return $this;
    }
    /**
     * Whether the project is active or archived.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Whether the project is active or archived.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * The budget in hours or money for the project when budgeting by time. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @return float
     */
    public function getBudget() : float
    {
        return $this->budget;
    }
    /**
     * The budget in hours or money for the project when budgeting by time. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @param float $budget
     *
     * @return self
     */
    public function setBudget(float $budget) : self
    {
        $this->budget = $budget;
        return $this;
    }
    /**
     * The total hours or money spent against the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @return float
     */
    public function getBudgetSpent() : float
    {
        return $this->budgetSpent;
    }
    /**
     * The total hours or money spent against the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @param float $budgetSpent
     *
     * @return self
     */
    public function setBudgetSpent(float $budgetSpent) : self
    {
        $this->budgetSpent = $budgetSpent;
        return $this;
    }
    /**
     * The total hours or money remaining in the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @return float
     */
    public function getBudgetRemaining() : float
    {
        return $this->budgetRemaining;
    }
    /**
     * The total hours or money remaining in the project’s budget. If Time Rounding is turned on, the hours will be rounded according to your settings. If the project is budgeted by money, this value will only be visible to Administrators and Project Managers with the View billable rates and amounts permission.
     *
     * @param float $budgetRemaining
     *
     * @return self
     */
    public function setBudgetRemaining(float $budgetRemaining) : self
    {
        $this->budgetRemaining = $budgetRemaining;
        return $this;
    }
}