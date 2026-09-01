<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DpProfileDpNatProfileBasicBO
{
    /**
     * profileName
     *
     * @var string
     */
    public string $profileName;
    /**
     * natPublicVlanId
     *
     * @var int
     */
    public int $natPublicVlanId;
    /**
     * profileId
     *
     * @var string
     */
    public string $profileId;
    /**
     * The applied DP keys
     *
     * @var string
     */
    public string $appliedDpKey;
    /**
     * description
     *
     * @var string
     */
    public string $description;
    /**
     * secondaryNatDefaultRouteGateway
     *
     * @var string
     */
    public string $secondaryNatDefaultRouteGateway;
    /**
     * primaryNatDefaultRouteGateway
     *
     * @var string
     */
    public string $primaryNatDefaultRouteGateway;
    /**
     * @var DpProfileDpNatProfilePublicSubnetIdBO
     */
    public DpProfileDpNatProfilePublicSubnetIdBO $natPublicSubnetId;
}