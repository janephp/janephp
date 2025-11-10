<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileHs20Operator
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
     * Identifier of the profile
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
     * Domain names
     *
     * @var list<string>
     */
    protected $domainNames;
    /**
     * Friendly names
     *
     * @var list<ProfileHs20FriendlyName>
     */
    protected $friendlyNames;
    /**
     * @var CommonGenericRef
     */
    protected $certificate;
    /**
     * Domain Id
     *
     * @var string
     */
    protected $domainId;
    /**
     * Network’s Advice of Charge for using the Wi-Fi service
     *
     * @var list<ProfileHs20AdviceOfCharge>
     */
    protected $adviceOfCharges;
    /**
     * Hotspot20 Operator Icon Metadata
     *
     * @var list<ProfileHs20OperatorIcon>
     */
    protected $operatorIcons;
    /**
     * @var ProfileHs20TermsConditions
     */
    protected $termsConditions;
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
     * Creator Name
     *
     * @var string
     */
    protected $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    protected $modifierUsername;
    /**
     * Identifier of the profile
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the profile
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
     * Domain names
     *
     * @return list<string>
     */
    public function getDomainNames(): array
    {
        return $this->domainNames;
    }
    /**
     * Domain names
     *
     * @param list<string> $domainNames
     *
     * @return self
     */
    public function setDomainNames(array $domainNames): self
    {
        $this->initialized['domainNames'] = true;
        $this->domainNames = $domainNames;
        return $this;
    }
    /**
     * Friendly names
     *
     * @return list<ProfileHs20FriendlyName>
     */
    public function getFriendlyNames(): array
    {
        return $this->friendlyNames;
    }
    /**
     * Friendly names
     *
     * @param list<ProfileHs20FriendlyName> $friendlyNames
     *
     * @return self
     */
    public function setFriendlyNames(array $friendlyNames): self
    {
        $this->initialized['friendlyNames'] = true;
        $this->friendlyNames = $friendlyNames;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getCertificate(): CommonGenericRef
    {
        return $this->certificate;
    }
    /**
     * @param CommonGenericRef $certificate
     *
     * @return self
     */
    public function setCertificate(CommonGenericRef $certificate): self
    {
        $this->initialized['certificate'] = true;
        $this->certificate = $certificate;
        return $this;
    }
    /**
     * Domain Id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain Id
     *
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
     * Network’s Advice of Charge for using the Wi-Fi service
     *
     * @return list<ProfileHs20AdviceOfCharge>
     */
    public function getAdviceOfCharges(): array
    {
        return $this->adviceOfCharges;
    }
    /**
     * Network’s Advice of Charge for using the Wi-Fi service
     *
     * @param list<ProfileHs20AdviceOfCharge> $adviceOfCharges
     *
     * @return self
     */
    public function setAdviceOfCharges(array $adviceOfCharges): self
    {
        $this->initialized['adviceOfCharges'] = true;
        $this->adviceOfCharges = $adviceOfCharges;
        return $this;
    }
    /**
     * Hotspot20 Operator Icon Metadata
     *
     * @return list<ProfileHs20OperatorIcon>
     */
    public function getOperatorIcons(): array
    {
        return $this->operatorIcons;
    }
    /**
     * Hotspot20 Operator Icon Metadata
     *
     * @param list<ProfileHs20OperatorIcon> $operatorIcons
     *
     * @return self
     */
    public function setOperatorIcons(array $operatorIcons): self
    {
        $this->initialized['operatorIcons'] = true;
        $this->operatorIcons = $operatorIcons;
        return $this;
    }
    /**
     * @return ProfileHs20TermsConditions
     */
    public function getTermsConditions(): ProfileHs20TermsConditions
    {
        return $this->termsConditions;
    }
    /**
     * @param ProfileHs20TermsConditions $termsConditions
     *
     * @return self
     */
    public function setTermsConditions(ProfileHs20TermsConditions $termsConditions): self
    {
        $this->initialized['termsConditions'] = true;
        $this->termsConditions = $termsConditions;
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
}