<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportPaymentData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $paymentsOnFile;
    /**
     * @var float
     */
    public float $paymentsOnTime;
    /**
     * @var float
     */
    public float $paymentsPaidLate;
    /**
     * @var float
     */
    public float $paymentsSentLegal;
    /**
     * @var float
     */
    public float $paymentsStillOwingLate;
    /**
     * @var float
     */
    public float $paymentsPaid0to30Days;
    /**
     * @var float
     */
    public float $highestInvoiceValueOutstandingLate;
    /**
     * @var float
     */
    public float $paymentsPaid90DaysplusLate;
    /**
     * @var float
     */
    public float $totalBalanceStillOwingLate;
    /**
     * @var float
     */
    public float $dbt;
    /**
     * @var float
     */
    public float $paymentsPaid61to90Days;
    /**
     * @var float
     */
    public float $totalBalanceStillOwing;
    /**
     * @var float
     */
    public float $payments31to60DaysLate;
    /**
     * @var float
     */
    public float $payments61to90DaysLate;
    /**
     * @var float
     */
    public float $highestInvoiceValueOutstanding;
    /**
     * @var float
     */
    public float $paymentsStillOwing;
    /**
     * @var float
     */
    public float $paymentsWithinTerms;
    /**
     * @var float
     */
    public float $payments0to30Dayslate;
    /**
     * @var float
     */
    public float $averageInvoiceValue;
    /**
     * @var float
     */
    public float $paymentsPaid31to60Days;
    /**
     * @var float
     */
    public float $paymentsPaid90Daysplus;
    /**
     * @var float
     */
    public float $totalInvoiceValues;
    /**
     * @var string
     */
    public string $paymentTrend;
    /**
     * @var float
     */
    public float $industryDBT;
    public function definedProperties(): array
    {
        return ['paymentsOnFile' => 'paymentsOnFile', 'paymentsOnTime' => 'paymentsOnTime', 'paymentsPaidLate' => 'paymentsPaidLate', 'paymentsSentLegal' => 'paymentsSentLegal', 'paymentsStillOwingLate' => 'paymentsStillOwingLate', 'paymentsPaid0to30Days' => 'paymentsPaid0to30Days', 'highestInvoiceValueOutstandingLate' => 'highestInvoiceValueOutstandingLate', 'paymentsPaid90DaysplusLate' => 'paymentsPaid90DaysplusLate', 'totalBalanceStillOwingLate' => 'totalBalanceStillOwingLate', 'dbt' => 'dbt', 'paymentsPaid61to90Days' => 'paymentsPaid61to90Days', 'totalBalanceStillOwing' => 'totalBalanceStillOwing', 'payments31to60DaysLate' => 'payments31to60DaysLate', 'payments61to90DaysLate' => 'payments61to90DaysLate', 'highestInvoiceValueOutstanding' => 'highestInvoiceValueOutstanding', 'paymentsStillOwing' => 'paymentsStillOwing', 'paymentsWithinTerms' => 'paymentsWithinTerms', 'payments0to30Dayslate' => 'payments0to30Dayslate', 'averageInvoiceValue' => 'averageInvoiceValue', 'paymentsPaid31to60Days' => 'paymentsPaid31to60Days', 'paymentsPaid90Daysplus' => 'paymentsPaid90Daysplus', 'totalInvoiceValues' => 'totalInvoiceValues', 'paymentTrend' => 'paymentTrend', 'industryDBT' => 'industryDBT'];
    }
}