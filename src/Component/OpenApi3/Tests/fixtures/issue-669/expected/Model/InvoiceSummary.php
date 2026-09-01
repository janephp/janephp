<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class InvoiceSummary implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * UUID of the invoice
     *
     * @var string
     */
    public string $invoiceUuid;
    /**
     * ID of the invoice
     *
     * @var string
     */
    public string $invoiceId;
    /**
     * Billing period of usage for which the invoice is issued, in `YYYY-MM`  format.
     *
     * @var string
     */
    public string $billingPeriod;
    /**
     * Total amount of the invoice, in USD.  This will reflect month-to-date usage in the invoice preview.
     *
     * @var string
     */
    public string $amount;
    /**
     * Name of the DigitalOcean customer being invoiced.
     *
     * @var string
     */
    public string $userName;
    /**
     * @var InvoiceSummaryUserBillingAddress
     */
    public InvoiceSummaryUserBillingAddress $userBillingAddress;
    /**
     * Company of the DigitalOcean customer being invoiced, if set.
     *
     * @var string
     */
    public string $userCompany;
    /**
     * Email of the DigitalOcean customer being invoiced.
     *
     * @var string
     */
    public string $userEmail;
    /**
     * @var InvoiceSummaryProductCharges
     */
    public InvoiceSummaryProductCharges $productCharges;
    /**
     * @var InvoiceSummaryOverages
     */
    public InvoiceSummaryOverages $overages;
    /**
     * @var InvoiceSummaryTaxes
     */
    public InvoiceSummaryTaxes $taxes;
    /**
     * @var InvoiceSummaryCreditsAndAdjustments
     */
    public InvoiceSummaryCreditsAndAdjustments $creditsAndAdjustments;
    public function definedProperties(): array
    {
        return ['invoiceUuid' => 'invoice_uuid', 'invoiceId' => 'invoice_id', 'billingPeriod' => 'billing_period', 'amount' => 'amount', 'userName' => 'user_name', 'userBillingAddress' => 'user_billing_address', 'userCompany' => 'user_company', 'userEmail' => 'user_email', 'productCharges' => 'product_charges', 'overages' => 'overages', 'taxes' => 'taxes', 'creditsAndAdjustments' => 'credits_and_adjustments'];
    }
}