<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2AddOnsSaasResourceUuidPlanPatchBody implements AdditionalPropertiesInterface
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
     * The slug identifier for the new plan to apply to the add-on resource.
     *
     * @var string
     */
    protected $planSlug;
    /**
     * The slug identifier for the new plan to apply to the add-on resource.
     *
     * @return string
     */
    public function getPlanSlug(): string
    {
        return $this->planSlug;
    }
    /**
     * The slug identifier for the new plan to apply to the add-on resource.
     *
     * @param string $planSlug
     *
     * @return self
     */
    public function setPlanSlug(string $planSlug): self
    {
        $this->initialized['planSlug'] = true;
        $this->planSlug = $planSlug;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['planSlug' => ['plan_slug', 'getPlanSlug', 'setPlanSlug']];
    }
}