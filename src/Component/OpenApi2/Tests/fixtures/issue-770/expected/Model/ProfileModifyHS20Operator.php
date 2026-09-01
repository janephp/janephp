<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileModifyHS20Operator
{
    /**
     * Identifier of the profile
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
     * Domain names
     *
     * @var list<string>
     */
    public array $domainNames;
    /**
     * Friendly names
     *
     * @var list<ProfileHs20FriendlyName>
     */
    public array $friendlyNames;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $certificate;
    /**
     * Domain Id
     *
     * @var string
     */
    public string $domainId;
    /**
     * Network’s Advice of Charge for using the Wi-Fi service
     *
     * @var list<ProfileHs20AdviceOfCharge>
     */
    public array $adviceOfCharges;
    /**
     * Hotspot20 Operator Icon Metadata
     *
     * @var list<ProfileHs20OperatorIcon>
     */
    public array $operatorIcons;
    /**
     * @var ProfileHs20TermsConditions
     */
    public ProfileHs20TermsConditions $termsConditions;
}