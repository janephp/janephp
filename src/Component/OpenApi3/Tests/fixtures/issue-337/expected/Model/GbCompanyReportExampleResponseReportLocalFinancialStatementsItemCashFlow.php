<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $netCashFlowFromOperations;
    /**
     * @var float
     */
    public float $netCashFlowBeforeFinancing;
    /**
     * @var float
     */
    public float $netCashFlowFromFinancing;
    /**
     * @var float
     */
    public float $increaseInCash;
    public function definedProperties(): array
    {
        return ['netCashFlowFromOperations' => 'netCashFlowFromOperations', 'netCashFlowBeforeFinancing' => 'netCashFlowBeforeFinancing', 'netCashFlowFromFinancing' => 'netCashFlowFromFinancing', 'increaseInCash' => 'increaseInCash'];
    }
}