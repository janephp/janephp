<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderAuthentication
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
     * Authentication id
     *
     * @var string
     */
    protected $id;
    /**
     * Authentication name
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $realm;
    /**
     * Authentication service type
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Dynamic vlan ID
     *
     * @var int
     */
    protected $vlanId;
    /**
     * Authentication id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Authentication id
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
     * Authentication name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Authentication name
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
     * Authentication service type
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Authentication service type
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
     * Dynamic vlan ID
     *
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlanId;
    }
    /**
     * Dynamic vlan ID
     *
     * @param int $vlanId
     *
     * @return self
     */
    public function setVlanId(int $vlanId): self
    {
        $this->initialized['vlanId'] = true;
        $this->vlanId = $vlanId;
        return $this;
    }
}