<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlangroupWlanMember
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
     * Identifier of the WLAN
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the WLAN
     *
     * @var string
     */
    protected $name;
    /**
     * Access VLAN
     *
     * @var int
     */
    protected $accessVlan;
    /**
     * @var CommonGenericRef
     */
    protected $vlanPooling;
    /**
     * NAS-ID
     *
     * @var string
     */
    protected $nasId;
    /**
     * Identifier of the WLAN
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the WLAN
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Name of the WLAN
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the WLAN
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Access VLAN
     *
     * @return int
     */
    public function getAccessVlan(): int
    {
        return $this->accessVlan;
    }
    /**
     * Access VLAN
     *
     * @param int $accessVlan
     *
     * @return self
     */
    public function setAccessVlan(int $accessVlan): self
    {
        $this->initialized['accessVlan'] = true;
        $this->accessVlan = $accessVlan;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getVlanPooling(): CommonGenericRef
    {
        return $this->vlanPooling;
    }
    /**
     * @param CommonGenericRef $vlanPooling
     *
     * @return self
     */
    public function setVlanPooling(CommonGenericRef $vlanPooling): self
    {
        $this->initialized['vlanPooling'] = true;
        $this->vlanPooling = $vlanPooling;
        return $this;
    }
    /**
     * NAS-ID
     *
     * @return string
     */
    public function getNasId(): string
    {
        return $this->nasId;
    }
    /**
     * NAS-ID
     *
     * @param string $nasId
     *
     * @return self
     */
    public function setNasId(string $nasId): self
    {
        $this->initialized['nasId'] = true;
        $this->nasId = $nasId;
        return $this;
    }
}