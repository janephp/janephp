<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlangroupModifyWlanGroupMember
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