<?php

namespace Jane\Generated\DigitalOcean\Model;

class BillingHistory extends \ArrayObject
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
     * Description of the billing history entry.
     *
     * @var string
     */
    protected $description;
    /**
     * Amount of the billing history entry.
     *
     * @var string
     */
    protected $amount;
    /**
     * ID of the invoice associated with the billing history entry, if applicable.
     *
     * @var string
     */
    protected $invoiceId;
    /**
     * UUID of the invoice associated with the billing history entry, if applicable.
     *
     * @var string
     */
    protected $invoiceUuid;
    /**
     * Time the billing history entry occurred.
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * Type of billing history entry.
     *
     * @var string
     */
    protected $type;
    /**
     * Description of the billing history entry.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the billing history entry.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Amount of the billing history entry.
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * Amount of the billing history entry.
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
     * ID of the invoice associated with the billing history entry, if applicable.
     *
     * @return string
     */
    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }
    /**
     * ID of the invoice associated with the billing history entry, if applicable.
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
     * UUID of the invoice associated with the billing history entry, if applicable.
     *
     * @return string
     */
    public function getInvoiceUuid(): string
    {
        return $this->invoiceUuid;
    }
    /**
     * UUID of the invoice associated with the billing history entry, if applicable.
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
     * Time the billing history entry occurred.
     *
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }
    /**
     * Time the billing history entry occurred.
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * Type of billing history entry.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of billing history entry.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}