<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApNeighborAPListListItem
{
    /**
     * @var string
     */
    public string $mac;
    /**
     * Name of the mesh neighbor AP
     *
     * @var string
     */
    public string $name;
    /**
     * Name of the zone which the mesh neighbor AP belongs to
     *
     * @var string
     */
    public string $zoneName;
    /**
     * IP address of the mesh neighbor AP
     *
     * @var string
     */
    public string $ip;
    /**
     * External IP of the mesh neighbor AP
     *
     * @var string
     */
    public string $externalIp;
    /**
     * External port of the mesh neighbor AP
     *
     * @var string
     */
    public string $externalPort;
    /**
     * Model of the mesh neighbor AP
     *
     * @var string
     */
    public string $model;
    /**
     * Firmware version of the mesh neighbor AP
     *
     * @var string
     */
    public string $version;
    /**
     * Channel of the mesh neighbor AP
     *
     * @var string
     */
    public string $channel;
    /**
     * Signal of the mesh neighbor AP
     *
     * @var string
     */
    public string $signal;
    /**
     * Connection state of the mesh neighbor AP
     *
     * @var string
     */
    public string $connectionState;
}