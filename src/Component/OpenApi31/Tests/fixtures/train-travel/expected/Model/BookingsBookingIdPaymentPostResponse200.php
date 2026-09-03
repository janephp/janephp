<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model;

use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\AdditionalPropertiesInterface;
class BookingsBookingIdPaymentPostResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier for the payment. This will be a unique identifier for the payment, and is used to reference the payment in other objects.
     *
     * @var string
     */
    public string $id;
    /**
     * Amount intended to be collected by this payment. A positive decimal figure describing the amount to be collected.
     *
     * @var float
     */
    public float $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase.
     *
     * @var string
     */
    public string $currency;
    /**
     * The payment source to take the payment from. This can be a card or a bank account. Some of these properties will be hidden on read to protect PII leaking.
     *
     * @var mixed
     */
    public $source;
    /**
     * The status of the payment, one of `pending`, `succeeded`, or `failed`.
     *
     * @var string
     */
    public string $status;
    /**
     * The link to the booking resource.
     *
     * @var LinksBooking
     */
    public LinksBooking $links;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'amount' => 'amount', 'currency' => 'currency', 'source' => 'source', 'status' => 'status', 'links' => 'links'];
    }
}