<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneBonjourPolicyRuleConfiguration
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
     * Priority
     *
     * @var string
     */
    protected $priority;
    /**
     * Bridge service
     *
     * @var string
     */
    protected $bridgeService;
    /**
     * protocol
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
     * Priority
     *
     * @return string
     */
    public function getPriority(): string
    {
        return $this->priority;
    }
    /**
     * Priority
     *
     * @param string $priority
     *
     * @return self
     */
    public function setPriority(string $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * Bridge service
     *
     * @return string
     */
    public function getBridgeService(): string
    {
        return $this->bridgeService;
    }
    /**
     * Bridge service
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
     * protocol
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * protocol
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