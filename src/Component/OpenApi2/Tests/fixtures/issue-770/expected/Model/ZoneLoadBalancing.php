<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneLoadBalancing
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
    protected $loadBalancingMethod = 'BASED_ON_CLIENT_COUNT';
    /**
     * @var ZoneBandBalancing
     */
    protected $bandBalancing;
    /**
     * Steering Mode: BASIC-Withholds probe and authentication responses at connetcion time in heavily loaded band to balance clients to the other band, PROACTIVE-Uses BASIC functionality and actively rebalances clients via 802.11v BTM, STRICT-Uses PROACTIVE functionality and forcefully rebalances clients via 802.11v BTM
     *
     * @var string
     */
    protected $steeringMode = 'BASIC';
    /**
     * @return string
     */
    public function getLoadBalancingMethod(): string
    {
        return $this->loadBalancingMethod;
    }
    /**
     * @param string $loadBalancingMethod
     *
     * @return self
     */
    public function setLoadBalancingMethod(string $loadBalancingMethod): self
    {
        $this->initialized['loadBalancingMethod'] = true;
        $this->loadBalancingMethod = $loadBalancingMethod;
        return $this;
    }
    /**
     * @return ZoneBandBalancing
     */
    public function getBandBalancing(): ZoneBandBalancing
    {
        return $this->bandBalancing;
    }
    /**
     * @param ZoneBandBalancing $bandBalancing
     *
     * @return self
     */
    public function setBandBalancing(ZoneBandBalancing $bandBalancing): self
    {
        $this->initialized['bandBalancing'] = true;
        $this->bandBalancing = $bandBalancing;
        return $this;
    }
    /**
     * Steering Mode: BASIC-Withholds probe and authentication responses at connetcion time in heavily loaded band to balance clients to the other band, PROACTIVE-Uses BASIC functionality and actively rebalances clients via 802.11v BTM, STRICT-Uses PROACTIVE functionality and forcefully rebalances clients via 802.11v BTM
     *
     * @return string
     */
    public function getSteeringMode(): string
    {
        return $this->steeringMode;
    }
    /**
     * Steering Mode: BASIC-Withholds probe and authentication responses at connetcion time in heavily loaded band to balance clients to the other band, PROACTIVE-Uses BASIC functionality and actively rebalances clients via 802.11v BTM, STRICT-Uses PROACTIVE functionality and forcefully rebalances clients via 802.11v BTM
     *
     * @param string $steeringMode
     *
     * @return self
     */
    public function setSteeringMode(string $steeringMode): self
    {
        $this->initialized['steeringMode'] = true;
        $this->steeringMode = $steeringMode;
        return $this;
    }
}