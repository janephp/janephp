<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SplitTunnelCreateSplitTunnelProfile
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
     * Exception Address List(Destination rule) of split tunnel profile
     *
     * @var list<SplitTunnelSplitTunnelIpMaskRule>
     */
    protected $rules;
    /**
     * Forwarding Mode of split tunnel profile
     *
     * @var string
     */
    protected $defaultAction = 'LBO';
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
     * Exception Address List(Destination rule) of split tunnel profile
     *
     * @return list<SplitTunnelSplitTunnelIpMaskRule>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
    /**
     * Exception Address List(Destination rule) of split tunnel profile
     *
     * @param list<SplitTunnelSplitTunnelIpMaskRule> $rules
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
     * Forwarding Mode of split tunnel profile
     *
     * @return string
     */
    public function getDefaultAction(): string
    {
        return $this->defaultAction;
    }
    /**
     * Forwarding Mode of split tunnel profile
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
}