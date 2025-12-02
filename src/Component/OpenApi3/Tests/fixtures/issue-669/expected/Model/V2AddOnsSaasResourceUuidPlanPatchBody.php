<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2AddOnsSaasResourceUuidPlanPatchBody extends \ArrayObject
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
}