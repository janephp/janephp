<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderOnlineSignup
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
     * @var ProfileProviderExternalOSU
     */
    protected $externalOSU;
    /**
     * @return ProfileProviderExternalOSU
     */
    public function getExternalOSU(): ProfileProviderExternalOSU
    {
        return $this->externalOSU;
    }
    /**
     * @param ProfileProviderExternalOSU $externalOSU
     *
     * @return self
     */
    public function setExternalOSU(ProfileProviderExternalOSU $externalOSU): self
    {
        $this->initialized['externalOSU'] = true;
        $this->externalOSU = $externalOSU;
        return $this;
    }
}