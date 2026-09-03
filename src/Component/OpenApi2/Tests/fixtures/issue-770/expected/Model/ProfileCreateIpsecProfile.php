<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileCreateIpsecProfile
{
    /**
     * identifier of the ipsec profile
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * server Addr of the ipsec profile
     *
     * @var string
     */
    public string $serverAddr;
    /**
     * authentication type of the ipsec profile
     *
     * @var string
     */
    public string $authType;
    /**
     * Tunnel mode of IPsec profile
     *
     * @var string
     */
    public string $tunnelMode;
    /**
     * authentication preShared Key of the ipsec profile
     *
     * @var string
     */
    public string $preSharedKey;
    /**
     * ikeProposal Security Association Content
     *
     * @var ProfileIkeSecurityAssociationContent
     */
    public ProfileIkeSecurityAssociationContent $ikeSecurityAssociation;
    /**
     * espProposal Security Association Content
     *
     * @var ProfileEspSecurityAssociationContent
     */
    public ProfileEspSecurityAssociationContent $espSecurityAssociation;
    /**
     * ikeRekey Time of the ipsec profile
     *
     * @var float
     */
    public float $ikeRekeyTime;
    /**
     * time unit
     *
     * @var string
     */
    public string $ikeRekeyTimeUnit;
    /**
     * espRekey Time of the ipsec profile
     *
     * @var float
     */
    public float $espRekeyTime;
    /**
     * time unit
     *
     * @var string
     */
    public string $espRekeyTimeUnit;
    /**
     * Certificate Management Protocol Option
     *
     * @var ProfileCmProtocolOptionContent
     */
    public ProfileCmProtocolOptionContent $cmProtocolOption;
    /**
     * advanced option Content
     *
     * @var ProfileAdvancedOptionContent
     */
    public ProfileAdvancedOptionContent $advancedOption;
    /**
     * @var string
     */
    public string $ipMode;
    /**
     * Domain id of the IPSec profile
     *
     * @var string
     */
    public string $domainId;
}