<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseBillingHistory implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<BillingHistory>
     */
    public array $billingHistory;
    /**
     * @var PageLinks
     */
    public PageLinks $links;
    /**
     * Information about the response itself.
     *
     * @var MetaProperties
     */
    public MetaProperties $meta;
    public function definedProperties(): array
    {
        return ['billingHistory' => 'billing_history', 'links' => 'links', 'meta' => 'meta'];
    }
}