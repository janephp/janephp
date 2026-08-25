<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SubscriptionTierExtended implements AdditionalPropertiesInterface
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
     * A boolean indicating whether your account it eligible to use a certain subscription tier.
     *
     * @var bool
     */
    protected $eligible;
    /**
     * If your account is not eligible to use a certain subscription tier, this will include a list of reasons that prevent you from using the tier.
     *
     * @var list<string>
     */
    protected $eligibilityReasons;
    /**
     * A boolean indicating whether your account it eligible to use a certain subscription tier.
     *
     * @return bool
     */
    public function getEligible(): bool
    {
        return $this->eligible;
    }
    /**
     * A boolean indicating whether your account it eligible to use a certain subscription tier.
     *
     * @param bool $eligible
     *
     * @return self
     */
    public function setEligible(bool $eligible): self
    {
        $this->initialized['eligible'] = true;
        $this->eligible = $eligible;
        return $this;
    }
    /**
     * If your account is not eligible to use a certain subscription tier, this will include a list of reasons that prevent you from using the tier.
     *
     * @return list<string>
     */
    public function getEligibilityReasons(): array
    {
        return $this->eligibilityReasons;
    }
    /**
     * If your account is not eligible to use a certain subscription tier, this will include a list of reasons that prevent you from using the tier.
     *
     * @param list<string> $eligibilityReasons
     *
     * @return self
     */
    public function setEligibilityReasons(array $eligibilityReasons): self
    {
        $this->initialized['eligibilityReasons'] = true;
        $this->eligibilityReasons = $eligibilityReasons;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['eligible' => ['eligible', 'getEligible', 'setEligible'], 'eligibilityReasons' => ['eligibility_reasons', 'getEligibilityReasons', 'setEligibilityReasons']];
    }
}