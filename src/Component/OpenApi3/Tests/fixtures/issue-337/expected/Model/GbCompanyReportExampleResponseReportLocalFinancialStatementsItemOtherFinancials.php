<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool
     */
    public bool $contingentLiabilities;
    /**
     * @var float
     */
    public float $bankOverdraftAndLTL;
    /**
     * @var float
     */
    public float $workingCapital;
    /**
     * @var float
     */
    public float $capitalEmployed;
    /**
     * @var float
     */
    public float $netWorth;
    public function definedProperties(): array
    {
        return ['contingentLiabilities' => 'contingentLiabilities', 'bankOverdraftAndLTL' => 'bankOverdraftAndLTL', 'workingCapital' => 'workingCapital', 'capitalEmployed' => 'capitalEmployed', 'netWorth' => 'netWorth'];
    }
}