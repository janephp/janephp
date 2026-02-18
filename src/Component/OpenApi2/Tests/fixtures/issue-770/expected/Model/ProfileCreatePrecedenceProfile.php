<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreatePrecedenceProfile
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
     * Domain UUID
     *
     * @var string
     */
    protected $domainId;
    /**
     * vlan precedence
     *
     * @var list<ProfileVlanPrecedenceItem>
     */
    protected $vlanPrecedence;
    /**
     * rate limiting precedence
     *
     * @var list<ProfileRateLimitingPrecedenceItem>
     */
    protected $rateLimitingPrecedence;
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
    /**
     * vlan precedence
     *
     * @return list<ProfileVlanPrecedenceItem>
     */
    public function getVlanPrecedence(): array
    {
        return $this->vlanPrecedence;
    }
    /**
     * vlan precedence
     *
     * @param list<ProfileVlanPrecedenceItem> $vlanPrecedence
     *
     * @return self
     */
    public function setVlanPrecedence(array $vlanPrecedence): self
    {
        $this->initialized['vlanPrecedence'] = true;
        $this->vlanPrecedence = $vlanPrecedence;
        return $this;
    }
    /**
     * rate limiting precedence
     *
     * @return list<ProfileRateLimitingPrecedenceItem>
     */
    public function getRateLimitingPrecedence(): array
    {
        return $this->rateLimitingPrecedence;
    }
    /**
     * rate limiting precedence
     *
     * @param list<ProfileRateLimitingPrecedenceItem> $rateLimitingPrecedence
     *
     * @return self
     */
    public function setRateLimitingPrecedence(array $rateLimitingPrecedence): self
    {
        $this->initialized['rateLimitingPrecedence'] = true;
        $this->rateLimitingPrecedence = $rateLimitingPrecedence;
        return $this;
    }
}