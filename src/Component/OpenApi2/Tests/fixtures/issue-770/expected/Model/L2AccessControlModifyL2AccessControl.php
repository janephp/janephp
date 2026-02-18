<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class L2AccessControlModifyL2AccessControl
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
     * restriction of mac rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @var string
     */
    protected $restriction;
    /**
     * @var list<L2AccessControlRuleObject>
     */
    protected $rules;
    /**
     * restriction of EtherType rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @var string
     */
    protected $etherTypeRestriction;
    /**
     * @var list<L2AccessControlEtherTypeObject>
     */
    protected $etherTypes;
    /**
     * @var list<L2AccessControlUserDefinedEtherTypeObject>
     */
    protected $userDefinedEtherTypes;
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
     * restriction of mac rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @return string
     */
    public function getRestriction(): string
    {
        return $this->restriction;
    }
    /**
     * restriction of mac rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @param string $restriction
     *
     * @return self
     */
    public function setRestriction(string $restriction): self
    {
        $this->initialized['restriction'] = true;
        $this->restriction = $restriction;
        return $this;
    }
    /**
     * @return list<L2AccessControlRuleObject>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
    /**
     * @param list<L2AccessControlRuleObject> $rules
     *
     * @return self
     */
    public function setRules(array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
    /**
     * restriction of EtherType rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @return string
     */
    public function getEtherTypeRestriction(): string
    {
        return $this->etherTypeRestriction;
    }
    /**
     * restriction of EtherType rule of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @param string $etherTypeRestriction
     *
     * @return self
     */
    public function setEtherTypeRestriction(string $etherTypeRestriction): self
    {
        $this->initialized['etherTypeRestriction'] = true;
        $this->etherTypeRestriction = $etherTypeRestriction;
        return $this;
    }
    /**
     * @return list<L2AccessControlEtherTypeObject>
     */
    public function getEtherTypes(): array
    {
        return $this->etherTypes;
    }
    /**
     * @param list<L2AccessControlEtherTypeObject> $etherTypes
     *
     * @return self
     */
    public function setEtherTypes(array $etherTypes): self
    {
        $this->initialized['etherTypes'] = true;
        $this->etherTypes = $etherTypes;
        return $this;
    }
    /**
     * @return list<L2AccessControlUserDefinedEtherTypeObject>
     */
    public function getUserDefinedEtherTypes(): array
    {
        return $this->userDefinedEtherTypes;
    }
    /**
     * @param list<L2AccessControlUserDefinedEtherTypeObject> $userDefinedEtherTypes
     *
     * @return self
     */
    public function setUserDefinedEtherTypes(array $userDefinedEtherTypes): self
    {
        $this->initialized['userDefinedEtherTypes'] = true;
        $this->userDefinedEtherTypes = $userDefinedEtherTypes;
        return $this;
    }
}