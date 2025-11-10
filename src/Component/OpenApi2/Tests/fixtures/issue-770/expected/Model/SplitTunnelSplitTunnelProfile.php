<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SplitTunnelSplitTunnelProfile
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
    protected $id;
    /**
     * @var string
     */
    protected $tenantId;
    /**
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $zoneId;
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
     * @var string
     */
    protected $defaultAction;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }
    /**
     * @param string $tenantId
     *
     * @return self
     */
    public function setTenantId(string $tenantId): self
    {
        $this->initialized['tenantId'] = true;
        $this->tenantId = $tenantId;
        return $this;
    }
    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
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
    /**
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId): self
    {
        $this->initialized['zoneId'] = true;
        $this->zoneId = $zoneId;
        return $this;
    }
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
     * @return string
     */
    public function getDefaultAction(): string
    {
        return $this->defaultAction;
    }
    /**
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