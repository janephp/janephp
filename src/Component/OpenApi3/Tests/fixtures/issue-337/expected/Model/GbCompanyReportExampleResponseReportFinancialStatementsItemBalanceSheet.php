<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $totalTangibleAssets;
    /**
     * @var float
     */
    public float $totalIntangibleAssets;
    /**
     * @var float
     */
    public float $totalOtherFixedAssets;
    /**
     * @var float
     */
    public float $totalFixedAssets;
    /**
     * @var float
     */
    public float $totalInventories;
    /**
     * @var float
     */
    public float $tradeReceivables;
    /**
     * @var float
     */
    public float $miscellaneousReceivables;
    /**
     * @var float
     */
    public float $totalReceivables;
    /**
     * @var float
     */
    public float $cash;
    /**
     * @var float
     */
    public float $otherCurrentAssets;
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
    public float $tradePayables;
    /**
     * @var float
     */
    public float $bankLiabilities;
    /**
     * @var float
     */
    public float $otherLoansOrFinance;
    /**
     * @var float
     */
    public float $miscellaneousLiabilities;
    /**
     * @var float
     */
    public float $totalCurrentLiabilities;
    /**
     * @var float
     */
    public float $bankLiabilitiesDueAfter1Year;
    /**
     * @var float
     */
    public float $otherLoansOrFinanceDueAfter1Year;
    /**
     * @var float
     */
    public float $miscellaneousLiabilitiesDueAfter1Year;
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
    public float $calledUpShareCapital;
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
        return ['totalTangibleAssets' => 'totalTangibleAssets', 'totalIntangibleAssets' => 'totalIntangibleAssets', 'totalOtherFixedAssets' => 'totalOtherFixedAssets', 'totalFixedAssets' => 'totalFixedAssets', 'totalInventories' => 'totalInventories', 'tradeReceivables' => 'tradeReceivables', 'miscellaneousReceivables' => 'miscellaneousReceivables', 'totalReceivables' => 'totalReceivables', 'cash' => 'cash', 'otherCurrentAssets' => 'otherCurrentAssets', 'totalCurrentAssets' => 'totalCurrentAssets', 'totalAssets' => 'totalAssets', 'tradePayables' => 'tradePayables', 'bankLiabilities' => 'bankLiabilities', 'otherLoansOrFinance' => 'otherLoansOrFinance', 'miscellaneousLiabilities' => 'miscellaneousLiabilities', 'totalCurrentLiabilities' => 'totalCurrentLiabilities', 'bankLiabilitiesDueAfter1Year' => 'bankLiabilitiesDueAfter1Year', 'otherLoansOrFinanceDueAfter1Year' => 'otherLoansOrFinanceDueAfter1Year', 'miscellaneousLiabilitiesDueAfter1Year' => 'miscellaneousLiabilitiesDueAfter1Year', 'totalLongTermLiabilities' => 'totalLongTermLiabilities', 'totalLiabilities' => 'totalLiabilities', 'calledUpShareCapital' => 'calledUpShareCapital', 'revenueReserves' => 'revenueReserves', 'otherReserves' => 'otherReserves', 'totalShareholdersEquity' => 'totalShareholdersEquity'];
    }
}