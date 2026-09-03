<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class L2AccessControlL2AccessControl
{
    /**
     * identifier of the L2 Access Control
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
     * @var string
     */
    public string $domainId;
    /**
     * restriction of mac rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @var string
     */
    public string $restriction;
    /**
     * @var list<L2AccessControlRuleObject>
     */
    public array $rules;
    /**
     * restriction of EtherType rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @var string
     */
    public string $etherTypeRestriction;
    /**
     * @var list<L2AccessControlEtherTypeObject>
     */
    public array $etherTypes;
    /**
     * @var list<L2AccessControlUserDefinedEtherTypeObject>
     */
    public array $userDefinedEtherTypes;
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
     * Creator name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Modifier name
     *
     * @var string
     */
    public string $modifierUsername;
}