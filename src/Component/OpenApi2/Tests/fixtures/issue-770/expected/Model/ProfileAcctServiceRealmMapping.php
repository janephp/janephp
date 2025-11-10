<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileAcctServiceRealmMapping
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
     * Accounting service type, NA is NA-Request Rejected
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Accounting service UUID
     *
     * @var string
     */
    protected $id;
    /**
     * Accounting service name
     *
     * @var string
     */
    protected $name;
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
     * Accounting service type, NA is NA-Request Rejected
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Accounting service type, NA is NA-Request Rejected
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
     * Accounting service UUID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Accounting service UUID
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
     * Accounting service name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Accounting service name
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
}