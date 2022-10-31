<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class Company
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The Harvest URL for the company.
     *
     * @var string
     */
    protected $baseUri;
    /**
     * The Harvest domain for the company.
     *
     * @var string
     */
    protected $fullDomain;
    /**
     * The name of the company.
     *
     * @var string
     */
    protected $name;
    /**
     * Whether the company is active or archived.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * The week day used as the start of the week. Returns one of: Saturday, Sunday, or Monday.
     *
     * @var string
     */
    protected $weekStartDay;
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @var bool
     */
    protected $wantsTimestampTimers;
    /**
     * The format used to display time in Harvest. Returns either decimal or hours_minutes.
     *
     * @var string
     */
    protected $timeFormat;
    /**
     * The type of plan the company is on. Examples: trial, free, or simple-v4
     *
     * @var string
     */
    protected $planType;
    /**
     * Used to represent whether the company is using a 12-hour or 24-hour clock. Returns either 12h or 24h.
     *
     * @var string
     */
    protected $clock;
    /**
     * Symbol used when formatting decimals.
     *
     * @var string
     */
    protected $decimalSymbol;
    /**
     * Separator used when formatting numbers.
     *
     * @var string
     */
    protected $thousandsSeparator;
    /**
     * The color scheme being used in the Harvest web client.
     *
     * @var string
     */
    protected $colorScheme;
    /**
     * The weekly capacity in seconds.
     *
     * @var int
     */
    protected $weeklyCapacity;
    /**
     * Whether the expense module is enabled.
     *
     * @var bool
     */
    protected $expenseFeature;
    /**
     * Whether the invoice module is enabled.
     *
     * @var bool
     */
    protected $invoiceFeature;
    /**
     * Whether the estimate module is enabled.
     *
     * @var bool
     */
    protected $estimateFeature;
    /**
     * Whether the approval module is enabled.
     *
     * @var bool
     */
    protected $approvalFeature;
    /**
     * The Harvest URL for the company.
     *
     * @return string
     */
    public function getBaseUri() : string
    {
        return $this->baseUri;
    }
    /**
     * The Harvest URL for the company.
     *
     * @param string $baseUri
     *
     * @return self
     */
    public function setBaseUri(string $baseUri) : self
    {
        $this->initialized['baseUri'] = true;
        $this->baseUri = $baseUri;
        return $this;
    }
    /**
     * The Harvest domain for the company.
     *
     * @return string
     */
    public function getFullDomain() : string
    {
        return $this->fullDomain;
    }
    /**
     * The Harvest domain for the company.
     *
     * @param string $fullDomain
     *
     * @return self
     */
    public function setFullDomain(string $fullDomain) : self
    {
        $this->initialized['fullDomain'] = true;
        $this->fullDomain = $fullDomain;
        return $this;
    }
    /**
     * The name of the company.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the company.
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
     * Whether the company is active or archived.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Whether the company is active or archived.
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
     * The week day used as the start of the week. Returns one of: Saturday, Sunday, or Monday.
     *
     * @return string
     */
    public function getWeekStartDay() : string
    {
        return $this->weekStartDay;
    }
    /**
     * The week day used as the start of the week. Returns one of: Saturday, Sunday, or Monday.
     *
     * @param string $weekStartDay
     *
     * @return self
     */
    public function setWeekStartDay(string $weekStartDay) : self
    {
        $this->initialized['weekStartDay'] = true;
        $this->weekStartDay = $weekStartDay;
        return $this;
    }
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @return bool
     */
    public function getWantsTimestampTimers() : bool
    {
        return $this->wantsTimestampTimers;
    }
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @param bool $wantsTimestampTimers
     *
     * @return self
     */
    public function setWantsTimestampTimers(bool $wantsTimestampTimers) : self
    {
        $this->initialized['wantsTimestampTimers'] = true;
        $this->wantsTimestampTimers = $wantsTimestampTimers;
        return $this;
    }
    /**
     * The format used to display time in Harvest. Returns either decimal or hours_minutes.
     *
     * @return string
     */
    public function getTimeFormat() : string
    {
        return $this->timeFormat;
    }
    /**
     * The format used to display time in Harvest. Returns either decimal or hours_minutes.
     *
     * @param string $timeFormat
     *
     * @return self
     */
    public function setTimeFormat(string $timeFormat) : self
    {
        $this->initialized['timeFormat'] = true;
        $this->timeFormat = $timeFormat;
        return $this;
    }
    /**
     * The type of plan the company is on. Examples: trial, free, or simple-v4
     *
     * @return string
     */
    public function getPlanType() : string
    {
        return $this->planType;
    }
    /**
     * The type of plan the company is on. Examples: trial, free, or simple-v4
     *
     * @param string $planType
     *
     * @return self
     */
    public function setPlanType(string $planType) : self
    {
        $this->initialized['planType'] = true;
        $this->planType = $planType;
        return $this;
    }
    /**
     * Used to represent whether the company is using a 12-hour or 24-hour clock. Returns either 12h or 24h.
     *
     * @return string
     */
    public function getClock() : string
    {
        return $this->clock;
    }
    /**
     * Used to represent whether the company is using a 12-hour or 24-hour clock. Returns either 12h or 24h.
     *
     * @param string $clock
     *
     * @return self
     */
    public function setClock(string $clock) : self
    {
        $this->initialized['clock'] = true;
        $this->clock = $clock;
        return $this;
    }
    /**
     * Symbol used when formatting decimals.
     *
     * @return string
     */
    public function getDecimalSymbol() : string
    {
        return $this->decimalSymbol;
    }
    /**
     * Symbol used when formatting decimals.
     *
     * @param string $decimalSymbol
     *
     * @return self
     */
    public function setDecimalSymbol(string $decimalSymbol) : self
    {
        $this->initialized['decimalSymbol'] = true;
        $this->decimalSymbol = $decimalSymbol;
        return $this;
    }
    /**
     * Separator used when formatting numbers.
     *
     * @return string
     */
    public function getThousandsSeparator() : string
    {
        return $this->thousandsSeparator;
    }
    /**
     * Separator used when formatting numbers.
     *
     * @param string $thousandsSeparator
     *
     * @return self
     */
    public function setThousandsSeparator(string $thousandsSeparator) : self
    {
        $this->initialized['thousandsSeparator'] = true;
        $this->thousandsSeparator = $thousandsSeparator;
        return $this;
    }
    /**
     * The color scheme being used in the Harvest web client.
     *
     * @return string
     */
    public function getColorScheme() : string
    {
        return $this->colorScheme;
    }
    /**
     * The color scheme being used in the Harvest web client.
     *
     * @param string $colorScheme
     *
     * @return self
     */
    public function setColorScheme(string $colorScheme) : self
    {
        $this->initialized['colorScheme'] = true;
        $this->colorScheme = $colorScheme;
        return $this;
    }
    /**
     * The weekly capacity in seconds.
     *
     * @return int
     */
    public function getWeeklyCapacity() : int
    {
        return $this->weeklyCapacity;
    }
    /**
     * The weekly capacity in seconds.
     *
     * @param int $weeklyCapacity
     *
     * @return self
     */
    public function setWeeklyCapacity(int $weeklyCapacity) : self
    {
        $this->initialized['weeklyCapacity'] = true;
        $this->weeklyCapacity = $weeklyCapacity;
        return $this;
    }
    /**
     * Whether the expense module is enabled.
     *
     * @return bool
     */
    public function getExpenseFeature() : bool
    {
        return $this->expenseFeature;
    }
    /**
     * Whether the expense module is enabled.
     *
     * @param bool $expenseFeature
     *
     * @return self
     */
    public function setExpenseFeature(bool $expenseFeature) : self
    {
        $this->initialized['expenseFeature'] = true;
        $this->expenseFeature = $expenseFeature;
        return $this;
    }
    /**
     * Whether the invoice module is enabled.
     *
     * @return bool
     */
    public function getInvoiceFeature() : bool
    {
        return $this->invoiceFeature;
    }
    /**
     * Whether the invoice module is enabled.
     *
     * @param bool $invoiceFeature
     *
     * @return self
     */
    public function setInvoiceFeature(bool $invoiceFeature) : self
    {
        $this->initialized['invoiceFeature'] = true;
        $this->invoiceFeature = $invoiceFeature;
        return $this;
    }
    /**
     * Whether the estimate module is enabled.
     *
     * @return bool
     */
    public function getEstimateFeature() : bool
    {
        return $this->estimateFeature;
    }
    /**
     * Whether the estimate module is enabled.
     *
     * @param bool $estimateFeature
     *
     * @return self
     */
    public function setEstimateFeature(bool $estimateFeature) : self
    {
        $this->initialized['estimateFeature'] = true;
        $this->estimateFeature = $estimateFeature;
        return $this;
    }
    /**
     * Whether the approval module is enabled.
     *
     * @return bool
     */
    public function getApprovalFeature() : bool
    {
        return $this->approvalFeature;
    }
    /**
     * Whether the approval module is enabled.
     *
     * @param bool $approvalFeature
     *
     * @return self
     */
    public function setApprovalFeature(bool $approvalFeature) : self
    {
        $this->initialized['approvalFeature'] = true;
        $this->approvalFeature = $approvalFeature;
        return $this;
    }
}