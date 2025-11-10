<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneModifyBonjourGatewayPolicy
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
     * Bonjour policy rule list
     *
     * @var list<ZoneBonjourPolicyRule>
     */
    protected $bonjourPolicyRuleList;
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
     * Bonjour policy rule list
     *
     * @return list<ZoneBonjourPolicyRule>
     */
    public function getBonjourPolicyRuleList(): array
    {
        return $this->bonjourPolicyRuleList;
    }
    /**
     * Bonjour policy rule list
     *
     * @param list<ZoneBonjourPolicyRule> $bonjourPolicyRuleList
     *
     * @return self
     */
    public function setBonjourPolicyRuleList(array $bonjourPolicyRuleList): self
    {
        $this->initialized['bonjourPolicyRuleList'] = true;
        $this->bonjourPolicyRuleList = $bonjourPolicyRuleList;
        return $this;
    }
}