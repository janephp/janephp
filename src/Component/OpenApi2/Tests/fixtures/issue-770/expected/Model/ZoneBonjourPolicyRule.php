<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ZoneBonjourPolicyRule
{
    /**
     * Bonjour Service Type
     *
     * @var string
     */
    public string $bridgeService;
    /**
     * protocol. This is only available when bridgeService is OTHER
     *
     * @var string
     */
    public string $protocol;
    /**
     * From VLAN
     *
     * @var int
     */
    public int $fromVlan;
    /**
     * To VLAN
     *
     * @var int
     */
    public int $toVlan;
    /**
     * Notes
     *
     * @var string
     */
    public string $notes;
}