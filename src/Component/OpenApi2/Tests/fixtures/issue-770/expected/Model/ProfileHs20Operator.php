<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileHs20Operator
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
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    public string $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    public string $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
}