<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VlanNameProfileVlanNameProfile
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
     * The mapping rules of VLAN Name
     *
     * @var list<VlanNameProfileVlanNameRule>
     */
    protected $rules;
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
     * The mapping rules of VLAN Name
     *
     * @return list<VlanNameProfileVlanNameRule>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
    /**
     * The mapping rules of VLAN Name
     *
     * @param list<VlanNameProfileVlanNameRule> $rules
     *
     * @return self
     */
    public function setRules(array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
}