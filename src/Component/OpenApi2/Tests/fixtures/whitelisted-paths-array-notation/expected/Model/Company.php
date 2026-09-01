<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class Company
{
    /**
     * The Harvest URL for the company.
     *
     * @var string
     */
    public string $baseUri;
    /**
     * The Harvest domain for the company.
     *
     * @var string
     */
    public string $fullDomain;
    /**
     * The name of the company.
     *
     * @var string
     */
    public string $name;
    /**
     * Whether the company is active or archived.
     *
     * @var bool
     */
    public bool $isActive;
    /**
     * The week day used as the start of the week. Returns one of: Saturday, Sunday, or Monday.
     *
     * @var string
     */
    public string $weekStartDay;
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @var bool
     */
    public bool $wantsTimestampTimers;
    /**
     * The format used to display time in Harvest. Returns either decimal or hours_minutes.
     *
     * @var string
     */
    public string $timeFormat;
    /**
     * The type of plan the company is on. Examples: trial, free, or simple-v4
     *
     * @var string
     */
    public string $planType;
    /**
     * Used to represent whether the company is using a 12-hour or 24-hour clock. Returns either 12h or 24h.
     *
     * @var string
     */
    public string $clock;
    /**
     * Symbol used when formatting decimals.
     *
     * @var string
     */
    public string $decimalSymbol;
    /**
     * Separator used when formatting numbers.
     *
     * @var string
     */
    public string $thousandsSeparator;
    /**
     * The color scheme being used in the Harvest web client.
     *
     * @var string
     */
    public string $colorScheme;
    /**
     * The weekly capacity in seconds.
     *
     * @var int
     */
    public int $weeklyCapacity;
    /**
     * Whether the expense module is enabled.
     *
     * @var bool
     */
    public bool $expenseFeature;
    /**
     * Whether the invoice module is enabled.
     *
     * @var bool
     */
    public bool $invoiceFeature;
    /**
     * Whether the estimate module is enabled.
     *
     * @var bool
     */
    public bool $estimateFeature;
    /**
     * Whether the approval module is enabled.
     *
     * @var bool
     */
    public bool $approvalFeature;
}