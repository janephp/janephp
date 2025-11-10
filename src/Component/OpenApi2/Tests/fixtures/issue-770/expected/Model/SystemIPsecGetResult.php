<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemIPsecGetResult
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
     * Enable System IPSec
     *
     * @var bool
     */
    protected $ipSecEnabled;
    /**
     * Security gateway IP
     *
     * @var string
     */
    protected $securityGateway;
    /**
     * Subnet Mask of security gateway
     *
     * @var string
     */
    protected $subnetMask;
    /**
     * Authentication type
     *
     * @var string
     */
    protected $authType;
    /**
     * Pre-shared key
     *
     * @var string
     */
    protected $preSharedKey;
    /**
     * The IP of IPSec receiver
     *
     * @var string
     */
    protected $remoteId;
    /**
     * SCG client certification id.
     *
     * @var string
     */
    protected $scgCertId;
    /**
     * Proposal of Internet Key Exchange
     *
     * @var list<SystemIPsecProposal>
     */
    protected $ikeProposals;
    /**
     * Disable rekey mechanisam of Internet Key Exchange
     *
     * @var bool
     */
    protected $ikeRekeyDisabled;
    /**
     * Rekey time of Internet Key Exchange
     *
     * @var int
     */
    protected $ikeRekeyTime;
    /**
     * Rekey time unit of Internet Key Exchange
     *
     * @var string
     */
    protected $ikeRekeyTimeUnit;
    /**
     * Proposal of Encapsulating Security Payload
     *
     * @var list<SystemIPsecProposal>
     */
    protected $espProposals;
    /**
     * Disable rekey mechanisam of Encapsulating Security Payload
     *
     * @var bool
     */
    protected $espRekeyDisabled;
    /**
     * Rekey time of Encapsulating Security Payload
     *
     * @var int
     */
    protected $espRekeyTime;
    /**
     * Rekey time unit of Encapsulating Security Payload
     *
     * @var string
     */
    protected $espRekeyTimeUnit;
    /**
     * Enable OCSP
     *
     * @var bool
     */
    protected $ocspEnabled;
    /**
     * OCSP action option
     *
     * @var string
     */
    protected $ocspAction = 'CERT_FIRST';
    /**
     * Assign trust chain profile id
     *
     * @var string
     */
    protected $trustChainProfileId;
    /**
     * Assign specific cert subject
     *
     * @var string
     */
    protected $certSubject;
    /**
     * The URI of OCSP server
     *
     * @var string
     */
    protected $ocspServerUri;
    /**
     * Enable System IPSec
     *
     * @return bool
     */
    public function getIpSecEnabled(): bool
    {
        return $this->ipSecEnabled;
    }
    /**
     * Enable System IPSec
     *
     * @param bool $ipSecEnabled
     *
     * @return self
     */
    public function setIpSecEnabled(bool $ipSecEnabled): self
    {
        $this->initialized['ipSecEnabled'] = true;
        $this->ipSecEnabled = $ipSecEnabled;
        return $this;
    }
    /**
     * Security gateway IP
     *
     * @return string
     */
    public function getSecurityGateway(): string
    {
        return $this->securityGateway;
    }
    /**
     * Security gateway IP
     *
     * @param string $securityGateway
     *
     * @return self
     */
    public function setSecurityGateway(string $securityGateway): self
    {
        $this->initialized['securityGateway'] = true;
        $this->securityGateway = $securityGateway;
        return $this;
    }
    /**
     * Subnet Mask of security gateway
     *
     * @return string
     */
    public function getSubnetMask(): string
    {
        return $this->subnetMask;
    }
    /**
     * Subnet Mask of security gateway
     *
     * @param string $subnetMask
     *
     * @return self
     */
    public function setSubnetMask(string $subnetMask): self
    {
        $this->initialized['subnetMask'] = true;
        $this->subnetMask = $subnetMask;
        return $this;
    }
    /**
     * Authentication type
     *
     * @return string
     */
    public function getAuthType(): string
    {
        return $this->authType;
    }
    /**
     * Authentication type
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
     * Pre-shared key
     *
     * @return string
     */
    public function getPreSharedKey(): string
    {
        return $this->preSharedKey;
    }
    /**
     * Pre-shared key
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
     * The IP of IPSec receiver
     *
     * @return string
     */
    public function getRemoteId(): string
    {
        return $this->remoteId;
    }
    /**
     * The IP of IPSec receiver
     *
     * @param string $remoteId
     *
     * @return self
     */
    public function setRemoteId(string $remoteId): self
    {
        $this->initialized['remoteId'] = true;
        $this->remoteId = $remoteId;
        return $this;
    }
    /**
     * SCG client certification id.
     *
     * @return string
     */
    public function getScgCertId(): string
    {
        return $this->scgCertId;
    }
    /**
     * SCG client certification id.
     *
     * @param string $scgCertId
     *
     * @return self
     */
    public function setScgCertId(string $scgCertId): self
    {
        $this->initialized['scgCertId'] = true;
        $this->scgCertId = $scgCertId;
        return $this;
    }
    /**
     * Proposal of Internet Key Exchange
     *
     * @return list<SystemIPsecProposal>
     */
    public function getIkeProposals(): array
    {
        return $this->ikeProposals;
    }
    /**
     * Proposal of Internet Key Exchange
     *
     * @param list<SystemIPsecProposal> $ikeProposals
     *
     * @return self
     */
    public function setIkeProposals(array $ikeProposals): self
    {
        $this->initialized['ikeProposals'] = true;
        $this->ikeProposals = $ikeProposals;
        return $this;
    }
    /**
     * Disable rekey mechanisam of Internet Key Exchange
     *
     * @return bool
     */
    public function getIkeRekeyDisabled(): bool
    {
        return $this->ikeRekeyDisabled;
    }
    /**
     * Disable rekey mechanisam of Internet Key Exchange
     *
     * @param bool $ikeRekeyDisabled
     *
     * @return self
     */
    public function setIkeRekeyDisabled(bool $ikeRekeyDisabled): self
    {
        $this->initialized['ikeRekeyDisabled'] = true;
        $this->ikeRekeyDisabled = $ikeRekeyDisabled;
        return $this;
    }
    /**
     * Rekey time of Internet Key Exchange
     *
     * @return int
     */
    public function getIkeRekeyTime(): int
    {
        return $this->ikeRekeyTime;
    }
    /**
     * Rekey time of Internet Key Exchange
     *
     * @param int $ikeRekeyTime
     *
     * @return self
     */
    public function setIkeRekeyTime(int $ikeRekeyTime): self
    {
        $this->initialized['ikeRekeyTime'] = true;
        $this->ikeRekeyTime = $ikeRekeyTime;
        return $this;
    }
    /**
     * Rekey time unit of Internet Key Exchange
     *
     * @return string
     */
    public function getIkeRekeyTimeUnit(): string
    {
        return $this->ikeRekeyTimeUnit;
    }
    /**
     * Rekey time unit of Internet Key Exchange
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
     * Proposal of Encapsulating Security Payload
     *
     * @return list<SystemIPsecProposal>
     */
    public function getEspProposals(): array
    {
        return $this->espProposals;
    }
    /**
     * Proposal of Encapsulating Security Payload
     *
     * @param list<SystemIPsecProposal> $espProposals
     *
     * @return self
     */
    public function setEspProposals(array $espProposals): self
    {
        $this->initialized['espProposals'] = true;
        $this->espProposals = $espProposals;
        return $this;
    }
    /**
     * Disable rekey mechanisam of Encapsulating Security Payload
     *
     * @return bool
     */
    public function getEspRekeyDisabled(): bool
    {
        return $this->espRekeyDisabled;
    }
    /**
     * Disable rekey mechanisam of Encapsulating Security Payload
     *
     * @param bool $espRekeyDisabled
     *
     * @return self
     */
    public function setEspRekeyDisabled(bool $espRekeyDisabled): self
    {
        $this->initialized['espRekeyDisabled'] = true;
        $this->espRekeyDisabled = $espRekeyDisabled;
        return $this;
    }
    /**
     * Rekey time of Encapsulating Security Payload
     *
     * @return int
     */
    public function getEspRekeyTime(): int
    {
        return $this->espRekeyTime;
    }
    /**
     * Rekey time of Encapsulating Security Payload
     *
     * @param int $espRekeyTime
     *
     * @return self
     */
    public function setEspRekeyTime(int $espRekeyTime): self
    {
        $this->initialized['espRekeyTime'] = true;
        $this->espRekeyTime = $espRekeyTime;
        return $this;
    }
    /**
     * Rekey time unit of Encapsulating Security Payload
     *
     * @return string
     */
    public function getEspRekeyTimeUnit(): string
    {
        return $this->espRekeyTimeUnit;
    }
    /**
     * Rekey time unit of Encapsulating Security Payload
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
     * Enable OCSP
     *
     * @return bool
     */
    public function getOcspEnabled(): bool
    {
        return $this->ocspEnabled;
    }
    /**
     * Enable OCSP
     *
     * @param bool $ocspEnabled
     *
     * @return self
     */
    public function setOcspEnabled(bool $ocspEnabled): self
    {
        $this->initialized['ocspEnabled'] = true;
        $this->ocspEnabled = $ocspEnabled;
        return $this;
    }
    /**
     * OCSP action option
     *
     * @return string
     */
    public function getOcspAction(): string
    {
        return $this->ocspAction;
    }
    /**
     * OCSP action option
     *
     * @param string $ocspAction
     *
     * @return self
     */
    public function setOcspAction(string $ocspAction): self
    {
        $this->initialized['ocspAction'] = true;
        $this->ocspAction = $ocspAction;
        return $this;
    }
    /**
     * Assign trust chain profile id
     *
     * @return string
     */
    public function getTrustChainProfileId(): string
    {
        return $this->trustChainProfileId;
    }
    /**
     * Assign trust chain profile id
     *
     * @param string $trustChainProfileId
     *
     * @return self
     */
    public function setTrustChainProfileId(string $trustChainProfileId): self
    {
        $this->initialized['trustChainProfileId'] = true;
        $this->trustChainProfileId = $trustChainProfileId;
        return $this;
    }
    /**
     * Assign specific cert subject
     *
     * @return string
     */
    public function getCertSubject(): string
    {
        return $this->certSubject;
    }
    /**
     * Assign specific cert subject
     *
     * @param string $certSubject
     *
     * @return self
     */
    public function setCertSubject(string $certSubject): self
    {
        $this->initialized['certSubject'] = true;
        $this->certSubject = $certSubject;
        return $this;
    }
    /**
     * The URI of OCSP server
     *
     * @return string
     */
    public function getOcspServerUri(): string
    {
        return $this->ocspServerUri;
    }
    /**
     * The URI of OCSP server
     *
     * @param string $ocspServerUri
     *
     * @return self
     */
    public function setOcspServerUri(string $ocspServerUri): self
    {
        $this->initialized['ocspServerUri'] = true;
        $this->ocspServerUri = $ocspServerUri;
        return $this;
    }
}