<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class ProjectsPostBody
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
     * The ID of the client to associate this project with.
     *
     * @var int
     */
    protected $clientId;
    /**
     * The name of the project.
     *
     * @var string
     */
    protected $name;
    /**
     * The code associated with the project.
     *
     * @var string
     */
    protected $code;
    /**
     * Whether the project is active or archived. Defaults to true.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Whether the project is billable or not.
     *
     * @var bool
     */
    protected $isBillable;
    /**
     * Whether the project is a fixed-fee project or not.
     *
     * @var bool
     */
    protected $isFixedFee;
    /**
     * The method by which the project is invoiced. Options: Project, Tasks, People, or none.
     *
     * @var string
     */
    protected $billBy;
    /**
     * Rate for projects billed by Project Hourly Rate.
     *
     * @var float
     */
    protected $hourlyRate;
    /**
     * The budget in hours for the project when budgeting by time.
     *
     * @var float
     */
    protected $budget;
    /**
     * The method by which the project is budgeted. Options: project (Hours Per Project), project_cost (Total Project Fees), task (Hours Per Task), task_fees (Fees Per Task), person (Hours Per Person), none (No Budget).
     *
     * @var string
     */
    protected $budgetBy;
    /**
     * Option to have the budget reset every month. Defaults to false.
     *
     * @var bool
     */
    protected $budgetIsMonthly;
    /**
     * Whether Project Managers should be notified when the project goes over budget. Defaults to false.
     *
     * @var bool
     */
    protected $notifyWhenOverBudget;
    /**
     * Percentage value used to trigger over budget email alerts. Example: use 10.0 for 10.0%.
     *
     * @var float
     */
    protected $overBudgetNotificationPercentage;
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects. Defaults to false.
     *
     * @var bool
     */
    protected $showBudgetToAll;
    /**
     * The monetary budget for the project when budgeting by money.
     *
     * @var float
     */
    protected $costBudget;
    /**
     * Option for budget of Total Project Fees projects to include tracked expenses. Defaults to false.
     *
     * @var bool
     */
    protected $costBudgetIncludeExpenses;
    /**
     * The amount you plan to invoice for the project. Only used by fixed-fee projects.
     *
     * @var float
     */
    protected $fee;
    /**
     * Project notes.
     *
     * @var string
     */
    protected $notes;
    /**
     * Date the project was started.
     *
     * @var \DateTime
     */
    protected $startsOn;
    /**
     * Date the project will end.
     *
     * @var \DateTime
     */
    protected $endsOn;
    /**
     * The ID of the client to associate this project with.
     *
     * @return int
     */
    public function getClientId() : int
    {
        return $this->clientId;
    }
    /**
     * The ID of the client to associate this project with.
     *
     * @param int $clientId
     *
     * @return self
     */
    public function setClientId(int $clientId) : self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * The name of the project.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the project.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The code associated with the project.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * The code associated with the project.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Whether the project is active or archived. Defaults to true.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Whether the project is active or archived. Defaults to true.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Whether the project is billable or not.
     *
     * @return bool
     */
    public function getIsBillable() : bool
    {
        return $this->isBillable;
    }
    /**
     * Whether the project is billable or not.
     *
     * @param bool $isBillable
     *
     * @return self
     */
    public function setIsBillable(bool $isBillable) : self
    {
        $this->initialized['isBillable'] = true;
        $this->isBillable = $isBillable;
        return $this;
    }
    /**
     * Whether the project is a fixed-fee project or not.
     *
     * @return bool
     */
    public function getIsFixedFee() : bool
    {
        return $this->isFixedFee;
    }
    /**
     * Whether the project is a fixed-fee project or not.
     *
     * @param bool $isFixedFee
     *
     * @return self
     */
    public function setIsFixedFee(bool $isFixedFee) : self
    {
        $this->initialized['isFixedFee'] = true;
        $this->isFixedFee = $isFixedFee;
        return $this;
    }
    /**
     * The method by which the project is invoiced. Options: Project, Tasks, People, or none.
     *
     * @return string
     */
    public function getBillBy() : string
    {
        return $this->billBy;
    }
    /**
     * The method by which the project is invoiced. Options: Project, Tasks, People, or none.
     *
     * @param string $billBy
     *
     * @return self
     */
    public function setBillBy(string $billBy) : self
    {
        $this->initialized['billBy'] = true;
        $this->billBy = $billBy;
        return $this;
    }
    /**
     * Rate for projects billed by Project Hourly Rate.
     *
     * @return float
     */
    public function getHourlyRate() : float
    {
        return $this->hourlyRate;
    }
    /**
     * Rate for projects billed by Project Hourly Rate.
     *
     * @param float $hourlyRate
     *
     * @return self
     */
    public function setHourlyRate(float $hourlyRate) : self
    {
        $this->initialized['hourlyRate'] = true;
        $this->hourlyRate = $hourlyRate;
        return $this;
    }
    /**
     * The budget in hours for the project when budgeting by time.
     *
     * @return float
     */
    public function getBudget() : float
    {
        return $this->budget;
    }
    /**
     * The budget in hours for the project when budgeting by time.
     *
     * @param float $budget
     *
     * @return self
     */
    public function setBudget(float $budget) : self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;
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
        $this->initialized['budgetBy'] = true;
        $this->budgetBy = $budgetBy;
        return $this;
    }
    /**
     * Option to have the budget reset every month. Defaults to false.
     *
     * @return bool
     */
    public function getBudgetIsMonthly() : bool
    {
        return $this->budgetIsMonthly;
    }
    /**
     * Option to have the budget reset every month. Defaults to false.
     *
     * @param bool $budgetIsMonthly
     *
     * @return self
     */
    public function setBudgetIsMonthly(bool $budgetIsMonthly) : self
    {
        $this->initialized['budgetIsMonthly'] = true;
        $this->budgetIsMonthly = $budgetIsMonthly;
        return $this;
    }
    /**
     * Whether Project Managers should be notified when the project goes over budget. Defaults to false.
     *
     * @return bool
     */
    public function getNotifyWhenOverBudget() : bool
    {
        return $this->notifyWhenOverBudget;
    }
    /**
     * Whether Project Managers should be notified when the project goes over budget. Defaults to false.
     *
     * @param bool $notifyWhenOverBudget
     *
     * @return self
     */
    public function setNotifyWhenOverBudget(bool $notifyWhenOverBudget) : self
    {
        $this->initialized['notifyWhenOverBudget'] = true;
        $this->notifyWhenOverBudget = $notifyWhenOverBudget;
        return $this;
    }
    /**
     * Percentage value used to trigger over budget email alerts. Example: use 10.0 for 10.0%.
     *
     * @return float
     */
    public function getOverBudgetNotificationPercentage() : float
    {
        return $this->overBudgetNotificationPercentage;
    }
    /**
     * Percentage value used to trigger over budget email alerts. Example: use 10.0 for 10.0%.
     *
     * @param float $overBudgetNotificationPercentage
     *
     * @return self
     */
    public function setOverBudgetNotificationPercentage(float $overBudgetNotificationPercentage) : self
    {
        $this->initialized['overBudgetNotificationPercentage'] = true;
        $this->overBudgetNotificationPercentage = $overBudgetNotificationPercentage;
        return $this;
    }
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects. Defaults to false.
     *
     * @return bool
     */
    public function getShowBudgetToAll() : bool
    {
        return $this->showBudgetToAll;
    }
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects. Defaults to false.
     *
     * @param bool $showBudgetToAll
     *
     * @return self
     */
    public function setShowBudgetToAll(bool $showBudgetToAll) : self
    {
        $this->initialized['showBudgetToAll'] = true;
        $this->showBudgetToAll = $showBudgetToAll;
        return $this;
    }
    /**
     * The monetary budget for the project when budgeting by money.
     *
     * @return float
     */
    public function getCostBudget() : float
    {
        return $this->costBudget;
    }
    /**
     * The monetary budget for the project when budgeting by money.
     *
     * @param float $costBudget
     *
     * @return self
     */
    public function setCostBudget(float $costBudget) : self
    {
        $this->initialized['costBudget'] = true;
        $this->costBudget = $costBudget;
        return $this;
    }
    /**
     * Option for budget of Total Project Fees projects to include tracked expenses. Defaults to false.
     *
     * @return bool
     */
    public function getCostBudgetIncludeExpenses() : bool
    {
        return $this->costBudgetIncludeExpenses;
    }
    /**
     * Option for budget of Total Project Fees projects to include tracked expenses. Defaults to false.
     *
     * @param bool $costBudgetIncludeExpenses
     *
     * @return self
     */
    public function setCostBudgetIncludeExpenses(bool $costBudgetIncludeExpenses) : self
    {
        $this->initialized['costBudgetIncludeExpenses'] = true;
        $this->costBudgetIncludeExpenses = $costBudgetIncludeExpenses;
        return $this;
    }
    /**
     * The amount you plan to invoice for the project. Only used by fixed-fee projects.
     *
     * @return float
     */
    public function getFee() : float
    {
        return $this->fee;
    }
    /**
     * The amount you plan to invoice for the project. Only used by fixed-fee projects.
     *
     * @param float $fee
     *
     * @return self
     */
    public function setFee(float $fee) : self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;
        return $this;
    }
    /**
     * Project notes.
     *
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes;
    }
    /**
     * Project notes.
     *
     * @param string $notes
     *
     * @return self
     */
    public function setNotes(string $notes) : self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;
        return $this;
    }
    /**
     * Date the project was started.
     *
     * @return \DateTime
     */
    public function getStartsOn() : \DateTime
    {
        return $this->startsOn;
    }
    /**
     * Date the project was started.
     *
     * @param \DateTime $startsOn
     *
     * @return self
     */
    public function setStartsOn(\DateTime $startsOn) : self
    {
        $this->initialized['startsOn'] = true;
        $this->startsOn = $startsOn;
        return $this;
    }
    /**
     * Date the project will end.
     *
     * @return \DateTime
     */
    public function getEndsOn() : \DateTime
    {
        return $this->endsOn;
    }
    /**
     * Date the project will end.
     *
     * @param \DateTime $endsOn
     *
     * @return self
     */
    public function setEndsOn(\DateTime $endsOn) : self
    {
        $this->initialized['endsOn'] = true;
        $this->endsOn = $endsOn;
        return $this;
    }
}