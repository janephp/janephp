<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderAccounting
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
     * Accounting id
     *
     * @var string
     */
    protected $id;
    /**
     * Accounting name
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $realm;
    /**
     * Accounting service type
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Accounting id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Accounting id
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
     * Accounting name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Accounting name
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
     * Accounting service type
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Accounting service type
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
}