<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $tangibleAssets;
    /**
     * @var float
     */
    public float $intangibleAssets;
    /**
     * @var float
     */
    public float $totalFixedAssets;
    /**
     * @var float
     */
    public float $stock;
    /**
     * @var float
     */
    public float $tradeDebtors;
    /**
     * @var float
     */
    public float $otherDebtors;
    /**
     * @var float
     */
    public float $cash;
    /**
     * @var float
     */
    public float $miscCurrentAssets;
    /**
     * @var float
     */
    public float $totalCurrentAssets;
    /**
     * @var float
     */
    public float $totalAssets;
    /**
     * @var float
     */
    public float $tradeCreditors;
    /**
     * @var float
     */
    public float $bankBorrowingsCurrent;
    /**
     * @var float
     */
    public float $otherShortTermFinance;
    /**
     * @var float
     */
    public float $miscCurrentLiabilities;
    /**
     * @var float
     */
    public float $totalCurrentLiabilities;
    /**
     * @var float
     */
    public float $otherLongTermFinance;
    /**
     * @var float
     */
    public float $totalLongTermLiabilities;
    /**
     * @var float
     */
    public float $totalLiabilities;
    /**
     * @var float
     */
    public float $netAssets;
    /**
     * @var float
     */
    public float $issuedShareCapital;
    /**
     * @var float
     */
    public float $revaluationReserve;
    /**
     * @var float
     */
    public float $revenueReserves;
    /**
     * @var float
     */
    public float $otherReserves;
    /**
     * @var float
     */
    public float $totalShareholdersEquity;
    public function definedProperties(): array
    {
        return ['tangibleAssets' => 'tangibleAssets', 'intangibleAssets' => 'intangibleAssets', 'totalFixedAssets' => 'totalFixedAssets', 'stock' => 'stock', 'tradeDebtors' => 'tradeDebtors', 'otherDebtors' => 'otherDebtors', 'cash' => 'cash', 'miscCurrentAssets' => 'miscCurrentAssets', 'totalCurrentAssets' => 'totalCurrentAssets', 'totalAssets' => 'totalAssets', 'tradeCreditors' => 'tradeCreditors', 'bankBorrowingsCurrent' => 'bankBorrowingsCurrent', 'otherShortTermFinance' => 'otherShortTermFinance', 'miscCurrentLiabilities' => 'miscCurrentLiabilities', 'totalCurrentLiabilities' => 'totalCurrentLiabilities', 'otherLongTermFinance' => 'otherLongTermFinance', 'totalLongTermLiabilities' => 'totalLongTermLiabilities', 'totalLiabilities' => 'totalLiabilities', 'netAssets' => 'netAssets', 'issuedShareCapital' => 'issuedShareCapital', 'revaluationReserve' => 'revaluationReserve', 'revenueReserves' => 'revenueReserves', 'otherReserves' => 'otherReserves', 'totalShareholdersEquity' => 'totalShareholdersEquity'];
    }
}