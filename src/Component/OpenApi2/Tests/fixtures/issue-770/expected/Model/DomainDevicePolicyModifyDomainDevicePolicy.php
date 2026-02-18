<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DomainDevicePolicyModifyDomainDevicePolicy
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
     * defaultAction of the device policy config
     *
     * @var string
     */
    protected $defaultAction;
    /**
     * rule of the device policy config
     *
     * @var list<DomainDevicePolicyDomainDevicePolicyRule>
     */
    protected $rule;
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
     * defaultAction of the device policy config
     *
     * @return string
     */
    public function getDefaultAction(): string
    {
        return $this->defaultAction;
    }
    /**
     * defaultAction of the device policy config
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
     * rule of the device policy config
     *
     * @return list<DomainDevicePolicyDomainDevicePolicyRule>
     */
    public function getRule(): array
    {
        return $this->rule;
    }
    /**
     * rule of the device policy config
     *
     * @param list<DomainDevicePolicyDomainDevicePolicyRule> $rule
     *
     * @return self
     */
    public function setRule(array $rule): self
    {
        $this->initialized['rule'] = true;
        $this->rule = $rule;
        return $this;
    }
}