<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileModifyHS20Operator
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
}