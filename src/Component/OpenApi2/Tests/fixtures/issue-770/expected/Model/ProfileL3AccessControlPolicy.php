<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileL3AccessControlPolicy
{
    /**
     * ID of the L3 Access Control Policy
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
     * Default action
     *
     * @var string
     */
    public string $defaultAction = 'ALLOW';
    /**
     * L3 access control list
     *
     * @var list<ProfileL3AclRuleList>
     */
    public array $l3AclRuleList;
    /**
     * Domain UUID
     *
     * @var string
     */
    public string $domainId;
}