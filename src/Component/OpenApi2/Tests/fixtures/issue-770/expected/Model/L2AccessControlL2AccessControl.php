<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class L2AccessControlL2AccessControl
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
     * identifier of the L2 Access Control
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
     * @var string
     */
    protected $domainId;
    /**
     * restriction of mac rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @var string
     */
    protected $restriction;
    /**
     * @var list<L2AccessControlRuleObject>
     */
    protected $rules;
    /**
     * restriction of EtherType rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @var string
     */
    protected $etherTypeRestriction;
    /**
     * @var list<L2AccessControlEtherTypeObject>
     */
    protected $etherTypes;
    /**
     * @var list<L2AccessControlUserDefinedEtherTypeObject>
     */
    protected $userDefinedEtherTypes;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    protected $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    protected $modifiedDateTime;
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
     * Creator name
     *
     * @var string
     */
    protected $creatorUsername;
    /**
     * Modifier name
     *
     * @var string
     */
    protected $modifierUsername;
    /**
     * identifier of the L2 Access Control
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * identifier of the L2 Access Control
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
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * restriction of mac rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @return string
     */
    public function getRestriction(): string
    {
        return $this->restriction;
    }
    /**
     * restriction of mac rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @param string $restriction
     *
     * @return self
     */
    public function setRestriction(string $restriction): self
    {
        $this->initialized['restriction'] = true;
        $this->restriction = $restriction;
        return $this;
    }
    /**
     * @return list<L2AccessControlRuleObject>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
    /**
     * @param list<L2AccessControlRuleObject> $rules
     *
     * @return self
     */
    public function setRules(array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
    /**
     * restriction of EtherType rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @return string
     */
    public function getEtherTypeRestriction(): string
    {
        return $this->etherTypeRestriction;
    }
    /**
     * restriction of EtherType rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @param string $etherTypeRestriction
     *
     * @return self
     */
    public function setEtherTypeRestriction(string $etherTypeRestriction): self
    {
        $this->initialized['etherTypeRestriction'] = true;
        $this->etherTypeRestriction = $etherTypeRestriction;
        return $this;
    }
    /**
     * @return list<L2AccessControlEtherTypeObject>
     */
    public function getEtherTypes(): array
    {
        return $this->etherTypes;
    }
    /**
     * @param list<L2AccessControlEtherTypeObject> $etherTypes
     *
     * @return self
     */
    public function setEtherTypes(array $etherTypes): self
    {
        $this->initialized['etherTypes'] = true;
        $this->etherTypes = $etherTypes;
        return $this;
    }
    /**
     * @return list<L2AccessControlUserDefinedEtherTypeObject>
     */
    public function getUserDefinedEtherTypes(): array
    {
        return $this->userDefinedEtherTypes;
    }
    /**
     * @param list<L2AccessControlUserDefinedEtherTypeObject> $userDefinedEtherTypes
     *
     * @return self
     */
    public function setUserDefinedEtherTypes(array $userDefinedEtherTypes): self
    {
        $this->initialized['userDefinedEtherTypes'] = true;
        $this->userDefinedEtherTypes = $userDefinedEtherTypes;
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
     * Creator name
     *
     * @return string
     */
    public function getCreatorUsername(): string
    {
        return $this->creatorUsername;
    }
    /**
     * Creator name
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
    /**
     * Modifier name
     *
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
     * Modifier name
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
}