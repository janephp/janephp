<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RogueInfoRogueInfo
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
     * The list of the AP found this Rogue AP.
     *
     * @var list<ApInfoApInfo>
     */
    protected $detectedByAP;
    /**
     * Channel of the rogue AP
     *
     * @var int
     */
    protected $channel;
    /**
     * @var string
     */
    protected $rogueMac;
    /**
     * Encryption of the rogue AP
     *
     * @var string
     */
    protected $encryption;
    /**
     * Radio of the rogue AP
     *
     * @var string
     */
    protected $radio;
    /**
     * Timestamp of the rogue AP
     *
     * @var int
     */
    protected $lastDetected;
    /**
     * SSID of the rogue AP
     *
     * @var string
     */
    protected $ssid;
    /**
     * Type of the rogue AP
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $rogueAPMac;
    /**
     * Rogue classification by policy
     *
     * @var string
     */
    protected $classification;
    /**
     * What policy and rule matched when system doing classification by rogue policy
     *
     * @var string
     */
    protected $matchResult;
    /**
     * The list of the AP found this Rogue AP.
     *
     * @return list<ApInfoApInfo>
     */
    public function getDetectedByAP(): array
    {
        return $this->detectedByAP;
    }
    /**
     * The list of the AP found this Rogue AP.
     *
     * @param list<ApInfoApInfo> $detectedByAP
     *
     * @return self
     */
    public function setDetectedByAP(array $detectedByAP): self
    {
        $this->initialized['detectedByAP'] = true;
        $this->detectedByAP = $detectedByAP;
        return $this;
    }
    /**
     * Channel of the rogue AP
     *
     * @return int
     */
    public function getChannel(): int
    {
        return $this->channel;
    }
    /**
     * Channel of the rogue AP
     *
     * @param int $channel
     *
     * @return self
     */
    public function setChannel(int $channel): self
    {
        $this->initialized['channel'] = true;
        $this->channel = $channel;
        return $this;
    }
    /**
     * @return string
     */
    public function getRogueMac(): string
    {
        return $this->rogueMac;
    }
    /**
     * @param string $rogueMac
     *
     * @return self
     */
    public function setRogueMac(string $rogueMac): self
    {
        $this->initialized['rogueMac'] = true;
        $this->rogueMac = $rogueMac;
        return $this;
    }
    /**
     * Encryption of the rogue AP
     *
     * @return string
     */
    public function getEncryption(): string
    {
        return $this->encryption;
    }
    /**
     * Encryption of the rogue AP
     *
     * @param string $encryption
     *
     * @return self
     */
    public function setEncryption(string $encryption): self
    {
        $this->initialized['encryption'] = true;
        $this->encryption = $encryption;
        return $this;
    }
    /**
     * Radio of the rogue AP
     *
     * @return string
     */
    public function getRadio(): string
    {
        return $this->radio;
    }
    /**
     * Radio of the rogue AP
     *
     * @param string $radio
     *
     * @return self
     */
    public function setRadio(string $radio): self
    {
        $this->initialized['radio'] = true;
        $this->radio = $radio;
        return $this;
    }
    /**
     * Timestamp of the rogue AP
     *
     * @return int
     */
    public function getLastDetected(): int
    {
        return $this->lastDetected;
    }
    /**
     * Timestamp of the rogue AP
     *
     * @param int $lastDetected
     *
     * @return self
     */
    public function setLastDetected(int $lastDetected): self
    {
        $this->initialized['lastDetected'] = true;
        $this->lastDetected = $lastDetected;
        return $this;
    }
    /**
     * SSID of the rogue AP
     *
     * @return string
     */
    public function getSsid(): string
    {
        return $this->ssid;
    }
    /**
     * SSID of the rogue AP
     *
     * @param string $ssid
     *
     * @return self
     */
    public function setSsid(string $ssid): self
    {
        $this->initialized['ssid'] = true;
        $this->ssid = $ssid;
        return $this;
    }
    /**
     * Type of the rogue AP
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of the rogue AP
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getRogueAPMac(): string
    {
        return $this->rogueAPMac;
    }
    /**
     * @param string $rogueAPMac
     *
     * @return self
     */
    public function setRogueAPMac(string $rogueAPMac): self
    {
        $this->initialized['rogueAPMac'] = true;
        $this->rogueAPMac = $rogueAPMac;
        return $this;
    }
    /**
     * Rogue classification by policy
     *
     * @return string
     */
    public function getClassification(): string
    {
        return $this->classification;
    }
    /**
     * Rogue classification by policy
     *
     * @param string $classification
     *
     * @return self
     */
    public function setClassification(string $classification): self
    {
        $this->initialized['classification'] = true;
        $this->classification = $classification;
        return $this;
    }
    /**
     * What policy and rule matched when system doing classification by rogue policy
     *
     * @return string
     */
    public function getMatchResult(): string
    {
        return $this->matchResult;
    }
    /**
     * What policy and rule matched when system doing classification by rogue policy
     *
     * @param string $matchResult
     *
     * @return self
     */
    public function setMatchResult(string $matchResult): self
    {
        $this->initialized['matchResult'] = true;
        $this->matchResult = $matchResult;
        return $this;
    }
}