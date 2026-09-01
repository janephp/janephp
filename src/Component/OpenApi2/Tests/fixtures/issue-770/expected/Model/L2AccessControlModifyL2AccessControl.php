<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class L2AccessControlModifyL2AccessControl
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
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
}