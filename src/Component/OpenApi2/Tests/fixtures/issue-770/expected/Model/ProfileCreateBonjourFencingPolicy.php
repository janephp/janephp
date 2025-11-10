<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateBonjourFencingPolicy
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
     * Bonjour Fencing Rule List
     *
     * @var list<ProfileBonjourFencingRule>
     */
    protected $bonjourFencingRuleList;
    /**
     * Bonjour Fencing Rule Mapping List
     *
     * @var list<ProfileBonjourFencingRuleMapping>
     */
    protected $bonjourFencingRuleMappingList;
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
     * Bonjour Fencing Rule List
     *
     * @return list<ProfileBonjourFencingRule>
     */
    public function getBonjourFencingRuleList(): array
    {
        return $this->bonjourFencingRuleList;
    }
    /**
     * Bonjour Fencing Rule List
     *
     * @param list<ProfileBonjourFencingRule> $bonjourFencingRuleList
     *
     * @return self
     */
    public function setBonjourFencingRuleList(array $bonjourFencingRuleList): self
    {
        $this->initialized['bonjourFencingRuleList'] = true;
        $this->bonjourFencingRuleList = $bonjourFencingRuleList;
        return $this;
    }
    /**
     * Bonjour Fencing Rule Mapping List
     *
     * @return list<ProfileBonjourFencingRuleMapping>
     */
    public function getBonjourFencingRuleMappingList(): array
    {
        return $this->bonjourFencingRuleMappingList;
    }
    /**
     * Bonjour Fencing Rule Mapping List
     *
     * @param list<ProfileBonjourFencingRuleMapping> $bonjourFencingRuleMappingList
     *
     * @return self
     */
    public function setBonjourFencingRuleMappingList(array $bonjourFencingRuleMappingList): self
    {
        $this->initialized['bonjourFencingRuleMappingList'] = true;
        $this->bonjourFencingRuleMappingList = $bonjourFencingRuleMappingList;
        return $this;
    }
}