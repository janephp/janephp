<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MeshNodeInfoMeshNodeInfo
{
    /**
     * The MAC of the mesh AP
     *
     * @var string
     */
    public string $apMac;
    /**
     * The Role of the mesh AP
     *
     * @var string
     */
    public string $meshRole;
    /**
     * The name of the mesh AP
     *
     * @var string
     */
    public string $apName;
    /**
     * The model of the mesh AP
     *
     * @var string
     */
    public string $apModel;
    /**
     * The IP of the mesh AP
     *
     * @var int
     */
    public int $ipAddress;
    /**
     * The external IP of the mesh AP
     *
     * @var string
     */
    public string $externalIPAddress;
    /**
     * The channel of the mesh AP
     *
     * @var string
     */
    public string $channel;
    /**
     * The uplink channel of the mesh AP
     *
     * @var string
     */
    public string $uplinkChannel;
    /**
     * The downlink channel of the mesh AP
     *
     * @var string
     */
    public string $downlinkChannel;
    /**
     * The uplink SNR of the mesh AP
     *
     * @var int
     */
    public int $uplinkSnr;
    /**
     * The downlink SNR of the mesh AP
     *
     * @var int
     */
    public int $downlinkSnr;
    /**
     * The hasDownLink of the mesh AP
     *
     * @var bool
     */
    public bool $hasDownLink;
    /**
     * The count of clients of the mesh AP
     *
     * @var int
     */
    public int $clientCount;
    /**
     * The hop count of this mesh AP
     *
     * @var int
     */
    public int $hops;
    /**
     * @var list<MeshNodeInfoHelperZoneInfo>
     */
    public array $helperZoneInfo;
    /**
     * The uplink MCS Rate of the mesh AP
     *
     * @var int
     */
    public int $uplinkMCSRate;
    /**
     * The downlink MCS Rate of the mesh AP
     *
     * @var int
     */
    public int $downlinkMCSRate;
}