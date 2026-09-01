<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Balance implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Balance as of the `generated_at` time.  This value includes the `account_balance` and `month_to_date_usage`.
     *
     * @var string
     */
    public string $monthToDateBalance;
    /**
     * Current balance of the customer's most recent billing activity. Does not reflect `month_to_date_usage`.
     *
     * @var string
     */
    public string $accountBalance;
    /**
     * Amount used in the current billing period as of the `generated_at` time.
     *
     * @var string
     */
    public string $monthToDateUsage;
    /**
     * The time at which balances were most recently generated.
     *
     * @var \DateTime
     */
    public \DateTime $generatedAt;
    public function definedProperties(): array
    {
        return ['monthToDateBalance' => 'month_to_date_balance', 'accountBalance' => 'account_balance', 'monthToDateUsage' => 'month_to_date_usage', 'generatedAt' => 'generated_at'];
    }
}