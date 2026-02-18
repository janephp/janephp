<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileBonjourFencingRuleMapping
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
     * Bonjour Service Type
     *
     * @var string
     */
    protected $serviceType;
    /**
     * @var string
     */
    protected $customServiceName;
    /**
     * The array of mdns string
     *
     * @var list<string>
     */
    protected $customStringList;
    /**
     * Bonjour Service Type
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Bonjour Service Type
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
     * @return string
     */
    public function getCustomServiceName(): string
    {
        return $this->customServiceName;
    }
    /**
     * @param string $customServiceName
     *
     * @return self
     */
    public function setCustomServiceName(string $customServiceName): self
    {
        $this->initialized['customServiceName'] = true;
        $this->customServiceName = $customServiceName;
        return $this;
    }
    /**
     * The array of mdns string
     *
     * @return list<string>
     */
    public function getCustomStringList(): array
    {
        return $this->customStringList;
    }
    /**
     * The array of mdns string
     *
     * @param list<string> $customStringList
     *
     * @return self
     */
    public function setCustomStringList(array $customStringList): self
    {
        $this->initialized['customStringList'] = true;
        $this->customStringList = $customStringList;
        return $this;
    }
}