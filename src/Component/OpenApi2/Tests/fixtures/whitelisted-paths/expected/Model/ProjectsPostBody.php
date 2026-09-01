<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class ProjectsPostBody
{
    /**
     * The ID of the client to associate this project with.
     *
     * @var int
     */
    public int $clientId;
    /**
     * The name of the project.
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
     * Whether the project is active or archived. Defaults to true.
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
     * The method by which the project is invoiced. Options: Project, Tasks, People, or none.
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
     * The method by which the project is budgeted. Options: project (Hours Per Project), project_cost (Total Project Fees), task (Hours Per Task), task_fees (Fees Per Task), person (Hours Per Person), none (No Budget).
     *
     * @var string
     */
    public string $budgetBy;
    /**
     * Option to have the budget reset every month. Defaults to false.
     *
     * @var bool
     */
    public bool $budgetIsMonthly;
    /**
     * Whether Project Managers should be notified when the project goes over budget. Defaults to false.
     *
     * @var bool
     */
    public bool $notifyWhenOverBudget;
    /**
     * Percentage value used to trigger over budget email alerts. Example: use 10.0 for 10.0%.
     *
     * @var float
     */
    public float $overBudgetNotificationPercentage;
    /**
     * Option to show project budget to all employees. Does not apply to Total Project Fee projects. Defaults to false.
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
     * Option for budget of Total Project Fees projects to include tracked expenses. Defaults to false.
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
}