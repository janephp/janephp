<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $contingentLiabilities;
    /**
     * @var float
     */
    public float $workingCapital;
    /**
     * @var float
     */
    public float $netWorth;
    public function definedProperties(): array
    {
        return ['contingentLiabilities' => 'contingentLiabilities', 'workingCapital' => 'workingCapital', 'netWorth' => 'netWorth'];
    }
}