<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileBonjourFencingStatistic
{
    /**
     * @var string
     */
    public string $apMac;
    /**
     * @var int
     */
    public int $forwardedPackets;
    /**
     * @var int
     */
    public int $droppedPacketsDueToServiceType;
    /**
     * @var int
     */
    public int $droppedPacketsDueToNeighbor;
    /**
     * @var list<ProfileBonjourFencingService>
     */
    public array $serviceList;
}