<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileHs20AdviceOfCharge
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
     * @var string
     */
    protected $type;
    /**
     * @var ProfileHs20AdviceOfChargeNaiRealm
     */
    protected $naiRealm;
    /**
     * the Hotspot 2.0 Advice of Charge Plan Information
     *
     * @var list<ProfileHs20AdviceOfChargePlanInformationsItem>
     */
    protected $planInformations;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return ProfileHs20AdviceOfChargeNaiRealm
     */
    public function getNaiRealm(): ProfileHs20AdviceOfChargeNaiRealm
    {
        return $this->naiRealm;
    }
    /**
     * @param ProfileHs20AdviceOfChargeNaiRealm $naiRealm
     *
     * @return self
     */
    public function setNaiRealm(ProfileHs20AdviceOfChargeNaiRealm $naiRealm): self
    {
        $this->initialized['naiRealm'] = true;
        $this->naiRealm = $naiRealm;
        return $this;
    }
    /**
     * the Hotspot 2.0 Advice of Charge Plan Information
     *
     * @return list<ProfileHs20AdviceOfChargePlanInformationsItem>
     */
    public function getPlanInformations(): array
    {
        return $this->planInformations;
    }
    /**
     * the Hotspot 2.0 Advice of Charge Plan Information
     *
     * @param list<ProfileHs20AdviceOfChargePlanInformationsItem> $planInformations
     *
     * @return self
     */
    public function setPlanInformations(array $planInformations): self
    {
        $this->initialized['planInformations'] = true;
        $this->planInformations = $planInformations;
        return $this;
    }
}