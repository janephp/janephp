<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportFinancialStatementsItemRatios implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $preTaxProfitMargin;
    /**
     * @var float
     */
    public float $returnOnCapitalEmployed;
    /**
     * @var float
     */
    public float $returnOnTotalAssetsEmployed;
    /**
     * @var float
     */
    public float $returnOnNetAssetsEmployed;
    /**
     * @var float
     */
    public float $salesOrNetWorkingCapital;
    /**
     * @var float
     */
    public float $stockTurnoverRatio;
    /**
     * @var float
     */
    public float $debtorDays;
    /**
     * @var float
     */
    public float $creditorDays;
    /**
     * @var float
     */
    public float $currentRatio;
    /**
     * @var float
     */
    public float $liquidityRatioOrAcidTest;
    /**
     * @var float
     */
    public float $currentDebtRatio;
    /**
     * @var float
     */
    public float $gearing;
    /**
     * @var float
     */
    public float $equityInPercentage;
    /**
     * @var float
     */
    public float $totalDebtRatio;
    public function definedProperties(): array
    {
        return ['preTaxProfitMargin' => 'preTaxProfitMargin', 'returnOnCapitalEmployed' => 'returnOnCapitalEmployed', 'returnOnTotalAssetsEmployed' => 'returnOnTotalAssetsEmployed', 'returnOnNetAssetsEmployed' => 'returnOnNetAssetsEmployed', 'salesOrNetWorkingCapital' => 'salesOrNetWorkingCapital', 'stockTurnoverRatio' => 'stockTurnoverRatio', 'debtorDays' => 'debtorDays', 'creditorDays' => 'creditorDays', 'currentRatio' => 'currentRatio', 'liquidityRatioOrAcidTest' => 'liquidityRatioOrAcidTest', 'currentDebtRatio' => 'currentDebtRatio', 'gearing' => 'gearing', 'equityInPercentage' => 'equityInPercentage', 'totalDebtRatio' => 'totalDebtRatio'];
    }
}