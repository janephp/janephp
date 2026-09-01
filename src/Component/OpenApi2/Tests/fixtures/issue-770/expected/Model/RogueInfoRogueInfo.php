<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RogueInfoRogueInfo
{
    /**
     * The list of the AP found this Rogue AP.
     *
     * @var list<ApInfoApInfo>
     */
    public array $detectedByAP;
    /**
     * Channel of the rogue AP
     *
     * @var int
     */
    public int $channel;
    /**
     * @var string
     */
    public string $rogueMac;
    /**
     * Encryption of the rogue AP
     *
     * @var string
     */
    public string $encryption;
    /**
     * Radio of the rogue AP
     *
     * @var string
     */
    public string $radio;
    /**
     * Timestamp of the rogue AP
     *
     * @var int
     */
    public int $lastDetected;
    /**
     * SSID of the rogue AP
     *
     * @var string
     */
    public string $ssid;
    /**
     * Type of the rogue AP
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