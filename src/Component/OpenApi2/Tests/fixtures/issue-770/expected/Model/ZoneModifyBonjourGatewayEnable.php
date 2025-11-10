<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneModifyBonjourGatewayEnable
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
     * Enable Bonjour gateway on th AP
     *
     * @var bool
     */
    protected $enabledBonjourGateway;
    /**
     * Enable Bonjour gateway on th AP
     *
     * @return bool
     */
    public function getEnabledBonjourGateway(): bool
    {
        return $this->enabledBonjourGateway;
    }
    /**
     * Enable Bonjour gateway on th AP
     *
     * @param bool $enabledBonjourGateway
     *
     * @return self
     */
    public function setEnabledBonjourGateway(bool $enabledBonjourGateway): self
    {
        $this->initialized['enabledBonjourGateway'] = true;
        $this->enabledBonjourGateway = $enabledBonjourGateway;
        return $this;
    }
}