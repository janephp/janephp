<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VlanpoolingVlanPoolingListListItem
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
     * Identifier of the service
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
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
     * identifier of the domain
     *
     * @var string
     */
    protected $domainId;
    /**
     * Description of the service
     *
     * @var string
     */
    protected $description;
    /**
     * Identifier of the service
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the service
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
     * Description of the service
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the service
     *
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
}