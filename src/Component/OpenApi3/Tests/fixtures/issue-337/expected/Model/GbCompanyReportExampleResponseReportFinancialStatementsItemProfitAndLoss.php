<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $revenue;
    /**
     * @var float
     */
    public float $operatingCosts;
    /**
     * @var float
     */
    public float $operatingProfit;
    /**
     * @var float
     */
    public float $wagesAndSalaries;
    /**
     * @var float
     */
    public float $pensionCosts;
    /**
     * @var float
     */
    public float $depreciation;
    /**
     * @var float
     */
    public float $amortisation;
    /**
     * @var float
     */
    public float $financialExpenses;
    /**
     * @var float
     */
    public float $profitBeforeTax;
    /**
     * @var float
     */
    public float $tax;
    /**
     * @var float
     */
    public float $profitAfterTax;
    /**
     * @var float
     */
    public float $dividends;
    /**
     * @var float
     */
    public float $minorityInterests;
    /**
     * @var float
     */
    public float $otherAppropriations;
    /**
     * @var float
     */
    public float $retainedProfit;
    public function definedProperties(): array
    {
        return ['revenue' => 'revenue', 'operatingCosts' => 'operatingCosts', 'operatingProfit' => 'operatingProfit', 'wagesAndSalaries' => 'wagesAndSalaries', 'pensionCosts' => 'pensionCosts', 'depreciation' => 'depreciation', 'amortisation' => 'amortisation', 'financialExpenses' => 'financialExpenses', 'profitBeforeTax' => 'profitBeforeTax', 'tax' => 'tax', 'profitAfterTax' => 'profitAfterTax', 'dividends' => 'dividends', 'minorityInterests' => 'minorityInterests', 'otherAppropriations' => 'otherAppropriations', 'retainedProfit' => 'retainedProfit'];
    }
}