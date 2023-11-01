<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class Project
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
     * Unique ID for the project.
     *
     * @var int
     */
    protected $id;
    /**
     * An object containing the project’s client id, name, and currency.
     *
     * @var ProjectClient
     */
    protected $client;
    /**
     * Unique name for the project.
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
     * Whether the project is active or archived.
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
     * The method by which the project is invoiced.
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
     * The method by which the project is budgeted.
     *
     * @var string
     */
    protected $budgetBy;
    /**
     * Option to have the budget reset every month.
     *
     * @var bool
     */
    protected $budgetIsMonthly;
    /**
     * Whether Project Managers should be notified when the project goes over budget.
     *
     * @var bool
     */
    protected $notifyWhenOverBudget;
    /**
     * Percentage value used to trigger over budget email alerts.
     *
     * @var float
     */
    protected $overBudgetNotificationPercentage;
    /**
     * Date of last over budget notification. If none have been sent, this will be null.
     *
     * @var \DateTime
     */
    protected $overBudgetNotificationDate;
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects.
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
     * Option for budget of Total Project Fees projects to include tracked expenses.
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
     * Date and time the project was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the project was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the project.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the project.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * An object containing the project’s client id, name, and currency.
     *
     * @return ProjectClient
     */
    public function getClient() : ProjectClient
    {
        return $this->client;
    }
    /**
     * An object containing the project’s client id, name, and currency.
     *
     * @param ProjectClient $client
     *
     * @return self
     */
    public function setClient(ProjectClient $client) : self
    {
        $this->initialized['client'] = true;
        $this->client = $client;
        return $this;
    }
    /**
     * Unique name for the project.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Unique name for the project.
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
     * The method by which the project is invoiced.
     *
     * @return string
     */
    public function getBillBy() : string
    {
        return $this->billBy;
    }
    /**
     * The method by which the project is invoiced.
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
     * The method by which the project is budgeted.
     *
     * @return string
     */
    public function getBudgetBy() : string
    {
        return $this->budgetBy;
    }
    /**
     * The method by which the project is budgeted.
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
     * Option to have the budget reset every month.
     *
     * @return bool
     */
    public function getBudgetIsMonthly() : bool
    {
        return $this->budgetIsMonthly;
    }
    /**
     * Option to have the budget reset every month.
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
     * Whether Project Managers should be notified when the project goes over budget.
     *
     * @return bool
     */
    public function getNotifyWhenOverBudget() : bool
    {
        return $this->notifyWhenOverBudget;
    }
    /**
     * Whether Project Managers should be notified when the project goes over budget.
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
     * Percentage value used to trigger over budget email alerts.
     *
     * @return float
     */
    public function getOverBudgetNotificationPercentage() : float
    {
        return $this->overBudgetNotificationPercentage;
    }
    /**
     * Percentage value used to trigger over budget email alerts.
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
     * Date of last over budget notification. If none have been sent, this will be null.
     *
     * @return \DateTime
     */
    public function getOverBudgetNotificationDate() : \DateTime
    {
        return $this->overBudgetNotificationDate;
    }
    /**
     * Date of last over budget notification. If none have been sent, this will be null.
     *
     * @param \DateTime $overBudgetNotificationDate
     *
     * @return self
     */
    public function setOverBudgetNotificationDate(\DateTime $overBudgetNotificationDate) : self
    {
        $this->initialized['overBudgetNotificationDate'] = true;
        $this->overBudgetNotificationDate = $overBudgetNotificationDate;
        return $this;
    }
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects.
     *
     * @return bool
     */
    public function getShowBudgetToAll() : bool
    {
        return $this->showBudgetToAll;
    }
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects.
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
     * Option for budget of Total Project Fees projects to include tracked expenses.
     *
     * @return bool
     */
    public function getCostBudgetIncludeExpenses() : bool
    {
        return $this->costBudgetIncludeExpenses;
    }
    /**
     * Option for budget of Total Project Fees projects to include tracked expenses.
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
    /**
     * Date and time the project was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the project was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the project was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the project was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}