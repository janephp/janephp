<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class Invoice
{
    /**
     * Unique ID for the invoice.
     *
     * @var int
     */
    protected $id;
    /**
     * An object containing invoice’s client id and name.
     *
     * @var InvoiceClient
     */
    protected $client;
    /**
     * Array of invoice line items.
     *
     * @var InvoiceLineItem[]
     */
    protected $lineItems;
    /**
     * An object containing the associated estimate’s id.
     *
     * @var InvoiceEstimate
     */
    protected $estimate;
    /**
     * An object containing the associated retainer’s id.
     *
     * @var InvoiceRetainer
     */
    protected $retainer;
    /**
     * An object containing the id and name of the person that created the invoice.
     *
     * @var InvoiceCreator
     */
    protected $creator;
    /**
     * Used to build a URL to the public web invoice for your client:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/invoices/abc123456
     *
     * @var string
     */
    protected $clientKey;
    /**
     * If no value is set, the number will be automatically generated.
     *
     * @var string
     */
    protected $number;
    /**
     * The purchase order number.
     *
     * @var string
     */
    protected $purchaseOrder;
    /**
     * The total amount for the invoice, including any discounts and taxes.
     *
     * @var float
     */
    protected $amount;
    /**
     * The total amount due at this time for this invoice.
     *
     * @var float
     */
    protected $dueAmount;
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @var float
     */
    protected $tax;
    /**
     * The first amount of tax included, calculated from tax. If no tax is defined, this value will be null.
     *
     * @var float
     */
    protected $taxAmount;
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @var float
     */
    protected $tax2;
    /**
     * The amount calculated from tax2.
     *
     * @var float
     */
    protected $tax2Amount;
    /**
     * This percentage is subtracted from the subtotal.
     *
     * @var float
     */
    protected $discount;
    /**
     * The amount calcuated from discount.
     *
     * @var float
     */
    protected $discountAmount;
    /**
     * The invoice subject.
     *
     * @var string
     */
    protected $subject;
    /**
     * Any additional notes included on the invoice.
     *
     * @var string
     */
    protected $notes;
    /**
     * The currency code associated with this invoice.
     *
     * @var string
     */
    protected $currency;
    /**
     * The current state of the invoice: draft, open, paid, or closed.
     *
     * @var string
     */
    protected $state;
    /**
     * Start of the period during which time entries were added to this invoice.
     *
     * @var \DateTime
     */
    protected $periodStart;
    /**
     * End of the period during which time entries were added to this invoice.
     *
     * @var \DateTime
     */
    protected $periodEnd;
    /**
     * Date the invoice was issued.
     *
     * @var \DateTime
     */
    protected $issueDate;
    /**
     * Date the invoice is due.
     *
     * @var \DateTime
     */
    protected $dueDate;
    /**
     * The timeframe in which the invoice should be paid. Options: upon receipt, net 15, net 30, net 45, net 60, or custom.
     *
     * @var string
     */
    protected $paymentTerm;
    /**
     * Date and time the invoice was sent.
     *
     * @var \DateTime
     */
    protected $sentAt;
    /**
     * Date and time the invoice was paid.
     *
     * @var \DateTime
     */
    protected $paidAt;
    /**
     * Date the invoice was paid.
     *
     * @var \DateTime
     */
    protected $paidDate;
    /**
     * Date and time the invoice was closed.
     *
     * @var \DateTime
     */
    protected $closedAt;
    /**
     * Unique ID of the associated recurring invoice.
     *
     * @var int
     */
    protected $recurringInvoiceId;
    /**
     * Date and time the invoice was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the invoice was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the invoice.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the invoice.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * An object containing invoice’s client id and name.
     *
     * @return InvoiceClient
     */
    public function getClient() : InvoiceClient
    {
        return $this->client;
    }
    /**
     * An object containing invoice’s client id and name.
     *
     * @param InvoiceClient $client
     *
     * @return self
     */
    public function setClient(InvoiceClient $client) : self
    {
        $this->client = $client;
        return $this;
    }
    /**
     * Array of invoice line items.
     *
     * @return InvoiceLineItem[]
     */
    public function getLineItems() : array
    {
        return $this->lineItems;
    }
    /**
     * Array of invoice line items.
     *
     * @param InvoiceLineItem[] $lineItems
     *
     * @return self
     */
    public function setLineItems(array $lineItems) : self
    {
        $this->lineItems = $lineItems;
        return $this;
    }
    /**
     * An object containing the associated estimate’s id.
     *
     * @return InvoiceEstimate
     */
    public function getEstimate() : InvoiceEstimate
    {
        return $this->estimate;
    }
    /**
     * An object containing the associated estimate’s id.
     *
     * @param InvoiceEstimate $estimate
     *
     * @return self
     */
    public function setEstimate(InvoiceEstimate $estimate) : self
    {
        $this->estimate = $estimate;
        return $this;
    }
    /**
     * An object containing the associated retainer’s id.
     *
     * @return InvoiceRetainer
     */
    public function getRetainer() : InvoiceRetainer
    {
        return $this->retainer;
    }
    /**
     * An object containing the associated retainer’s id.
     *
     * @param InvoiceRetainer $retainer
     *
     * @return self
     */
    public function setRetainer(InvoiceRetainer $retainer) : self
    {
        $this->retainer = $retainer;
        return $this;
    }
    /**
     * An object containing the id and name of the person that created the invoice.
     *
     * @return InvoiceCreator
     */
    public function getCreator() : InvoiceCreator
    {
        return $this->creator;
    }
    /**
     * An object containing the id and name of the person that created the invoice.
     *
     * @param InvoiceCreator $creator
     *
     * @return self
     */
    public function setCreator(InvoiceCreator $creator) : self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * Used to build a URL to the public web invoice for your client:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/invoices/abc123456
     *
     * @return string
     */
    public function getClientKey() : string
    {
        return $this->clientKey;
    }
    /**
     * Used to build a URL to the public web invoice for your client:https://{ACCOUNT_SUBDOMAIN}.harvestapp.com/client/invoices/abc123456
     *
     * @param string $clientKey
     *
     * @return self
     */
    public function setClientKey(string $clientKey) : self
    {
        $this->clientKey = $clientKey;
        return $this;
    }
    /**
     * If no value is set, the number will be automatically generated.
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * If no value is set, the number will be automatically generated.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * The purchase order number.
     *
     * @return string
     */
    public function getPurchaseOrder() : string
    {
        return $this->purchaseOrder;
    }
    /**
     * The purchase order number.
     *
     * @param string $purchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder(string $purchaseOrder) : self
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }
    /**
     * The total amount for the invoice, including any discounts and taxes.
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * The total amount for the invoice, including any discounts and taxes.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * The total amount due at this time for this invoice.
     *
     * @return float
     */
    public function getDueAmount() : float
    {
        return $this->dueAmount;
    }
    /**
     * The total amount due at this time for this invoice.
     *
     * @param float $dueAmount
     *
     * @return self
     */
    public function setDueAmount(float $dueAmount) : self
    {
        $this->dueAmount = $dueAmount;
        return $this;
    }
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @return float
     */
    public function getTax() : float
    {
        return $this->tax;
    }
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @param float $tax
     *
     * @return self
     */
    public function setTax(float $tax) : self
    {
        $this->tax = $tax;
        return $this;
    }
    /**
     * The first amount of tax included, calculated from tax. If no tax is defined, this value will be null.
     *
     * @return float
     */
    public function getTaxAmount() : float
    {
        return $this->taxAmount;
    }
    /**
     * The first amount of tax included, calculated from tax. If no tax is defined, this value will be null.
     *
     * @param float $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(float $taxAmount) : self
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @return float
     */
    public function getTax2() : float
    {
        return $this->tax2;
    }
    /**
     * This percentage is applied to the subtotal, including line items and discounts.
     *
     * @param float $tax2
     *
     * @return self
     */
    public function setTax2(float $tax2) : self
    {
        $this->tax2 = $tax2;
        return $this;
    }
    /**
     * The amount calculated from tax2.
     *
     * @return float
     */
    public function getTax2Amount() : float
    {
        return $this->tax2Amount;
    }
    /**
     * The amount calculated from tax2.
     *
     * @param float $tax2Amount
     *
     * @return self
     */
    public function setTax2Amount(float $tax2Amount) : self
    {
        $this->tax2Amount = $tax2Amount;
        return $this;
    }
    /**
     * This percentage is subtracted from the subtotal.
     *
     * @return float
     */
    public function getDiscount() : float
    {
        return $this->discount;
    }
    /**
     * This percentage is subtracted from the subtotal.
     *
     * @param float $discount
     *
     * @return self
     */
    public function setDiscount(float $discount) : self
    {
        $this->discount = $discount;
        return $this;
    }
    /**
     * The amount calcuated from discount.
     *
     * @return float
     */
    public function getDiscountAmount() : float
    {
        return $this->discountAmount;
    }
    /**
     * The amount calcuated from discount.
     *
     * @param float $discountAmount
     *
     * @return self
     */
    public function setDiscountAmount(float $discountAmount) : self
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * The invoice subject.
     *
     * @return string
     */
    public function getSubject() : string
    {
        return $this->subject;
    }
    /**
     * The invoice subject.
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject) : self
    {
        $this->subject = $subject;
        return $this;
    }
    /**
     * Any additional notes included on the invoice.
     *
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes;
    }
    /**
     * Any additional notes included on the invoice.
     *
     * @param string $notes
     *
     * @return self
     */
    public function setNotes(string $notes) : self
    {
        $this->notes = $notes;
        return $this;
    }
    /**
     * The currency code associated with this invoice.
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * The currency code associated with this invoice.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * The current state of the invoice: draft, open, paid, or closed.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The current state of the invoice: draft, open, paid, or closed.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Start of the period during which time entries were added to this invoice.
     *
     * @return \DateTime
     */
    public function getPeriodStart() : \DateTime
    {
        return $this->periodStart;
    }
    /**
     * Start of the period during which time entries were added to this invoice.
     *
     * @param \DateTime $periodStart
     *
     * @return self
     */
    public function setPeriodStart(\DateTime $periodStart) : self
    {
        $this->periodStart = $periodStart;
        return $this;
    }
    /**
     * End of the period during which time entries were added to this invoice.
     *
     * @return \DateTime
     */
    public function getPeriodEnd() : \DateTime
    {
        return $this->periodEnd;
    }
    /**
     * End of the period during which time entries were added to this invoice.
     *
     * @param \DateTime $periodEnd
     *
     * @return self
     */
    public function setPeriodEnd(\DateTime $periodEnd) : self
    {
        $this->periodEnd = $periodEnd;
        return $this;
    }
    /**
     * Date the invoice was issued.
     *
     * @return \DateTime
     */
    public function getIssueDate() : \DateTime
    {
        return $this->issueDate;
    }
    /**
     * Date the invoice was issued.
     *
     * @param \DateTime $issueDate
     *
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate) : self
    {
        $this->issueDate = $issueDate;
        return $this;
    }
    /**
     * Date the invoice is due.
     *
     * @return \DateTime
     */
    public function getDueDate() : \DateTime
    {
        return $this->dueDate;
    }
    /**
     * Date the invoice is due.
     *
     * @param \DateTime $dueDate
     *
     * @return self
     */
    public function setDueDate(\DateTime $dueDate) : self
    {
        $this->dueDate = $dueDate;
        return $this;
    }
    /**
     * The timeframe in which the invoice should be paid. Options: upon receipt, net 15, net 30, net 45, net 60, or custom.
     *
     * @return string
     */
    public function getPaymentTerm() : string
    {
        return $this->paymentTerm;
    }
    /**
     * The timeframe in which the invoice should be paid. Options: upon receipt, net 15, net 30, net 45, net 60, or custom.
     *
     * @param string $paymentTerm
     *
     * @return self
     */
    public function setPaymentTerm(string $paymentTerm) : self
    {
        $this->paymentTerm = $paymentTerm;
        return $this;
    }
    /**
     * Date and time the invoice was sent.
     *
     * @return \DateTime
     */
    public function getSentAt() : \DateTime
    {
        return $this->sentAt;
    }
    /**
     * Date and time the invoice was sent.
     *
     * @param \DateTime $sentAt
     *
     * @return self
     */
    public function setSentAt(\DateTime $sentAt) : self
    {
        $this->sentAt = $sentAt;
        return $this;
    }
    /**
     * Date and time the invoice was paid.
     *
     * @return \DateTime
     */
    public function getPaidAt() : \DateTime
    {
        return $this->paidAt;
    }
    /**
     * Date and time the invoice was paid.
     *
     * @param \DateTime $paidAt
     *
     * @return self
     */
    public function setPaidAt(\DateTime $paidAt) : self
    {
        $this->paidAt = $paidAt;
        return $this;
    }
    /**
     * Date the invoice was paid.
     *
     * @return \DateTime
     */
    public function getPaidDate() : \DateTime
    {
        return $this->paidDate;
    }
    /**
     * Date the invoice was paid.
     *
     * @param \DateTime $paidDate
     *
     * @return self
     */
    public function setPaidDate(\DateTime $paidDate) : self
    {
        $this->paidDate = $paidDate;
        return $this;
    }
    /**
     * Date and time the invoice was closed.
     *
     * @return \DateTime
     */
    public function getClosedAt() : \DateTime
    {
        return $this->closedAt;
    }
    /**
     * Date and time the invoice was closed.
     *
     * @param \DateTime $closedAt
     *
     * @return self
     */
    public function setClosedAt(\DateTime $closedAt) : self
    {
        $this->closedAt = $closedAt;
        return $this;
    }
    /**
     * Unique ID of the associated recurring invoice.
     *
     * @return int
     */
    public function getRecurringInvoiceId() : int
    {
        return $this->recurringInvoiceId;
    }
    /**
     * Unique ID of the associated recurring invoice.
     *
     * @param int $recurringInvoiceId
     *
     * @return self
     */
    public function setRecurringInvoiceId(int $recurringInvoiceId) : self
    {
        $this->recurringInvoiceId = $recurringInvoiceId;
        return $this;
    }
    /**
     * Date and time the invoice was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the invoice was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the invoice was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the invoice was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}