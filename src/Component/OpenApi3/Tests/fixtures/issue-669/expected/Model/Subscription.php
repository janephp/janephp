<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Subscription implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var SubscriptionTierBase
     */
    public SubscriptionTierBase $tier;
    /**
     * The time at which the subscription was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * The time at which the subscription was last updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    public function definedProperties(): array
    {
        return ['tier' => 'tier', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at'];
    }
}