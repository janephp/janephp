<?php

namespace Jane\Generated\DigitalOcean\Model;

class InvoiceSummary extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * UUID of the invoice
     *
     * @var string
     */
    protected $invoiceUuid;
    /**
     * ID of the invoice
     *
     * @var string
     */
    protected $invoiceId;
    /**
     * Billing period of usage for which the invoice is issued, in `YYYY-MM`  format.
     *
     * @var string
     */
    protected $billingPeriod;
    /**
     * Total amount of the invoice, in USD.  This will reflect month-to-date usage in the invoice preview.
     *
     * @var string
     */
    protected $amount;
    /**
     * Name of the DigitalOcean customer being invoiced.
     *
     * @var string
     */
    protected $userName;
    /**
     * @var InvoiceSummaryUserBillingAddress
     */
    protected $userBillingAddress;
    /**
     * Company of the DigitalOcean customer being invoiced, if set.
     *
     * @var string
     */
    protected $userCompany;
    /**
     * Email of the DigitalOcean customer being invoiced.
     *
     * @var string
     */
    protected $userEmail;
    /**
     * @var InvoiceSummaryProductCharges
     */
    protected $productCharges;
    /**
     * @var InvoiceSummaryOverages
     */
    protected $overages;
    /**
     * @var InvoiceSummaryTaxes
     */
    protected $taxes;
    /**
     * @var InvoiceSummaryCreditsAndAdjustments
     */
    protected $creditsAndAdjustments;
    /**
     * UUID of the invoice
     *
     * @return string
     */
    public function getInvoiceUuid(): string
    {
        return $this->invoiceUuid;
    }
    /**
     * UUID of the invoice
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
     * ID of the invoice
     *
     * @return string
     */
    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }
    /**
     * ID of the invoice
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
     * Billing period of usage for which the invoice is issued, in `YYYY-MM`  format.
     *
     * @return string
     */
    public function getBillingPeriod(): string
    {
        return $this->billingPeriod;
    }
    /**
     * Billing period of usage for which the invoice is issued, in `YYYY-MM`  format.
     *
     * @param string $billingPeriod
     *
     * @return self
     */
    public function setBillingPeriod(string $billingPeriod): self
    {
        $this->initialized['billingPeriod'] = true;
        $this->billingPeriod = $billingPeriod;
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
     * Name of the DigitalOcean customer being invoiced.
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * Name of the DigitalOcean customer being invoiced.
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
    /**
     * @return InvoiceSummaryUserBillingAddress
     */
    public function getUserBillingAddress(): InvoiceSummaryUserBillingAddress
    {
        return $this->userBillingAddress;
    }
    /**
     * @param InvoiceSummaryUserBillingAddress $userBillingAddress
     *
     * @return self
     */
    public function setUserBillingAddress(InvoiceSummaryUserBillingAddress $userBillingAddress): self
    {
        $this->initialized['userBillingAddress'] = true;
        $this->userBillingAddress = $userBillingAddress;
        return $this;
    }
    /**
     * Company of the DigitalOcean customer being invoiced, if set.
     *
     * @return string
     */
    public function getUserCompany(): string
    {
        return $this->userCompany;
    }
    /**
     * Company of the DigitalOcean customer being invoiced, if set.
     *
     * @param string $userCompany
     *
     * @return self
     */
    public function setUserCompany(string $userCompany): self
    {
        $this->initialized['userCompany'] = true;
        $this->userCompany = $userCompany;
        return $this;
    }
    /**
     * Email of the DigitalOcean customer being invoiced.
     *
     * @return string
     */
    public function getUserEmail(): string
    {
        return $this->userEmail;
    }
    /**
     * Email of the DigitalOcean customer being invoiced.
     *
     * @param string $userEmail
     *
     * @return self
     */
    public function setUserEmail(string $userEmail): self
    {
        $this->initialized['userEmail'] = true;
        $this->userEmail = $userEmail;
        return $this;
    }
    /**
     * @return InvoiceSummaryProductCharges
     */
    public function getProductCharges(): InvoiceSummaryProductCharges
    {
        return $this->productCharges;
    }
    /**
     * @param InvoiceSummaryProductCharges $productCharges
     *
     * @return self
     */
    public function setProductCharges(InvoiceSummaryProductCharges $productCharges): self
    {
        $this->initialized['productCharges'] = true;
        $this->productCharges = $productCharges;
        return $this;
    }
    /**
     * @return InvoiceSummaryOverages
     */
    public function getOverages(): InvoiceSummaryOverages
    {
        return $this->overages;
    }
    /**
     * @param InvoiceSummaryOverages $overages
     *
     * @return self
     */
    public function setOverages(InvoiceSummaryOverages $overages): self
    {
        $this->initialized['overages'] = true;
        $this->overages = $overages;
        return $this;
    }
    /**
     * @return InvoiceSummaryTaxes
     */
    public function getTaxes(): InvoiceSummaryTaxes
    {
        return $this->taxes;
    }
    /**
     * @param InvoiceSummaryTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(InvoiceSummaryTaxes $taxes): self
    {
        $this->initialized['taxes'] = true;
        $this->taxes = $taxes;
        return $this;
    }
    /**
     * @return InvoiceSummaryCreditsAndAdjustments
     */
    public function getCreditsAndAdjustments(): InvoiceSummaryCreditsAndAdjustments
    {
        return $this->creditsAndAdjustments;
    }
    /**
     * @param InvoiceSummaryCreditsAndAdjustments $creditsAndAdjustments
     *
     * @return self
     */
    public function setCreditsAndAdjustments(InvoiceSummaryCreditsAndAdjustments $creditsAndAdjustments): self
    {
        $this->initialized['creditsAndAdjustments'] = true;
        $this->creditsAndAdjustments = $creditsAndAdjustments;
        return $this;
    }
}