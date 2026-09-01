<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileBonjourFencingPolicy
{
    /**
     * Bonjour Fencing Policy id
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
     * Zone Id of The Bonjour Fencing Policy for clone in System Domain
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Bonjour Fencing Rule List
     *
     * @var list<ProfileBonjourFencingRule>
     */
    public array $bonjourFencingRuleList;
    /**
     * Bonjour Fencing Rule Mapping List
     *
     * @var list<ProfileBonjourFencingRuleMapping>
     */
    public array $bonjourFencingRuleMappingList;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
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
}