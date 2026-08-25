<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class InvoicePreview implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The UUID of the invoice. The canonical reference for the invoice.
     *
     * @var string
     */
    protected $invoiceUuid;
    /**
     * ID of the invoice. Listed on the face of the invoice PDF as the "Invoice number".
     *
     * @var string
     */
    protected $invoiceId;
    /**
     * Total amount of the invoice, in USD.  This will reflect month-to-date usage in the invoice preview.
     *
     * @var string
     */
    protected $amount;
    /**
     * Billing period of usage for which the invoice is issued, in `YYYY-MM`  format.
     *
     * @var string
     */
    protected $invoicePeriod;
    /**
     * Time the invoice was last updated.  This is only included with the invoice preview.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * The UUID of the invoice. The canonical reference for the invoice.
     *
     * @return string
     */
    public function getInvoiceUuid(): string
    {
        return $this->invoiceUuid;
    }
    /**
     * The UUID of the invoice. The canonical reference for the invoice.
     *
     * @param string $invoiceUuid
     *
     * @return self
     */
    public function setInvoiceUuid(string $invoiceUuid): self
    {
        $this->initialized['invoiceUuid'] = true;
        $this->invoiceUuid = $invoiceUuid;
        return $this;
    }
    /**
     * ID of the invoice. Listed on the face of the invoice PDF as the "Invoice number".
     *
     * @return string
     */
    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }
    /**
     * ID of the invoice. Listed on the face of the invoice PDF as the "Invoice number".
     *
     * @param string $invoiceId
     *
     * @return self
     */
    public function setInvoiceId(string $invoiceId): self
    {
        $this->initialized['invoiceId'] = true;
        $this->invoiceId = $invoiceId;
        return $this;
    }
    /**
     * Total amount of the invoice, in USD.  This will reflect month-to-date usage in the invoice preview.
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * Total amount of the invoice, in USD.  This will reflect month-to-date usage in the invoice preview.
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Billing period of usage for which the invoice is issued, in `YYYY-MM`  format.
     *
     * @return string
     */
    public function getInvoicePeriod(): string
    {
        return $this->invoicePeriod;
    }
    /**
     * Billing period of usage for which the invoice is issued, in `YYYY-MM`  format.
     *
     * @param string $invoicePeriod
     *
     * @return self
     */
    public function setInvoicePeriod(string $invoicePeriod): self
    {
        $this->initialized['invoicePeriod'] = true;
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }
    /**
     * Time the invoice was last updated.  This is only included with the invoice preview.
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Time the invoice was last updated.  This is only included with the invoice preview.
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['invoiceUuid' => ['invoice_uuid', 'getInvoiceUuid', 'setInvoiceUuid'], 'invoiceId' => ['invoice_id', 'getInvoiceId', 'setInvoiceId'], 'amount' => ['amount', 'getAmount', 'setAmount'], 'invoicePeriod' => ['invoice_period', 'getInvoicePeriod', 'setInvoicePeriod'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt']];
    }
}