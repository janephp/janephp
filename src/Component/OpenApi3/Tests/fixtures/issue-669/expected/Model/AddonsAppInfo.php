<?php

namespace Jane\Generated\DigitalOcean\Model;

class AddonsAppInfo extends \ArrayObject
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
     * The slug identifier for the application associated with the resource.
     *
     * @var string
     */
    protected $appSlug;
    /**
     * The Terms of Service URL for the resource.
     *
     * @var string
     */
    protected $tos;
    /**
     * The End User License Agreement URL for the resource.
     *
     * @var string
     */
    protected $eula;
    /**
     * A list of plans available for the resource.
     *
     * @var list<AddonsPlan>
     */
    protected $plans;
    /**
     * The slug identifier for the application associated with the resource.
     *
     * @return string
     */
    public function getAppSlug(): string
    {
        return $this->appSlug;
    }
    /**
     * The slug identifier for the application associated with the resource.
     *
     * @param string $appSlug
     *
     * @return self
     */
    public function setAppSlug(string $appSlug): self
    {
        $this->initialized['appSlug'] = true;
        $this->appSlug = $appSlug;
        return $this;
    }
    /**
     * The Terms of Service URL for the resource.
     *
     * @return string
     */
    public function getTos(): string
    {
        return $this->tos;
    }
    /**
     * The Terms of Service URL for the resource.
     *
     * @param string $tos
     *
     * @return self
     */
    public function setTos(string $tos): self
    {
        $this->initialized['tos'] = true;
        $this->tos = $tos;
        return $this;
    }
    /**
     * The End User License Agreement URL for the resource.
     *
     * @return string
     */
    public function getEula(): string
    {
        return $this->eula;
    }
    /**
     * The End User License Agreement URL for the resource.
     *
     * @param string $eula
     *
     * @return self
     */
    public function setEula(string $eula): self
    {
        $this->initialized['eula'] = true;
        $this->eula = $eula;
        return $this;
    }
    /**
     * A list of plans available for the resource.
     *
     * @return list<AddonsPlan>
     */
    public function getPlans(): array
    {
        return $this->plans;
    }
    /**
     * A list of plans available for the resource.
     *
     * @param list<AddonsPlan> $plans
     *
     * @return self
     */
    public function setPlans(array $plans): self
    {
        $this->initialized['plans'] = true;
        $this->plans = $plans;
        return $this;
    }
}