<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileRealmAuthServiceMapping
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
    protected $realm;
    /**
     * Authentication service type, NA is NA-Request Rejected
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Authentication service UUID
     *
     * @var string
     */
    protected $id;
    /**
     * Authentication service name
     *
     * @var string
     */
    protected $name;
    /**
     * Authorization method
     *
     * @var string
     */
    protected $authorizationMethod;
    /**
     * Dynamic VLAN ID
     *
     * @var int
     */
    protected $dynamicVlanId;
    /**
     * @var bool
     */
    protected $hostedAaaEnabled;
    /**
     * @return string
     */
    public function getRealm(): string
    {
        return $this->realm;
    }
    /**
     * @param string $realm
     *
     * @return self
     */
    public function setRealm(string $realm): self
    {
        $this->initialized['realm'] = true;
        $this->realm = $realm;
        return $this;
    }
    /**
     * Authentication service type, NA is NA-Request Rejected
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Authentication service type, NA is NA-Request Rejected
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Authentication service UUID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Authentication service UUID
     *
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
     * Authentication service name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Authentication service name
     *
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
     * Authorization method
     *
     * @return string
     */
    public function getAuthorizationMethod(): string
    {
        return $this->authorizationMethod;
    }
    /**
     * Authorization method
     *
     * @param string $authorizationMethod
     *
     * @return self
     */
    public function setAuthorizationMethod(string $authorizationMethod): self
    {
        $this->initialized['authorizationMethod'] = true;
        $this->authorizationMethod = $authorizationMethod;
        return $this;
    }
    /**
     * Dynamic VLAN ID
     *
     * @return int
     */
    public function getDynamicVlanId(): int
    {
        return $this->dynamicVlanId;
    }
    /**
     * Dynamic VLAN ID
     *
     * @param int $dynamicVlanId
     *
     * @return self
     */
    public function setDynamicVlanId(int $dynamicVlanId): self
    {
        $this->initialized['dynamicVlanId'] = true;
        $this->dynamicVlanId = $dynamicVlanId;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHostedAaaEnabled(): bool
    {
        return $this->hostedAaaEnabled;
    }
    /**
     * @param bool $hostedAaaEnabled
     *
     * @return self
     */
    public function setHostedAaaEnabled(bool $hostedAaaEnabled): self
    {
        $this->initialized['hostedAaaEnabled'] = true;
        $this->hostedAaaEnabled = $hostedAaaEnabled;
        return $this;
    }
}