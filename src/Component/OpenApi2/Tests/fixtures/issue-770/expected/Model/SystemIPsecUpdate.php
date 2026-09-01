<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemIPsecUpdate
{
    /**
     * Enable System IPSec
     *
     * @var bool
     */
    public bool $ipSecEnabled;
    /**
     * Security gateway IP
     *
     * @var string
     */
    public string $securityGateway;
    /**
     * Subnet Mask of security gateway
     *
     * @var string
     */
    public string $subnetMask;
    /**
     * Authentication type
     *
     * @var string
     */
    public string $authType;
    /**
     * Pre-shared key
     *
     * @var string
     */
    public string $preSharedKey;
    /**
     * The IP of IPSec receiver
     *
     * @var string
     */
    public string $remoteId;
    /**
     * SCG client certification id.
     *
     * @var string
     */
    public string $scgCertId;
    /**
     * Proposal of Internet Key Exchange
     *
     * @var list<SystemIPsecProposal>
     */
    public array $ikeProposals;
    /**
     * Disable rekey mechanisam of Internet Key Exchange
     *
     * @var bool
     */
    public bool $ikeRekeyDisabled;
    /**
     * Rekey time of Internet Key Exchange
     *
     * @var int
     */
    public int $ikeRekeyTime;
    /**
     * Rekey time unit of Internet Key Exchange
     *
     * @var string
     */
    public string $ikeRekeyTimeUnit;
    /**
     * Proposal of Encapsulating Security Payload
     *
     * @var list<SystemIPsecProposal>
     */
    public array $espProposals;
    /**
     * Disable rekey mechanisam of Encapsulating Security Payload
     *
     * @var bool
     */
    public bool $espRekeyDisabled;
    /**
     * Rekey time of Encapsulating Security Payload
     *
     * @var int
     */
    public int $espRekeyTime;
    /**
     * Rekey time unit of Encapsulating Security Payload
     *
     * @var string
     */
    public string $espRekeyTimeUnit;
    /**
     * Enable OCSP
     *
     * @var bool
     */
    public bool $ocspEnabled;
    /**
     * OCSP action option
     *
     * @var string
     */
    public string $ocspAction = 'CERT_FIRST';
    /**
     * Assign trust chain profile id
     *
     * @var string
     */
    public string $trustChainProfileId;
    /**
     * Assign specific cert subject
     *
     * @var string
     */
    public string $certSubject;
    /**
     * The URI of OCSP server
     *
     * @var string
     */
    public string $ocspServerUri;
}