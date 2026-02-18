<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneBonjourPolicyRule
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
     * Bonjour Service Type
     *
     * @var string
     */
    protected $bridgeService;
    /**
     * protocol. This is only available when bridgeService is OTHER
     *
     * @var string
     */
    protected $protocol;
    /**
     * From VLAN
     *
     * @var int
     */
    protected $fromVlan;
    /**
     * To VLAN
     *
     * @var int
     */
    protected $toVlan;
    /**
     * Notes
     *
     * @var string
     */
    protected $notes;
    /**
     * Bonjour Service Type
     *
     * @return string
     */
    public function getBridgeService(): string
    {
        return $this->bridgeService;
    }
    /**
     * Bonjour Service Type
     *
     * @param string $bridgeService
     *
     * @return self
     */
    public function setBridgeService(string $bridgeService): self
    {
        $this->initialized['bridgeService'] = true;
        $this->bridgeService = $bridgeService;
        return $this;
    }
    /**
     * protocol. This is only available when bridgeService is OTHER
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * protocol. This is only available when bridgeService is OTHER
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * From VLAN
     *
     * @return int
     */
    public function getFromVlan(): int
    {
        return $this->fromVlan;
    }
    /**
     * From VLAN
     *
     * @param int $fromVlan
     *
     * @return self
     */
    public function setFromVlan(int $fromVlan): self
    {
        $this->initialized['fromVlan'] = true;
        $this->fromVlan = $fromVlan;
        return $this;
    }
    /**
     * To VLAN
     *
     * @return int
     */
    public function getToVlan(): int
    {
        return $this->toVlan;
    }
    /**
     * To VLAN
     *
     * @param int $toVlan
     *
     * @return self
     */
    public function setToVlan(int $toVlan): self
    {
        $this->initialized['toVlan'] = true;
        $this->toVlan = $toVlan;
        return $this;
    }
    /**
     * Notes
     *
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes;
    }
    /**
     * Notes
     *
     * @param string $notes
     *
     * @return self
     */
    public function setNotes(string $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;
        return $this;
    }
}