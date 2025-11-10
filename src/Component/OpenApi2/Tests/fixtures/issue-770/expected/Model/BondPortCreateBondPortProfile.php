<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class BondPortCreateBondPortProfile
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Type of the bond port profile
     *
     * @var string
     */
    protected $type = 'TrunkPort';
    /**
     * VLAN Untag ID of the bond port profile
     *
     * @var int
     */
    protected $untagId = 1;
    /**
     * VLAN Members of the bond port profile
     *
     * @var string
     */
    protected $vlanMembers;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Type of the bond port profile
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of the bond port profile
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
     * VLAN Untag ID of the bond port profile
     *
     * @return int
     */
    public function getUntagId(): int
    {
        return $this->untagId;
    }
    /**
     * VLAN Untag ID of the bond port profile
     *
     * @param int $untagId
     *
     * @return self
     */
    public function setUntagId(int $untagId): self
    {
        $this->initialized['untagId'] = true;
        $this->untagId = $untagId;
        return $this;
    }
    /**
     * VLAN Members of the bond port profile
     *
     * @return string
     */
    public function getVlanMembers(): string
    {
        return $this->vlanMembers;
    }
    /**
     * VLAN Members of the bond port profile
     *
     * @param string $vlanMembers
     *
     * @return self
     */
    public function setVlanMembers(string $vlanMembers): self
    {
        $this->initialized['vlanMembers'] = true;
        $this->vlanMembers = $vlanMembers;
        return $this;
    }
}