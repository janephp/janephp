<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcCreateApplicationPolicyProfile
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
     * Identifier of the System (root) domain or partner managed domain to which the Application Policy Profile belongs
     *
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var list<AvcApplicationRule>
     */
    protected $applicationRules;
    /**
     * Send ARC logs from AP to external syslog server
     *
     * @var bool
     */
    protected $avcLogEnable;
    /**
     * Send ARC logs from AP to SmartZone
     *
     * @var bool
     */
    protected $avcEventEnable;
    /**
     * Identifier of the System (root) domain or partner managed domain to which the Application Policy Profile belongs
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Identifier of the System (root) domain or partner managed domain to which the Application Policy Profile belongs
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
     * @return list<AvcApplicationRule>
     */
    public function getApplicationRules(): array
    {
        return $this->applicationRules;
    }
    /**
     * @param list<AvcApplicationRule> $applicationRules
     *
     * @return self
     */
    public function setApplicationRules(array $applicationRules): self
    {
        $this->initialized['applicationRules'] = true;
        $this->applicationRules = $applicationRules;
        return $this;
    }
    /**
     * Send ARC logs from AP to external syslog server
     *
     * @return bool
     */
    public function getAvcLogEnable(): bool
    {
        return $this->avcLogEnable;
    }
    /**
     * Send ARC logs from AP to external syslog server
     *
     * @param bool $avcLogEnable
     *
     * @return self
     */
    public function setAvcLogEnable(bool $avcLogEnable): self
    {
        $this->initialized['avcLogEnable'] = true;
        $this->avcLogEnable = $avcLogEnable;
        return $this;
    }
    /**
     * Send ARC logs from AP to SmartZone
     *
     * @return bool
     */
    public function getAvcEventEnable(): bool
    {
        return $this->avcEventEnable;
    }
    /**
     * Send ARC logs from AP to SmartZone
     *
     * @param bool $avcEventEnable
     *
     * @return self
     */
    public function setAvcEventEnable(bool $avcEventEnable): self
    {
        $this->initialized['avcEventEnable'] = true;
        $this->avcEventEnable = $avcEventEnable;
        return $this;
    }
}