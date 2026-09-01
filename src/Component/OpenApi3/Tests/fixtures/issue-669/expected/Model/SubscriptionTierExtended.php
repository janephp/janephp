<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SubscriptionTierExtended implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A boolean indicating whether your account it eligible to use a certain subscription tier.
     *
     * @var bool
     */
    public bool $eligible;
    /**
     * If your account is not eligible to use a certain subscription tier, this will include a list of reasons that prevent you from using the tier.
     *
     * @var list<string>
     */
    public array $eligibilityReasons;
    public function definedProperties(): array
    {
        return ['eligible' => 'eligible', 'eligibilityReasons' => 'eligibility_reasons'];
    }
}