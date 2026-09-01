<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportFinancialStatementsItem implements AdditionalPropertiesInterface
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
     * @var GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss
     */
    public GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss $profitAndLoss;
    /**
     * @var GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet
     */
    public GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet $balanceSheet;
    /**
     * @var GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials
     */
    public GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials $otherFinancials;
    /**
     * @var GbCompanyReportExampleResponseReportFinancialStatementsItemRatios
     */
    public GbCompanyReportExampleResponseReportFinancialStatementsItemRatios $ratios;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'yearEndDate' => 'yearEndDate', 'numberOfWeeks' => 'numberOfWeeks', 'currency' => 'currency', 'consolidatedAccounts' => 'consolidatedAccounts', 'profitAndLoss' => 'profitAndLoss', 'balanceSheet' => 'balanceSheet', 'otherFinancials' => 'otherFinancials', 'ratios' => 'ratios'];
    }
}