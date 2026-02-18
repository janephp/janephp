<?php

namespace Jane\Generated\DigitalOcean\Model;

class Balance extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Balance as of the `generated_at` time.  This value includes the `account_balance` and `month_to_date_usage`.
     *
     * @var string
     */
    protected $monthToDateBalance;
    /**
     * Current balance of the customer's most recent billing activity. Does not reflect `month_to_date_usage`.
     *
     * @var string
     */
    protected $accountBalance;
    /**
     * Amount used in the current billing period as of the `generated_at` time.
     *
     * @var string
     */
    protected $monthToDateUsage;
    /**
     * The time at which balances were most recently generated.
     *
     * @var \DateTime
     */
    protected $generatedAt;
    /**
     * Balance as of the `generated_at` time.  This value includes the `account_balance` and `month_to_date_usage`.
     *
     * @return string
     */
    public function getMonthToDateBalance(): string
    {
        return $this->monthToDateBalance;
    }
    /**
     * Balance as of the `generated_at` time.  This value includes the `account_balance` and `month_to_date_usage`.
     *
     * @param string $monthToDateBalance
     *
     * @return self
     */
    public function setMonthToDateBalance(string $monthToDateBalance): self
    {
        $this->initialized['monthToDateBalance'] = true;
        $this->monthToDateBalance = $monthToDateBalance;
        return $this;
    }
    /**
     * Current balance of the customer's most recent billing activity. Does not reflect `month_to_date_usage`.
     *
     * @return string
     */
    public function getAccountBalance(): string
    {
        return $this->accountBalance;
    }
    /**
     * Current balance of the customer's most recent billing activity. Does not reflect `month_to_date_usage`.
     *
     * @param string $accountBalance
     *
     * @return self
     */
    public function setAccountBalance(string $accountBalance): self
    {
        $this->initialized['accountBalance'] = true;
        $this->accountBalance = $accountBalance;
        return $this;
    }
    /**
     * Amount used in the current billing period as of the `generated_at` time.
     *
     * @return string
     */
    public function getMonthToDateUsage(): string
    {
        return $this->monthToDateUsage;
    }
    /**
     * Amount used in the current billing period as of the `generated_at` time.
     *
     * @param string $monthToDateUsage
     *
     * @return self
     */
    public function setMonthToDateUsage(string $monthToDateUsage): self
    {
        $this->initialized['monthToDateUsage'] = true;
        $this->monthToDateUsage = $monthToDateUsage;
        return $this;
    }
    /**
     * The time at which balances were most recently generated.
     *
     * @return \DateTime
     */
    public function getGeneratedAt(): \DateTime
    {
        return $this->generatedAt;
    }
    /**
     * The time at which balances were most recently generated.
     *
     * @param \DateTime $generatedAt
     *
     * @return self
     */
    public function setGeneratedAt(\DateTime $generatedAt): self
    {
        $this->initialized['generatedAt'] = true;
        $this->generatedAt = $generatedAt;
        return $this;
    }
}