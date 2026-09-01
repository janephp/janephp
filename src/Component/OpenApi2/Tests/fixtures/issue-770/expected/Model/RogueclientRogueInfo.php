<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RogueclientRogueInfo
{
    /**
     * The list of APs that found the rogue client
     *
     * @var list<ApInfoApInfo>
     */
    public array $detectedByAP;
    /**
     * Channel of the rogue client
     *
     * @var int
     */
    public int $channel;
    /**
     * @var string
     */
    public string $rogueMac;
    /**
     * Encryption of the rogue client
     *
     * @var string
     */
    public string $encryption;
    /**
     * Radio of the rogue client
     *
     * @var string
     */
    public string $radio;
    /**
     * Timestamp of the rogue client
     *
     * @var int
     */
    public int $lastDetected;
    /**
     * SSID of the rogue client
     *
     * @var string
     */
    public string $ssid;
    /**
     * Type of the rogue client
     *
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $rogueAPMac;
    /**
     * Rogue classification by policy
     *
     * @var string
     */
    public string $classification;
    /**
     * What policy and rule matched when system doing classification by rogue policy
     *
     * @var string
     */
    public string $matchResult;
}