<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class InvoicePreview implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The UUID of the invoice. The canonical reference for the invoice.
     *
     * @var string
     */
    public string $invoiceUuid;
    /**
     * ID of the invoice. Listed on the face of the invoice PDF as the "Invoice number".
     *
     * @var string
     */
    public string $invoiceId;
    /**
     * Total amount of the invoice, in USD.  This will reflect month-to-date usage in the invoice preview.
     *
     * @var string
     */
    public string $amount;
    /**
     * Billing period of usage for which the invoice is issued, in `YYYY-MM`  format.
     *
     * @var string
     */
    public string $invoicePeriod;
    /**
     * Time the invoice was last updated.  This is only included with the invoice preview.
     *
     * @var string
     */
    public string $updatedAt;
    public function definedProperties(): array
    {
        return ['invoiceUuid' => 'invoice_uuid', 'invoiceId' => 'invoice_id', 'amount' => 'amount', 'invoicePeriod' => 'invoice_period', 'updatedAt' => 'updated_at'];
    }
}