<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileBonjourFencingPolicy
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
     * Bonjour Fencing Policy id
     *
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
     * Zone Id of The Bonjour Fencing Policy for clone in System Domain
     *
     * @var string
     */
    protected $zoneId;
    /**
     * Bonjour Fencing Rule List
     *
     * @var list<ProfileBonjourFencingRule>
     */
    protected $bonjourFencingRuleList;
    /**
     * Bonjour Fencing Rule Mapping List
     *
     * @var list<ProfileBonjourFencingRuleMapping>
     */
    protected $bonjourFencingRuleMappingList;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * Modifier Name
     *
     * @var string
     */
    protected $modifierUsername;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    protected $createDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    protected $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    protected $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    protected $creatorUsername;
    /**
     * Bonjour Fencing Policy id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Bonjour Fencing Policy id
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
     * Zone Id of The Bonjour Fencing Policy for clone in System Domain
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Zone Id of The Bonjour Fencing Policy for clone in System Domain
     *
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
     * Bonjour Fencing Rule List
     *
     * @return list<ProfileBonjourFencingRule>
     */
    public function getBonjourFencingRuleList(): array
    {
        return $this->bonjourFencingRuleList;
    }
    /**
     * Bonjour Fencing Rule List
     *
     * @param list<ProfileBonjourFencingRule> $bonjourFencingRuleList
     *
     * @return self
     */
    public function setBonjourFencingRuleList(array $bonjourFencingRuleList): self
    {
        $this->initialized['bonjourFencingRuleList'] = true;
        $this->bonjourFencingRuleList = $bonjourFencingRuleList;
        return $this;
    }
    /**
     * Bonjour Fencing Rule Mapping List
     *
     * @return list<ProfileBonjourFencingRuleMapping>
     */
    public function getBonjourFencingRuleMappingList(): array
    {
        return $this->bonjourFencingRuleMappingList;
    }
    /**
     * Bonjour Fencing Rule Mapping List
     *
     * @param list<ProfileBonjourFencingRuleMapping> $bonjourFencingRuleMappingList
     *
     * @return self
     */
    public function setBonjourFencingRuleMappingList(array $bonjourFencingRuleMappingList): self
    {
        $this->initialized['bonjourFencingRuleMappingList'] = true;
        $this->bonjourFencingRuleMappingList = $bonjourFencingRuleMappingList;
        return $this;
    }
    /**
     * Timestamp of being modified
     *
     * @return int
     */
    public function getModifiedDateTime(): int
    {
        return $this->modifiedDateTime;
    }
    /**
     * Timestamp of being modified
     *
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
     * Modifier Name
     *
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
     * Modifier Name
     *
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
    /**
     * Timestamp of being created
     *
     * @return int
     */
    public function getCreateDateTime(): int
    {
        return $this->createDateTime;
    }
    /**
     * Timestamp of being created
     *
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
     * Creator ID
     *
     * @return string
     */
    public function getCreatorId(): string
    {
        return $this->creatorId;
    }
    /**
     * Creator ID
     *
     * @param string $creatorId
     *
     * @return self
     */
    public function setCreatorId(string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * Modifier ID
     *
     * @return string
     */
    public function getModifierId(): string
    {
        return $this->modifierId;
    }
    /**
     * Modifier ID
     *
     * @param string $modifierId
     *
     * @return self
     */
    public function setModifierId(string $modifierId): self
    {
        $this->initialized['modifierId'] = true;
        $this->modifierId = $modifierId;
        return $this;
    }
    /**
     * Creator Name
     *
     * @return string
     */
    public function getCreatorUsername(): string
    {
        return $this->creatorUsername;
    }
    /**
     * Creator Name
     *
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
}