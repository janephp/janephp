<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApInfoApInfo
{
    /**
     * @var string
     */
    public string $apMac;
    /**
     * @var string
     */
    public string $apName;
    /**
     * RSSI of the rogue AP
     *
     * @var string
     */
    public string $rssi;
    /**
     * Timestamp of the AP
     *
     * @var int
     */
    public int $lastDetected;
    /**
     * Zone name
     *
     * @var string
     */
    public string $zoneName;
    /**
     * Rogue type
     *
     * @var string
     */
    public string $rogueType;
    /**
     * To identify whether this is main instance for UI
     *
     * @var bool
     */
    public bool $mainDetector;
}