<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileIpsecProfile
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
     * identifier of the ipsec profile
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
     * server Addr of the ipsec profile
     *
     * @var string
     */
    protected $serverAddr;
    /**
     * authentication type of the ipsec profile
     *
     * @var string
     */
    protected $authType;
    /**
     * Tunnel mode of IPsec profile
     *
     * @var string
     */
    protected $tunnelMode;
    /**
     * authentication preShared Key of the ipsec profile
     *
     * @var string
     */
    protected $preSharedKey;
    /**
     * ikeProposal Security Association Content
     *
     * @var ProfileIkeSecurityAssociationContent
     */
    protected $ikeSecurityAssociation;
    /**
     * espProposal Security Association Content
     *
     * @var ProfileEspSecurityAssociationContent
     */
    protected $espSecurityAssociation;
    /**
     * ikeRekey Time of the ipsec profile
     *
     * @var float
     */
    protected $ikeRekeyTime;
    /**
     * time unit
     *
     * @var string
     */
    protected $ikeRekeyTimeUnit;
    /**
     * espRekey Time of the ipsec profile
     *
     * @var float
     */
    protected $espRekeyTime;
    /**
     * time unit
     *
     * @var string
     */
    protected $espRekeyTimeUnit;
    /**
     * Certificate Management Protocol Option
     *
     * @var ProfileCmProtocolOptionContent
     */
    protected $cmProtocolOption;
    /**
     * advanced option Content
     *
     * @var ProfileAdvancedOptionContent
     */
    protected $advancedOption;
    /**
     * @var string
     */
    protected $ipMode;
    /**
     * Domain id of the IPSec profile
     *
     * @var string
     */
    protected $domainId;
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
     * identifier of the ipsec profile
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * identifier of the ipsec profile
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
     * server Addr of the ipsec profile
     *
     * @return string
     */
    public function getServerAddr(): string
    {
        return $this->serverAddr;
    }
    /**
     * server Addr of the ipsec profile
     *
     * @param string $serverAddr
     *
     * @return self
     */
    public function setServerAddr(string $serverAddr): self
    {
        $this->initialized['serverAddr'] = true;
        $this->serverAddr = $serverAddr;
        return $this;
    }
    /**
     * authentication type of the ipsec profile
     *
     * @return string
     */
    public function getAuthType(): string
    {
        return $this->authType;
    }
    /**
     * authentication type of the ipsec profile
     *
     * @param string $authType
     *
     * @return self
     */
    public function setAuthType(string $authType): self
    {
        $this->initialized['authType'] = true;
        $this->authType = $authType;
        return $this;
    }
    /**
     * Tunnel mode of IPsec profile
     *
     * @return string
     */
    public function getTunnelMode(): string
    {
        return $this->tunnelMode;
    }
    /**
     * Tunnel mode of IPsec profile
     *
     * @param string $tunnelMode
     *
     * @return self
     */
    public function setTunnelMode(string $tunnelMode): self
    {
        $this->initialized['tunnelMode'] = true;
        $this->tunnelMode = $tunnelMode;
        return $this;
    }
    /**
     * authentication preShared Key of the ipsec profile
     *
     * @return string
     */
    public function getPreSharedKey(): string
    {
        return $this->preSharedKey;
    }
    /**
     * authentication preShared Key of the ipsec profile
     *
     * @param string $preSharedKey
     *
     * @return self
     */
    public function setPreSharedKey(string $preSharedKey): self
    {
        $this->initialized['preSharedKey'] = true;
        $this->preSharedKey = $preSharedKey;
        return $this;
    }
    /**
     * ikeProposal Security Association Content
     *
     * @return ProfileIkeSecurityAssociationContent
     */
    public function getIkeSecurityAssociation(): ProfileIkeSecurityAssociationContent
    {
        return $this->ikeSecurityAssociation;
    }
    /**
     * ikeProposal Security Association Content
     *
     * @param ProfileIkeSecurityAssociationContent $ikeSecurityAssociation
     *
     * @return self
     */
    public function setIkeSecurityAssociation(ProfileIkeSecurityAssociationContent $ikeSecurityAssociation): self
    {
        $this->initialized['ikeSecurityAssociation'] = true;
        $this->ikeSecurityAssociation = $ikeSecurityAssociation;
        return $this;
    }
    /**
     * espProposal Security Association Content
     *
     * @return ProfileEspSecurityAssociationContent
     */
    public function getEspSecurityAssociation(): ProfileEspSecurityAssociationContent
    {
        return $this->espSecurityAssociation;
    }
    /**
     * espProposal Security Association Content
     *
     * @param ProfileEspSecurityAssociationContent $espSecurityAssociation
     *
     * @return self
     */
    public function setEspSecurityAssociation(ProfileEspSecurityAssociationContent $espSecurityAssociation): self
    {
        $this->initialized['espSecurityAssociation'] = true;
        $this->espSecurityAssociation = $espSecurityAssociation;
        return $this;
    }
    /**
     * ikeRekey Time of the ipsec profile
     *
     * @return float
     */
    public function getIkeRekeyTime(): float
    {
        return $this->ikeRekeyTime;
    }
    /**
     * ikeRekey Time of the ipsec profile
     *
     * @param float $ikeRekeyTime
     *
     * @return self
     */
    public function setIkeRekeyTime(float $ikeRekeyTime): self
    {
        $this->initialized['ikeRekeyTime'] = true;
        $this->ikeRekeyTime = $ikeRekeyTime;
        return $this;
    }
    /**
     * time unit
     *
     * @return string
     */
    public function getIkeRekeyTimeUnit(): string
    {
        return $this->ikeRekeyTimeUnit;
    }
    /**
     * time unit
     *
     * @param string $ikeRekeyTimeUnit
     *
     * @return self
     */
    public function setIkeRekeyTimeUnit(string $ikeRekeyTimeUnit): self
    {
        $this->initialized['ikeRekeyTimeUnit'] = true;
        $this->ikeRekeyTimeUnit = $ikeRekeyTimeUnit;
        return $this;
    }
    /**
     * espRekey Time of the ipsec profile
     *
     * @return float
     */
    public function getEspRekeyTime(): float
    {
        return $this->espRekeyTime;
    }
    /**
     * espRekey Time of the ipsec profile
     *
     * @param float $espRekeyTime
     *
     * @return self
     */
    public function setEspRekeyTime(float $espRekeyTime): self
    {
        $this->initialized['espRekeyTime'] = true;
        $this->espRekeyTime = $espRekeyTime;
        return $this;
    }
    /**
     * time unit
     *
     * @return string
     */
    public function getEspRekeyTimeUnit(): string
    {
        return $this->espRekeyTimeUnit;
    }
    /**
     * time unit
     *
     * @param string $espRekeyTimeUnit
     *
     * @return self
     */
    public function setEspRekeyTimeUnit(string $espRekeyTimeUnit): self
    {
        $this->initialized['espRekeyTimeUnit'] = true;
        $this->espRekeyTimeUnit = $espRekeyTimeUnit;
        return $this;
    }
    /**
     * Certificate Management Protocol Option
     *
     * @return ProfileCmProtocolOptionContent
     */
    public function getCmProtocolOption(): ProfileCmProtocolOptionContent
    {
        return $this->cmProtocolOption;
    }
    /**
     * Certificate Management Protocol Option
     *
     * @param ProfileCmProtocolOptionContent $cmProtocolOption
     *
     * @return self
     */
    public function setCmProtocolOption(ProfileCmProtocolOptionContent $cmProtocolOption): self
    {
        $this->initialized['cmProtocolOption'] = true;
        $this->cmProtocolOption = $cmProtocolOption;
        return $this;
    }
    /**
     * advanced option Content
     *
     * @return ProfileAdvancedOptionContent
     */
    public function getAdvancedOption(): ProfileAdvancedOptionContent
    {
        return $this->advancedOption;
    }
    /**
     * advanced option Content
     *
     * @param ProfileAdvancedOptionContent $advancedOption
     *
     * @return self
     */
    public function setAdvancedOption(ProfileAdvancedOptionContent $advancedOption): self
    {
        $this->initialized['advancedOption'] = true;
        $this->advancedOption = $advancedOption;
        return $this;
    }
    /**
     * @return string
     */
    public function getIpMode(): string
    {
        return $this->ipMode;
    }
    /**
     * @param string $ipMode
     *
     * @return self
     */
    public function setIpMode(string $ipMode): self
    {
        $this->initialized['ipMode'] = true;
        $this->ipMode = $ipMode;
        return $this;
    }
    /**
     * Domain id of the IPSec profile
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain id of the IPSec profile
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