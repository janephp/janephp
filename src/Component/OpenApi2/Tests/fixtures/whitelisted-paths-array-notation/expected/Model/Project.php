<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Model;

class Project
{
    /**
     * Unique ID for the project.
     *
     * @var int
     */
    public int $id;
    /**
     * An object containing the project’s client id, name, and currency.
     *
     * @var ProjectClient
     */
    public ProjectClient $client;
    /**
     * Unique name for the project.
     *
     * @var string
     */
    public string $name;
    /**
     * The code associated with the project.
     *
     * @var string
     */
    public string $code;
    /**
     * Whether the project is active or archived.
     *
     * @var bool
     */
    public bool $isActive;
    /**
     * Whether the project is billable or not.
     *
     * @var bool
     */
    public bool $isBillable;
    /**
     * Whether the project is a fixed-fee project or not.
     *
     * @var bool
     */
    public bool $isFixedFee;
    /**
     * The method by which the project is invoiced.
     *
     * @var string
     */
    public string $billBy;
    /**
     * Rate for projects billed by Project Hourly Rate.
     *
     * @var float
     */
    public float $hourlyRate;
    /**
     * The budget in hours for the project when budgeting by time.
     *
     * @var float
     */
    public float $budget;
    /**
     * The method by which the project is budgeted.
     *
     * @var string
     */
    public string $budgetBy;
    /**
     * Option to have the budget reset every month.
     *
     * @var bool
     */
    public bool $budgetIsMonthly;
    /**
     * Whether Project Managers should be notified when the project goes over budget.
     *
     * @var bool
     */
    public bool $notifyWhenOverBudget;
    /**
     * Percentage value used to trigger over budget email alerts.
     *
     * @var float
     */
    public float $overBudgetNotificationPercentage;
    /**
     * Date of last over budget notification. If none have been sent, this will be null.
     *
     * @var \DateTime
     */
    public \DateTime $overBudgetNotificationDate;
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects.
     *
     * @var bool
     */
    public bool $showBudgetToAll;
    /**
     * The monetary budget for the project when budgeting by money.
     *
     * @var float
     */
    public float $costBudget;
    /**
     * Option for budget of Total Project Fees projects to include tracked expenses.
     *
     * @var bool
     */
    public bool $costBudgetIncludeExpenses;
    /**
     * The amount you plan to invoice for the project. Only used by fixed-fee projects.
     *
     * @var float
     */
    public float $fee;
    /**
     * Project notes.
     *
     * @var string
     */
    public string $notes;
    /**
     * Date the project was started.
     *
     * @var \DateTime
     */
    public \DateTime $startsOn;
    /**
     * Date the project will end.
     *
     * @var \DateTime
     */
    public \DateTime $endsOn;
    /**
     * Date and time the project was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Date and time the project was last updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
}