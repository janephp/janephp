<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DnsSpoofingProfileDnsSpoofingProfileDetail
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
     * DNS Spoofing Profile's id
     *
     * @var string
     */
    protected $id;
    /**
     * DNS Spoofing Profile's name
     *
     * @var string
     */
    protected $name;
    /**
     * DNS Spoofing Profile's description
     *
     * @var string
     */
    protected $description;
    /**
     * DNS Spoofing Profile's rules (At least one rule)
     *
     * @var list<DnsSpoofingProfileDnsSpoofingRule>
     */
    protected $rules;
    /**
     * The zone which DNS Spoofing Profile belong to
     *
     * @var string
     */
    protected $zoneId;
    /**
     * The user who create the DNS Spoofing Profile
     *
     * @var int
     */
    protected $createDateTime;
    /**
     * The time when the user modify the DNS Spoofing Profile
     *
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * The time when the user create the DNS Spoofing Profile
     *
     * @var string
     */
    protected $creatorUsername;
    /**
     * The user who modify the DNS Spoofing Profile
     *
     * @var string
     */
    protected $modifierUsername;
    /**
     * DNS Spoofing Profile's id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * DNS Spoofing Profile's id
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
     * DNS Spoofing Profile's name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * DNS Spoofing Profile's name
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
     * DNS Spoofing Profile's description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * DNS Spoofing Profile's description
     *
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
     * DNS Spoofing Profile's rules (At least one rule)
     *
     * @return list<DnsSpoofingProfileDnsSpoofingRule>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
    /**
     * DNS Spoofing Profile's rules (At least one rule)
     *
     * @param list<DnsSpoofingProfileDnsSpoofingRule> $rules
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
     * The zone which DNS Spoofing Profile belong to
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * The zone which DNS Spoofing Profile belong to
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
     * The user who create the DNS Spoofing Profile
     *
     * @return int
     */
    public function getCreateDateTime(): int
    {
        return $this->createDateTime;
    }
    /**
     * The user who create the DNS Spoofing Profile
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
     * The time when the user modify the DNS Spoofing Profile
     *
     * @return int
     */
    public function getModifiedDateTime(): int
    {
        return $this->modifiedDateTime;
    }
    /**
     * The time when the user modify the DNS Spoofing Profile
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
     * The time when the user create the DNS Spoofing Profile
     *
     * @return string
     */
    public function getCreatorUsername(): string
    {
        return $this->creatorUsername;
    }
    /**
     * The time when the user create the DNS Spoofing Profile
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
     * The user who modify the DNS Spoofing Profile
     *
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
     * The user who modify the DNS Spoofing Profile
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