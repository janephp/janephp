<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $yearEndDate;
    /**
     * @var float
     */
    public float $numberOfWeeks;
    /**
     * @var string
     */
    public string $currency;
    /**
     * @var bool
     */
    public bool $consolidatedAccounts;
    /**
     * @var string
     */
    public string $auditQualification;
    /**
     * @var GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss
     */
    public GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss $profitAndLoss;
    /**
     * @var GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet
     */
    public GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet $balanceSheet;
    /**
     * @var GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow
     */
    public GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow $cashFlow;
    /**
     * @var GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials
     */
    public GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials $otherFinancials;
    /**
     * @var GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios
     */
    public GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios $ratios;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'yearEndDate' => 'yearEndDate', 'numberOfWeeks' => 'numberOfWeeks', 'currency' => 'currency', 'consolidatedAccounts' => 'consolidatedAccounts', 'auditQualification' => 'auditQualification', 'profitAndLoss' => 'profitAndLoss', 'balanceSheet' => 'balanceSheet', 'cashFlow' => 'cashFlow', 'otherFinancials' => 'otherFinancials', 'ratios' => 'ratios'];
    }
}