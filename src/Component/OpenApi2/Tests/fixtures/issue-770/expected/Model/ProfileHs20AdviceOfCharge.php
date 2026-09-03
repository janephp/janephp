<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileHs20AdviceOfCharge
{
    /**
     * @var string
     */
    public string $type;
    /**
     * @var ProfileHs20AdviceOfChargeNaiRealm
     */
    public ProfileHs20AdviceOfChargeNaiRealm $naiRealm;
    /**
     * the Hotspot 2.0 Advice of Charge Plan Information
     *
     * @var list<ProfileHs20AdviceOfChargePlanInformationsItem>
     */
    public array $planInformations;
}