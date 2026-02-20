<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class BookingPayment
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
     * Unique identifier for the payment. This will be a unique identifier for the payment, and is used to reference the payment in other objects.
     *
     * @var string
     */
    protected $id;
    /**
     * Amount intended to be collected by this payment. A positive decimal figure describing the amount to be collected.
     *
     * @var float
     */
    protected $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase.
     *
     * @var string
     */
    protected $currency;
    /**
     * The payment source to take the payment from. This can be a card or a bank account. Some of these properties will be hidden on read to protect PII leaking.
     *
     * @var mixed
     */
    protected $source;
    /**
     * The status of the payment, one of `pending`, `succeeded`, or `failed`.
     *
     * @var string
     */
    protected $status;
    /**
     * Unique identifier for the payment. This will be a unique identifier for the payment, and is used to reference the payment in other objects.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier for the payment. This will be a unique identifier for the payment, and is used to reference the payment in other objects.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Amount intended to be collected by this payment. A positive decimal figure describing the amount to be collected.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
    /**
     * Amount intended to be collected by this payment. A positive decimal figure describing the amount to be collected.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * The payment source to take the payment from. This can be a card or a bank account. Some of these properties will be hidden on read to protect PII leaking.
     *
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * The payment source to take the payment from. This can be a card or a bank account. Some of these properties will be hidden on read to protect PII leaking.
     *
     * @param mixed $source
     *
     * @return self
     */
    public function setSource($source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * The status of the payment, one of `pending`, `succeeded`, or `failed`.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The status of the payment, one of `pending`, `succeeded`, or `failed`.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}