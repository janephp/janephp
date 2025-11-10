<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class BondPortBondPortProfileWithEditInfo
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
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var int
     */
    protected $untagId;
    /**
     * @var string
     */
    protected $vlanMembers;
    /**
     * @var bool
     */
    protected $isDefault;
    /**
     * @var string
     */
    protected $zoneId;
    /**
     * @var int
     */
    protected $createDateTime;
    /**
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * @var string
     */
    protected $creatorUsername;
    /**
     * @var string
     */
    protected $modifierUsername;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
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
     * @return int
     */
    public function getUntagId(): int
    {
        return $this->untagId;
    }
    /**
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
     * @return string
     */
    public function getVlanMembers(): string
    {
        return $this->vlanMembers;
    }
    /**
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
    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }
    /**
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId): self
    {
        $this->initialized['zoneId'] = true;
        $this->zoneId = $zoneId;
        return $this;
    }
    /**
     * @return int
     */
    public function getCreateDateTime(): int
    {
        return $this->createDateTime;
    }
    /**
     * @param int $createDateTime
     *
     * @return self
     */
    public function setCreateDateTime(int $createDateTime): self
    {
        $this->initialized['createDateTime'] = true;
        $this->createDateTime = $createDateTime;
        return $this;
    }
    /**
     * @return int
     */
    public function getModifiedDateTime(): int
    {
        return $this->modifiedDateTime;
    }
    /**
     * @param int $modifiedDateTime
     *
     * @return self
     */
    public function setModifiedDateTime(int $modifiedDateTime): self
    {
        $this->initialized['modifiedDateTime'] = true;
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreatorUsername(): string
    {
        return $this->creatorUsername;
    }
    /**
     * @param string $creatorUsername
     *
     * @return self
     */
    public function setCreatorUsername(string $creatorUsername): self
    {
        $this->initialized['creatorUsername'] = true;
        $this->creatorUsername = $creatorUsername;
        return $this;
    }
    /**
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
     * @param string $modifierUsername
     *
     * @return self
     */
    public function setModifierUsername(string $modifierUsername): self
    {
        $this->initialized['modifierUsername'] = true;
        $this->modifierUsername = $modifierUsername;
        return $this;
    }
}