<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileModifyL3AccessControlPolicy
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Default action
     *
     * @var string
     */
    protected $defaultAction = 'ALLOW';
    /**
     * L3 access control list
     *
     * @var list<ProfileL3AclRuleList>
     */
    protected $l3AclRuleList;
    /**
     * Domain UUID
     *
     * @var string
     */
    protected $domainId;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Default action
     *
     * @return string
     */
    public function getDefaultAction(): string
    {
        return $this->defaultAction;
    }
    /**
     * Default action
     *
     * @param string $defaultAction
     *
     * @return self
     */
    public function setDefaultAction(string $defaultAction): self
    {
        $this->initialized['defaultAction'] = true;
        $this->defaultAction = $defaultAction;
        return $this;
    }
    /**
     * L3 access control list
     *
     * @return list<ProfileL3AclRuleList>
     */
    public function getL3AclRuleList(): array
    {
        return $this->l3AclRuleList;
    }
    /**
     * L3 access control list
     *
     * @param list<ProfileL3AclRuleList> $l3AclRuleList
     *
     * @return self
     */
    public function setL3AclRuleList(array $l3AclRuleList): self
    {
        $this->initialized['l3AclRuleList'] = true;
        $this->l3AclRuleList = $l3AclRuleList;
        return $this;
    }
    /**
     * Domain UUID
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain UUID
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
}