<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ZoneLoadBalancing
{
    /**
     * @var string
     */
    public string $loadBalancingMethod = 'BASED_ON_CLIENT_COUNT';
    /**
     * @var ZoneBandBalancing
     */
    public ZoneBandBalancing $bandBalancing;
    /**
     * Steering Mode: BASIC-Withholds probe and authentication responses at connetcion time in heavily loaded band to balance clients to the other band, PROACTIVE-Uses BASIC functionality and actively rebalances clients via 802.11v BTM, STRICT-Uses PROACTIVE functionality and forcefully rebalances clients via 802.11v BTM
     *
     * @var string
     */
    public string $steeringMode = 'BASIC';
}