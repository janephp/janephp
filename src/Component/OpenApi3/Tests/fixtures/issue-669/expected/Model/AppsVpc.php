<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsVpc implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * @var list<AppsVpcEgressIp>
     */
    protected $egressIps;
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
     * @return list<AppsVpcEgressIp>
     */
    public function getEgressIps(): array
    {
        return $this->egressIps;
    }
    /**
     * @param list<AppsVpcEgressIp> $egressIps
     *
     * @return self
     */
    public function setEgressIps(array $egressIps): self
    {
        $this->initialized['egressIps'] = true;
        $this->egressIps = $egressIps;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'egressIps' => ['egress_ips', 'getEgressIps', 'setEgressIps']];
    }
}