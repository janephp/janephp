<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $turnover;
    /**
     * @var float
     */
    public float $costOfSales;
    /**
     * @var float
     */
    public float $grossProfit;
    /**
     * @var float
     */
    public float $depreciation;
    /**
     * @var float
     */
    public float $auditFees;
    /**
     * @var float
     */
    public float $wagesAndSalaries;
    /**
     * @var float
     */
    public float $directorsRemuneration;
    /**
     * @var float
     */
    public float $operatingProfit;
    /**
     * @var float
     */
    public float $interestExpense;
    /**
     * @var float
     */
    public float $profitBeforeTax;
    /**
     * @var float
     */
    public float $taxation;
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
    public float $retainedProfit;
    public function definedProperties(): array
    {
        return ['turnover' => 'turnover', 'costOfSales' => 'costOfSales', 'grossProfit' => 'grossProfit', 'depreciation' => 'depreciation', 'auditFees' => 'auditFees', 'wagesAndSalaries' => 'wagesAndSalaries', 'directorsRemuneration' => 'directorsRemuneration', 'operatingProfit' => 'operatingProfit', 'interestExpense' => 'interestExpense', 'profitBeforeTax' => 'profitBeforeTax', 'taxation' => 'taxation', 'profitAfterTax' => 'profitAfterTax', 'dividends' => 'dividends', 'retainedProfit' => 'retainedProfit'];
    }
}