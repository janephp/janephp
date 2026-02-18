<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VlanpoolingCreateVlanPooling
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
     * identifier of the domain
     *
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $description;
    /**
     * VLANs of the VLAN pooling profile
     *
     * @var string
     */
    protected $pool;
    /**
     * Algorithm of the VLAN pooling profile
     *
     * @var string
     */
    protected $algo = 'MAC_HASH';
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
     * identifier of the domain
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * identifier of the domain
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
     * VLANs of the VLAN pooling profile
     *
     * @return string
     */
    public function getPool(): string
    {
        return $this->pool;
    }
    /**
     * VLANs of the VLAN pooling profile
     *
     * @param string $pool
     *
     * @return self
     */
    public function setPool(string $pool): self
    {
        $this->initialized['pool'] = true;
        $this->pool = $pool;
        return $this;
    }
    /**
     * Algorithm of the VLAN pooling profile
     *
     * @return string
     */
    public function getAlgo(): string
    {
        return $this->algo;
    }
    /**
     * Algorithm of the VLAN pooling profile
     *
     * @param string $algo
     *
     * @return self
     */
    public function setAlgo(string $algo): self
    {
        $this->initialized['algo'] = true;
        $this->algo = $algo;
        return $this;
    }
}