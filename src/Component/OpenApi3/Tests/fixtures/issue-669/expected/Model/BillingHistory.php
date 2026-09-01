<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class BillingHistory implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Description of the billing history entry.
     *
     * @var string
     */
    public string $description;
    /**
     * Amount of the billing history entry.
     *
     * @var string
     */
    public string $amount;
    /**
     * ID of the invoice associated with the billing history entry, if applicable.
     *
     * @var string
     */
    public string $invoiceId;
    /**
     * UUID of the invoice associated with the billing history entry, if applicable.
     *
     * @var string
     */
    public string $invoiceUuid;
    /**
     * Time the billing history entry occurred.
     *
     * @var \DateTime
     */
    public \DateTime $date;
    /**
     * Type of billing history entry.
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['description' => 'description', 'amount' => 'amount', 'invoiceId' => 'invoice_id', 'invoiceUuid' => 'invoice_uuid', 'date' => 'date', 'type' => 'type'];
    }
}