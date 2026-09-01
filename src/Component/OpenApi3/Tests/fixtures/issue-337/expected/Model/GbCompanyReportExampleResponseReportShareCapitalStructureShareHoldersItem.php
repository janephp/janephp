<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $shareholderType;
    /**
     * @var string
     */
    public string $shareType;
    /**
     * @var string
     */
    public string $currency;
    /**
     * @var float
     */
    public float $totalNumberOfSharesOwned;
    /**
     * @var float
     */
    public float $percentSharesHeld;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'shareholderType' => 'shareholderType', 'shareType' => 'shareType', 'currency' => 'currency', 'totalNumberOfSharesOwned' => 'totalNumberOfSharesOwned', 'percentSharesHeld' => 'percentSharesHeld'];
    }
}